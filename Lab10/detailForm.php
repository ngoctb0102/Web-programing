<?php session_start() ?>
<html>
    <head>
        <title>Detail</title>
        <style>
            table.border td{
                border: 1px solid lightgreen; 
                border-collapse: collapse;
                width: 150px;
            }
        </style>
    </head>
    <body>
        <h1 style="color: blue;">Product detail</h1>
        <?php
            $xml = simplexml_load_file("products.xml") or die("Can't open xml file.");
            $chosen_product_name = $_POST['productName'];
            foreach($xml->xpath("//item[name = '$chosen_product_name']") as $chosen_product){
                $_SESSION['productName'] = "$chosen_product->name";
                print  "<table class=\"border\">
                            <tr>
                                <td style=\"text-align: left\">Name</td>
                                <td style=\"text-align: right\">$chosen_product->name</td>
                            </tr>
                            <tr>
                                <td style=\"text-align: left\">Publisher</td>
                                <td style=\"text-align: right\">$chosen_product->publisher</td>
                            </tr>
                            <tr>
                                <td style=\"text-align: left\">SKU</td>
                                <td style=\"text-align: right\">$chosen_product->sku</td>
                            </tr>
                            <tr>
                                <td style=\"text-align: left\">Platform</td>
                                <td style=\"text-align: right\">$chosen_product->platform</td>
                            </tr>
                        </table>";
            }
        ?>
        <br>
        <table>
            <tr>
                <td width=100px>
                    <form action="chooseForm.php" method="post">
                        <input type="submit" value="Back">
                    </form>
                </td>   
                <td>
                    <form action="shoppingCart.php" method="post">
                        <input type='submit' value="Add to cart">
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>