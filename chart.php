<?php
include 'update.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/chart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.1/chart.min.js" integrity="sha512-5vwN8yor2fFT9pgPS9p9R7AszYaNn0LkQElTXIsZFCL7ucT8zDCAqlQXDdaqgA1mZP47hdvztBMsIoFxq/FyyQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Sale Chart</title>
</head>


<body>

    <div class="container">
        <div class="row ttt">
            <div class="col-md-12 col-lg-12 col-sm-12 text-center">
                <h3 id="ags">Agent Sales Chart</h3>
                
            </div>
            <div class="col-md-12 col-lg-12 col-sm-12">
                <canvas id="myChart" class="center">


                </canvas>
            </div>
        </div>

    </div>
    <script>
        function addData(chart, label, data) {
            chart.data.labels.push(label);
            chart.data.datasets.forEach((dataset) => {
                dataset.data.push(data);
            });
            chart.update();
        }
    </script>


    <?php






    echo "<script>
   let myChart=document.getElementById('myChart').getContext('2d')
   let chart= new Chart(myChart,{
       type:'bar', // bar,pie,horizontalBar,line,radar,polarArea,doughnut
       data:{
           labels:['Ayo jakande','joy bello','emeka okon','hassan haruna','jumai akanni'],
           datasets:[{
               label:'sales chart',
               data:[$timeOfPost,$timeOfPost2,$timeOfPost3,$timeOfPost4,$timeOfPost5],
                 backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
           }]
       },    // for data
       options:{}
   }); 
   </script>
 "
    ?>
</body>

</html>