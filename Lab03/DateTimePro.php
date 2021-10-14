<html>
  <head>
    <title>Date time validation</title>
  </head>
  <body>
  <p>Enter your name and select date and time for the appointment</p>
  <form action="DateTimePro.php" method = "POST">
  <p>Your name: <input type = "text" name="name"></p>
  <p>
  <?php
    print("Date:");
    print("&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;");
    print("<select name=\"date\">");
    for($i = 1;$i < 32;$i++){
      print("<option>$i</option>");
    }
    print("</select>");
    print("&nbsp;");
    print("<select name=\"month\">");
    for($i = 1;$i < 13;$i++){
      print("<option>$i</option>");
    }
    print("</select>");
    print("&nbsp;");
    print("<select name=\"year\">");
    for($i = 1;$i < 2022;$i++){
      print("<option>$i</option>");
    }
    print("</select>");
    print("<br>");
    print("Time:");
    print("&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;");
    print("<select name=\"hour\">");
    for($i = 0;$i < 24;$i++){
      print("<option>$i</option>");
    }
    print("</select>");
    print("&nbsp;");
    print("<select name=\"minute\">");
    for($i = 0;$i < 60;$i++){
      print("<option>$i</option>");
    }
    print("</select>");
    print("&nbsp;");
    print("<select name=\"sec\">");
    for($i = 0;$i < 60;$i++){
      print("<option>$i</option>");
    }
    print("</select>");
  ?>
  </p>
  <input type = "submit" name = "submit" value="submit">
  <input type = "reset" name = "reset" value="reset">
  </form>
  <?php
  if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $date = $_POST["date"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    $hour = $_POST["hour"];
    $min = $_POST["minute"];
    $sec = $_POST["sec"];
    print("Hello $name !<br>");
    print("You have choose to have an appointment on $hour:$min:$sec, $date/$month/$year<br><br>More information<br><br>");
    if($hour < 12){
      print("In 12 hour, the time and date is $hour:$min:$sec AM, $date/$month/$year<br><br>");
    }else{
      $h = $hour - 12;
      print("In 12 hour, the time and date is $h:$min:$sec PM, $date/$month/$year<br><br>");
    }
    if($month == 4 || $month == 6 || $month == 9 || $month == 11){
      print("This month has 30 days");
    }else if($month == 2){
      if($year%4 == 0){
        if($year%100 == 0){
          if($year%400 == 0){
            print("This month has 29 days");
          }else{
            print("This month has 28 days");
          }
        }else{
          print("This month has 29 days");
        }
      }else{
        print("This month has 28 days");
      }
    }else{
      print("This month has 30 days");
    }
  }
  ?>
  </body>
</html>