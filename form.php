<?php
include 'dbconnection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="favicon.ico?v=2" />
  <link rel="stylesheet" type="text/css" href="css/form.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap" rel="stylesheet">
  <title>Form Update</title>
</head>

<body>
  <div class="container">
    <div class="row form-style mx-auto">
      <div class="col-lg-12 col-sm-12 col-md-12 text-center">
        <h3 id="agps">AGENT PERFORMANCE MANAGEMENT SYSTEM</h3>
        <?php
        session_start();
        error_reporting(E_ALL);
        ini_set('display_errors', 1);



        if (isset($_POST['sub'])) {
          echo "<section class=' agpu text-center'> Agent performance Updated</section>
          <small><a href='chart.php'>View Chart Here</a></small>";
          $nam = $_POST['nam'];
          $sales = $_POST['password'];


          $query = $connect->prepare("INSERT INTO chart (label,sales) VALUES ('$nam','$sales' )");
          $query->bindParam(":label", $nam, PDO::PARAM_STR);
          $query->bindParam(":sales", $sales, PDO::PARAM_STR);
          $result = $query->execute();
        }

        $sql = $connect->prepare("SELECT sales FROM chart WHERE label='Ayo Jakande' ");
        $sql->execute();
        $res = $sql;

        foreach ($res as $row) {

          $timeOfPost = $row['sales'];
        }




        $sql2 = $connect->prepare("SELECT sales FROM chart WHERE label='joy bello' ");
        $sql2->execute();
        $res2 = $sql2;

        foreach ($res2 as $row2) {

          $timeOfPost2 = $row2['sales'];
        }

        $sql3 = $connect->prepare("SELECT sales FROM chart WHERE label='emeka okon' ");
        $sql3->execute();
        $res3 = $sql3;

        foreach ($res3 as $row3) {

          $timeOfPost3 = $row3['sales'];
        }

        $sql4 = $connect->prepare("SELECT sales FROM chart WHERE label='hassan haruna' ");
        $sql4->execute();
        $res4 = $sql4;

        foreach ($res4 as $row4) {

          $timeOfPost4 = $row4['sales'];
        }

        $sql5 = $connect->prepare("SELECT sales FROM chart WHERE label='jumai akanni' ");
        $sql5->execute();
        $res5 = $sql5;

        foreach ($res5 as $row5) {

          $timeOfPost5 = $row5['sales'];
        }


        ?>
      </div>
      <div class="col-md-6 col-lg-6 col-sm-12">
        <img src="css/Computer login-rafiki.png" class="form-img" alt="form-img">
      </div>
      <div class="col-md-6 col-lg-6 col-sm-12 mx-auto">
        <form id="frm" method="post">
          <!--Defining form group for emails -->
          <div class="form-group ">
            <!--Label for Input type email -->
            <label for="InputEmail1" id="agn">Agent Name</label>
            <!--Defining Input type for form field -->
            <input name="nam" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
          </div>


          <!--Defining form group for passwords-->
          <div class="form-group " id="frmgrp">
            <!--Label for Input type password -->
            <label for="sales" id="agp">Agent Performance</label>
            <!--Defining Input type for form field -->
            <input name="password" class="form-control" id="exampleInputPassword1" required>

          </div>

          <input type="submit" name='sub' class="btn btn-block" id="submit" value='Update' onclick="addData">



        </form>
      </div>
    </div>
  </div>
</body>

</html>