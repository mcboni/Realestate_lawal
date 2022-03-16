<?php
include 'dbconnection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
       
  <?php    
  session_start();    
     error_reporting(E_ALL);
ini_set('display_errors', 1);


 
if (isset($_POST['sub'])) {
    $nam = $_POST['nam'];
    $sales = $_POST['password'];

  
    $query =$connect->prepare("INSERT INTO chart (label,sales) VALUES ('$nam','$sales' )");
        $query->bindParam(":label", $nam, PDO::PARAM_STR);
        $query->bindParam(":sales", $sales, PDO::PARAM_STR);
        $result = $query->execute();

        
 
       
    
}

$sql=$connect-> prepare("SELECT sales FROM chart WHERE label='Ayo Jakande' ");
 $sql->execute();
 $res=$sql;

foreach ($res as $row){

  $timeOfPost=$row['sales'];

   
  }

 


$sql2=$connect-> prepare("SELECT sales FROM chart WHERE label='joy bello' ");
 $sql2->execute();
 $res2=$sql2;

foreach ($res2 as $row2){

  $timeOfPost2=$row2['sales'];

 
}

$sql3=$connect-> prepare("SELECT sales FROM chart WHERE label='emeka okon' ");
 $sql3->execute();
 $res3=$sql3;

foreach ($res3 as $row3){

  $timeOfPost3=$row3['sales'];

 
}

$sql4=$connect-> prepare("SELECT sales FROM chart WHERE label='hassan haruna' ");
 $sql4->execute();
 $res4=$sql4;

foreach ($res4 as $row4){

  $timeOfPost4=$row4['sales'];

 
}

$sql5=$connect-> prepare("SELECT sales FROM chart WHERE label='jumai akanni' ");
 $sql5->execute();
 $res5=$sql5;

foreach ($res5 as $row5){

  $timeOfPost5=$row5['sales'];
  

 
}

 
?>
</body>
</html>