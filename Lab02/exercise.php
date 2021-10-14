<html>
    <head>
        <title>profile</title>
    </head>
    <body>
        <h1 style="color: blue;">profile</h1>
        <br>
        <br>
        <form action="exercise.php" method="POST">
            <p>Your name : <input type = "text" name = "name"></p>
            <p>Class : <input type = "text" name = "class"></p>
            <p>University: <input type = "text" name = "uni"></p>
            <p>Hobbies</p>
            <p><input type = "checkbox" name = "sport" value = "Yes"> sport</p>
            <p><input type = "checkbox" name = "dance" value = "Yes"> dance</p>
            <p><input type = "checkbox" name = "learn" value = "Yes"> learn</p>
            <p><input type = "checkbox" name = "game" value = "Yes"> game</p>
            <p><input type = "checkbox" name = "discover" value = "Yes"> discover</p>
            <p><input type = "checkbox" name = "picnic" value = "Yes"> picnic</p>
            <p><input type = "checkbox" name = "walk" value = "Yes"> walk</p>
            <p><input type = "checkbox" name = "nothing" value = "Yes"> do not thing</p>
            <p><input type = "submit" name = "submit" value ="print"></p>
        </form>
        <p>
        <?php
            if(isset($_POST["submit"])){
                $name = $_POST["name"];
                $class = $_POST["class"];
                $uni = $_POST["uni"];
                $sport = $_POST["sport"];
                $dance = $_POST["dance"];
                $learn = $_POST["learn"];
                $game = $_POST["game"];
                $discover = $_POST["discover"];
                $picnic = $_POST["picnic"];
                $walk = $_POST["walk"];
                $nothing = $_POST["nothing"];
                print("Hello, $name <br>");
                print("You are studying at $class, $uni<br>");
                print("Your hobby is<br>");
                if($sport == "Yes"){
                    print("- Sport<br>");
                }
                if($dance == "Yes"){
                    print("- Dance<br>");
                }
                if($learn == "Yes"){
                    print("- Learn<br>");
                }
                if($game == "Yes"){
                    print("- Game<br>");
                }
                if($discover == "Yes"){
                    print("- Discover<br>");
                }
                if($picnic == "Yes"){
                    print("- Picnic<br>");
                }
                if($walk == "Yes"){
                    print("- Walk<br>");
                }
                if($nothing == "Yes"){
                    print("- Do not thing");
                }
            }
            
            
        ?>
        </p>
    </body>
</html>