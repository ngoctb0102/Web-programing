<?php session_start() ?>
<html>
    <head>
        <title>Cart</title>
        <style>
            table, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <h1 style="color: blue">Your cart</h1>
        <br>
        <?php
            class Item {
                public $name;
                public $publisher;
                public $sku;
                public $platform;

                function __construct($name, $publisher, $sku, $platform){
                    $this->name = $name;
                    $this->publisher = $publisher;
                    $this->sku = $sku;
                    $this->platform = $platform;
                }
            }
            if(#!array_key_exists('cart', $_SESSION)
                !isset($cart)    
            ){
                $cart = array();
                # $_SESSION['cart'] = serialize(array());
            }
            # $cart = unserialize($_SESSION['cart']);
            $productName = $_SESSION['productName'];
            $xml = simplexml_load_file('products.xml') or die("Cant open xml file.");

            foreach($xml->xpath("//item[name = '$productName']") as $item){
                array_push($cart, new Item("$item->name", "$item->publisher", "$item->sku", "$item->platform"));
            }
            print "<table>";
            foreach($cart as $item){
                print "<tr>
                            <td width=100px style=\"text-align: center;\">$item->name</td>
                            <td width=200px>
                                <ul>
                                    <li>$item->publisher
                                    <li>$item->sku
                                    <li>$item->platform
                                </ul>
                            </td>
                       </tr>";
            }
            print "</table>";
        ?>
        <br>
        <form action="chooseForm.php" method="post">
            <input type="submit" value="Continue shopping">
        </form>
    </body>
</html>