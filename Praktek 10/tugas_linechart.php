<?php
include('koneksicovid.php');
$covid = mysqli_query($koneksi, "select * from tb_covid19");
while ($row = mysqli_fetch_array($covid)){
	$nama_negara[] = $row['countryother'];
	$query=mysqli_query($koneksi, "select totalcases, totaldeaths, totalrecovered, activecases, totaltests from tb_covid19 where id_covid='".$row['id_covid']."'");
	$row = $query->fetch_array();
	$totalcases[] = $row['totalcases'];
	$totaldeaths[] = $row['totaldeaths'];   
	$totalrecovered[] = $row['totalrecovered']; 
	$activecases[] = $row['activecases'];
    $totaltests[] = $row['totaltests'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Membuat Grafik Menggunakan Chart JS</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<div style="width: 1000px; height: 1000px">
		<canvas id="myChart"></canvas>
	</div>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {type: 'line',
			data: { 
				labels: <?php echo json_encode($nama_negara);?>, datasets: [{
					label: 'Total Cases',
					data: <?php echo json_encode($totalcases);
					?>,
					backgroundColor: 'rgba(255, 206, 86, 0.2)', 
					borderColor: 'rgba(255, 206, 86, 1)',  
					borderWidth: 1
				},
				{
					label: 'Total Deaths',
					data: <?php echo json_encode($totaldeaths);
					?>,
					backgroundColor: 'rgba(255, 69, 0, 0.2)',
					borderColor: 'rgba(255, 69, 0, 1)', 
					borderWidth: 1
				},
				{
					label: 'Total Recovered',
					data: <?php echo json_encode($totalrecovered);
					?>,
					backgroundColor: 'rgba(128, 0, 128, 0.2)',
					borderColor: 'rgba(128, 0, 128, 1)',
					borderWidth: 1
				},
                {
					label: 'Active Cases',
					data: <?php echo json_encode($activecases);
					?>,
					backgroundColor: 'rgba(139, 0, 0, 0.2)',
					borderColor: 'rgba(139, 0, 0, 1)',
					borderWidth: 1
				},
				{
					label: 'Total Tests',
					data: <?php echo json_encode($totaltests);
					?>,
					backgroundColor: 'rgba(46, 139, 87, 0.2)',
					borderColor: 'rgba(46, 139, 87, 1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true}
					}]
				}
			}});
	</script>
</body>
</html>