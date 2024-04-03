<?php
$name  =$_POST["name"];
$email =$_POST["email"];
$memo  =$_POST["memo"];
$c     =",";
$str  = $name.$c.$email.$c.$memo;//aaa,bbb,ccc

// $file = fopen("data.csv","a");
// fwrite($file,$str);
// fclose($file);

header("Location: index.php");
exit;
?>
