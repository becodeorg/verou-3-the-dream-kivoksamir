<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    

<h1>Converte from Euro</h1>
<form action="" method="get">
Enter Euro amount : <input type="text" name="input" class="amount" />
Select Currency : 
<select name="select_1">
<option value="usa">Us Dollar</option>
<option value="swiss">Swiss Franc</option>
<option value="pound">British Pound</option>
<option value="ca_dollar">Canadian Dollar</option>
<option value="japan">Japanese Yen</option>

</select>
<input type="submit" name="sbmt" value="Convert" class="button" />
</form>
</body>
</html>







<?php

if(isset($_GET["sbmt"]))
 {
  $cc_input = $_GET["input"];
  $select_1 = $_GET['select_1'];
  
  if($select_1 == "usa")
  {
   $output = $cc_input * 1.14;
   echo"<br>";
   echo "<h3>" .$output . " Dollar" . "</h3>";
  }
  else if($select_1 == "swiss")
  {
   $output = $cc_input * 1.05;
   echo"<br>";
   echo "<h3>" . $output. " Swiss franc" . "</h3>";
  }
  else if($select_1 == "pound")
  {
   $output = $cc_input * 0.84;
   echo"<br>";
   echo "<h3>" . $output . " Pound Sterling" . "</h3>";
   
  }elseif($select_1== "ca_dollar"){
      $output = $cc_input * 1.44;
      echo"<br>";
      echo "<h3>" . $output . " Canadian Dollars". "<h3>";

  }elseif($select_1== "japan"){
    $output = $cc_input * 131.53;
    echo"<br>";
    echo "<h3>" . $output . " Japanese Yen ". "<h3>";
 };
}
 ?>

 






    


