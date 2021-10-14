<html>
  <head>
    <title>Date time validation</title>
  </head>
  <body>
  <?php
  function DegToRad($def){
    $pi = 3.1415926535;
    return $def/180*$pi;
  }
  function RadToDeg($rad){
    $pi = 3.1415926535;
    return $rad*180/$pi;
  }
  function isValid($date, $month, $year){
    if($month == 4 || $month == 6 || $month == 9 || $month == 11){
      if($date < 31){
        return 1;
      }else{
        return 0;
      }
    }else if($month == 2){
      if($year%4 == 0){
        if($year%100 == 0){
          if($year%400 == 0){
            if($date <30){
              return 1;
            }else{
              return 0;
            }
          }else{
            if($date <29){
              return 1;
            }else{
              return 0;
            }
          }
        }else{
          if($date <30){
            return 1;
          }else{
            return 0;
          }
        }
      }else{
        if($date <29){
          return 1;
        }else{
          return 0;
        }
      }
    }else{
      return 1;
    }
  }
  ?>
  <p>Enter your name and select date of birth</p>
  <form action="DateTimeFunction.php" method = "POST">
  <p>first person name: <input type = "text" name="name1"></p>
  <p>
  <?php
    print("Date of birth:");
    print("&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;");
    print("<select name=\"date1\">");
    for($i = 1;$i < 32;$i++){
      print("<option>$i</option>");
    }
    print("</select>");
    print("/");
    print("<select name=\"month1\">");
    for($i = 1;$i < 13;$i++){
      print("<option>$i</option>");
    }
    print("</select>");
    print("/");
    print("<select name=\"year1\">");
    for($i = 2021;$i >0;$i--){
      print("<option>$i</option>");
    }
    print("</select>");  
  ?>
  </p>
  <p>second person name: <input type = "text" name="name2"></p>
  <p>
  <?php
    print("Date of birth:");
    print("&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;");
    print("<select name=\"date2\">");
    for($i = 1;$i < 32;$i++){
      print("<option>$i</option>");
    }
    print("</select>");
    print("/");
    print("<select name=\"month2\">");
    for($i = 1;$i < 13;$i++){
      print("<option>$i</option>");
    }
    print("</select>");
    print("/");
    print("<select name=\"year2\">");
    for($i = 2021;$i > 0 ;$i--){
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
    $name1 = $_POST["name1"];
    $date1 = $_POST["date1"];
    $month1 = $_POST["month1"];
    $year1 = $_POST["year1"]; 
    $name2 = $_POST["name2"];
    $date2 = $_POST["date2"];
    $month2 = $_POST["month2"];
    $year2 = $_POST["year2"];
    if(isValid($date1,$month1,$year1) == 1 && isValid($date2,$month2,$year2) == 1){
      echo "$name1: ";
      $strtime1 = $date1."-".$month1."-".$year1;
      $time1 = new DateTime($strtime1);
      echo $time1->format("l,F d,Y");
      echo "<br>$name2: ";
      $strtime2 = $date2."-".$month2."-".$year2;
      $time2 = new DateTime($strtime2);
      echo $time2->format("l,F d,Y");
      $diff = $time1->diff($time2)->days;
      print("<br>Difference between 2 dates is $diff days");
      $date = date("Y");
      $diff1 = $date - $yaer1;
      $diff2 = $date - $year2;
      print("<br>$name1 is $diff1 years old");
      print("<br>$name2 is $diff2 years old");
    }else{
      print("Invalid birthday");
    }
  }
  ?>
  </body>
</html>