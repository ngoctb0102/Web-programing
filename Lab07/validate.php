<html>
    <head>
        <title>Validate</title>
    </head>
    <body>
        <h1>Validate</h1>
        <form action='<?php echo $_SERVER['PHP_SELF']?>' method='get'>
            <table>
                <tr>
                    <td>Enter email</td>
                    <td><input type='text' name='email'></td>
                </tr>
                <tr>
                    <td>Enter url</td>
                    <td><input type='text' name='url'></td>
                </tr>
                <tr>
                    <td>Enter phone number</td>
                    <td><input type='text' name='phone'></td>
                </tr>
            </table>
            <br>
            <input type='submit' name='submit' value='submit'>
            <input type='reset' name='reset'>
        </form>

        <?php
            if(isset($_GET['submit'])){
                if(empty($_GET['email'])){
                    $email_valid = "Not entered";
                } else {
                    $email = $_GET['email'];
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $email_valid = "Valid email";
                    } else {
                        $email_valid = "Invalid email";
                    }
                }

                if(empty($_GET['url'])){
                    $url_valid = "Not entered";
                } else {
                    $url = $_GET['url'];
                    if(preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url)){
                        $url_valid = "Valid email";
                    } else {
                        $url_valid = "Invalid email";
                    }
                }

                if(empty($_GET['phone'])){
                    $phone_valid = "Not entered";
                } else {
                    $phone = $_GET['phone'];
                    if(preg_match("/^[0-9]{10}$/", $phone)){
                        $phone_valid = "Valid email";
                    } else {
                        $phone_valid = "Invalid email";
                    }
                }

                // print result
                print ("<br>Result<br>
                        <ul>
                            <li>$email_valid</li>
                            <li>$url_valid</li>
                            <li>$phone_valid</li>
                        </ul>");
            }
        ?>
    </body>
</html>