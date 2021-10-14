<html>
    <head>
        <title>String convert</title>
    </head>
    <body>
        <h1 style="color: blue;">String convert</h1>
        <br>
        <br>
        <form action="string.php" method="POST">
            <p><input type = "text" name = "string" value="string"></p>
            <p><input type = "radio" name = "choose" value ="+" checked > strlen
                <input type = "radio" name = "choose" value ="-"> strtolower
            </p>
            <p>
                <input type = "radio" name = "choose" value ="*"> trim
                <input type = "radio" name = "choose" value ="/"> strtoupper
            </p>
            <p><input type = "submit" value="Submit" name='submit'></p>
        </form>
        <p>
        <?php
            if(isset($_POST['submit'])){
                $n1 = $_POST['string'];
                $c = $_POST['choose'];
                if($c == "+"){
                    $l = strlen($n1);
                    print("strlen: $l");
                }
                elseif($c == "-"){
                    $l = strtolower($n1);
                    print("Result: $l");
                }
                elseif($c == "*"){
                    $l = trim($n1);
                    print("Result: $l");
                }
                else{
                    $l = strtoupper($n1);
                    print("Result: $l");
                }   
            }
            
            
        ?>
        </p>
    </body>
</html>