<html>
    <head>
        <title>Choose form</title>
        <style>
            option {
                width: 70px;
            }
        </style>
    </head>
    <body>
        <h1 style="color: blue;">Main screen</h1>
        <label for="products">Choose a product</label>
        <form action="detailForm.php" method="post" id="chooseProduct">
            <select name="productName" id="productName" form="chooseProduct" width=200px>
                <?php
                    $file = "products.xml";
                    $xml = simplexml_load_file($file) or die("Can't open xml file.");
                    foreach($xml->xpath('//name') as $name){
                        print "<option value=\"$name\">$name</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Go">
        </form>
    </body>
</html>