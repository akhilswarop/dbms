<!DOCTYPE html>
<html lang="en">
<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<style>
*{
  font-family:Montserrat;
  text-align: center;
}
</style>
<?php
	$conn = new mysqli('localhost','root','','water_distribution');
	if($conn->connect_error){
	    echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $sql = ("SELECT * FROM house");
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
          $state[] = $row['h_id'];
          $deaths[] = $row['total_wc'];
        }
	}
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<h3>Usage Statistics</h3>
<div style="display: flex;">
  <div style="width: 50%;">
    <canvas id="barChart"></canvas>
  </div>
  <div style="width: 50%;">
    <canvas id="pieChart"></canvas>
  </div>
</div>
 
<script>
  const labels = <?php echo json_encode($state) ?>;
  const data = {
    labels: labels,
    datasets: [{
      data: <?php echo json_encode($deaths) ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };

  // create a config object for the bar chart
  const barConfig = {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

  // create a chart instance for the bar chart
  var barChart = new Chart(
    document.getElementById('barChart'),
    barConfig
  );

  // create a config object for the pie chart
  const pieConfig = {
    type: 'pie',
    data: data,
    options: {},
  };

  // create a chart instance for the pie chart
  var pieChart = new Chart(
    document.getElementById('pieChart'),
    pieConfig
  );
  </script>