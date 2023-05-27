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
	<title>Pie Chart Data Covid-19</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<div class="container" align="center">
	<div id="canvas-holder" style="width:40%">
		<h2> Total Cases </h2>
		<canvas id="myChart"></canvas>
		<br>
		<br>
		<h2> Total Deaths </h2>
		<canvas id="myChart1"></canvas>
		<br>
		<br>
		<h2> Total Recovered </h2>
		<canvas id="myChart2"></canvas>
		<br>
		<br>
		<h2> Active Cases </h2>
		<canvas id="myChart3"></canvas>
		<br>
		<br>
		<h2> Total tests </h2>
		<canvas id="myChart4"></canvas>
	</div>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {type: 'pie',
			data: {
				datasets: [{
					data:<?php echo json_encode($totalcases);
					?>,
					label: 'Total Cases',
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(119, 136, 153, 0.2)',
					'rgba(255, 69, 0, 0.2)',
					'rgba(0, 0, 128, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(139, 0, 0, 0.2)',
					'rgba(46, 139, 87, 0.2)'],
					borderColor:[
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(255, 69, 0, 1)',
					'rgba(0, 0, 128, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(139, 0, 0, 1)',
					'rgba(46, 139, 87, 1)'],
				}],
				labels:<?php echo json_encode($nama_negara);?>},
				options: {
					responsive: true,
				scales:{

				}
				}
				});
			</script>
			<script>
				var ctx1 = document.getElementById("myChart1").getContext('2d');
		var myChart1 = new Chart(ctx1, {type: 'pie',
			data: {
				datasets: [{
					data:<?php echo json_encode($totaldeaths);
					?>,
					label: 'Total Deaths',
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(119, 136, 153, 0.2)',
					'rgba(255, 69, 0, 0.2)',
					'rgba(0, 0, 128, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(139, 0, 0, 0.2)',
					'rgba(46, 139, 87, 0.2)'],
					borderColor:[
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(255, 69, 0, 1)',
					'rgba(0, 0, 128, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(139, 0, 0, 1)',
					'rgba(46, 139, 87, 1)'],
				}],
				labels:<?php echo json_encode($nama_negara);?>},
				options: {
					responsive: true,
				scales:{

				}
				}
				});
			</script>
			<script>
				var ctx2 = document.getElementById("myChart2").getContext('2d');
		var myChart2 = new Chart(ctx2, {type: 'pie',
			data: {
				datasets: [{
					data:<?php echo json_encode($totalrecovered);
					?>,
					label: 'Total Recovered',
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(119, 136, 153, 0.2)',
					'rgba(255, 69, 0, 0.2)',
					'rgba(0, 0, 128, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(139, 0, 0, 0.2)',
					'rgba(46, 139, 87, 0.2)'],
					borderColor:[
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(255, 69, 0, 1)',
					'rgba(0, 0, 128, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(139, 0, 0, 1)',
					'rgba(46, 139, 87, 1)'],
				}],
				labels:<?php echo json_encode($nama_negara);?>},
				options: {
					responsive: true,
				scales:{

				}
				}
				});
			</script>
			<script>
				var ctx3 = document.getElementById("myChart3").getContext('2d');
		var myChart3 = new Chart(ctx3, {type: 'pie',
			data: {
				datasets: [{
					data:<?php echo json_encode($activecases);
					?>,
					label: 'Active Cases',
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(119, 136, 153, 0.2)',
					'rgba(255, 69, 0, 0.2)',
					'rgba(0, 0, 128, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(139, 0, 0, 0.2)',
					'rgba(46, 139, 87, 0.2)'],
					borderColor:[
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(255, 69, 0, 1)',
					'rgba(0, 0, 128, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(139, 0, 0, 1)',
					'rgba(46, 139, 87, 1)'],
				}],
				labels:<?php echo json_encode($nama_negara);?>},
				options: {
					responsive: true,
				scales:{

				}
				}
				});
			</script>
			<script>
				var ctx4 = document.getElementById("myChart4").getContext('2d');
				var myChart4 = new Chart(ctx4, {type: 'pie',
			data: {
				datasets: [{
					data:<?php echo json_encode($totaltests);
					?>,
					label: 'Total Tests',
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(119, 136, 153, 0.2)',
					'rgba(255, 69, 0, 0.2)',
					'rgba(0, 0, 128, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(139, 0, 0, 0.2)',
					'rgba(46, 139, 87, 0.2)'],
					borderColor:[
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(255, 69, 0, 1)',
					'rgba(0, 0, 128, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(139, 0, 0, 1)',
					'rgba(46, 139, 87, 1)'],
				}],
				labels:<?php echo json_encode($nama_negara);?>},
				options: {
					responsive: true,
				scales:{

				}
				}
				});
			</script>
</body>
</html>