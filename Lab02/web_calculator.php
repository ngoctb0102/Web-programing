<html>
    <head>
        <title>Calculator</title>
    </head>
    <body>
        <h1 style="color: blue;">Web Calculator</h1>
        <br>
        <br>
        <form action="web_calculator.php" method="POST">
            <p><input type = "text" name = "num1" value="nhap so thu 1"></p>
            <p><input type = "radio" name = "choose" value ="+" checked > +
                <input type = "radio" name = "choose" value ="-"> - 
                <input type = "radio" name = "choose" value ="*"> *
                <input type = "radio" name = "choose" value ="/"> /
            </p>
            <p><input type = "text" name = "num2"  value = "nhap so thu 2"></p>
            <p><input type = "submit" value="Submit" name = "submit"></p>
        </form>
        <p>
        <?php
            if(isset($_POST['submit'])){
                $n1 = $_POST['num1'];
                $n2  = $_POST['num2'];
                $c = $_POST["choose"];
                if($n2 != NULL){
                    if($c == "+"){
                        $t = $n1 + $n2;
                        print("Result: $t");
                    }
                    elseif($c == "-"){
                        $t = $n1 - $n2;
                        print("Result: $t");
                    }
                    elseif($c == "*"){
                        $t = $n1 * $n2;
                        print("Result: $t");
                    }
                    else{
                        if($n2 != 0){
                            $t = $n1 / $n2;
                            print("Result: $t");
                        }
                        else{
                            print("devision by zero");
                        } 
                    }   
                }
            }
            
            
        ?>
        </p>
    </body>
</html>