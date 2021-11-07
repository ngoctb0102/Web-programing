<html>
    <head>
        <title>Table Output</title>
        
        <style>
            th {
                background-color: lightgray;
            }
        </style>
    </head>
    
    <body>
        <?php
            $host = 'localhost';
            $user = 'ngoc';
            $passwd = '123';
            $database = 'business_service';
            $connect = mysqli_connect($host, $user, $passwd);
            $table_name = 'categories';

            mysqli_select_db($connect,$database);

            if (isset($_POST["submit"])) {
                $categoryID = $_POST["categories_id"];
                $title = $_POST["title"];
                $description = $_POST["description"];
                $insertquery =  "Insert into $table_name value('$categoryID','$title', '$description');";

                $connect->query($insertquery);
            }

            print '<font size="5" color="blue">';
            print "Category Administration</font><br>";

            $query = "SELECT * FROM $table_name";
            $results_id = mysqli_query($connect,$query);
            
            if ($results_id) {
                print '<form action="" method="post">';
                print '<table border=1 style="width:100%">';
                print '<th style="width:20%">CatID<th>Title<th>Description';
                
                while ($row = mysqli_fetch_row($results_id)) {
                    print '<tr>';
                    foreach ($row as $field) {
                        print "<td>$field</td> ";
                    }
                    print '</tr>';
                }
                
                print '<tr>';
                print '<td><input type="text" style="width:100%" name="categories_id"></td>';
                print '<td><input type="text" style="width:100%" name="title"></td>';
                print '<td><input type="text" style="width:100%" name="description"></td>';
                print '</tr>';
                print '</table>';
                print '<input type="submit" name = "submit" value="Add Category">';
                print '</form>';
            } else {
                die("Query=$query failed!");
            }
            
            mysqli_close($connect);
        ?> 
    </body>
</html>