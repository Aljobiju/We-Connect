<!DOCTYPE html>
<html>
<head>
	<title>Column Chart Example</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
</head>
<body>
	<div style="width: 500px">
		<canvas id="myChart"></canvas>
	</div>

	<script>
		// Data for the chart
		var data = {
		    labels: ["January", "February", "March", "April", "May", "June", "July"],
		    datasets: [
		        {
		            label: "Sales",
		            backgroundColor: "rgba(255,99,132,0.2)",
		            borderColor: "rgba(255,99,132,1)",
		            borderWidth: 1,
		            hoverBackgroundColor: "rgba(255,99,132,0.4)",
		            hoverBorderColor: "rgba(255,99,132,1)",
		            data: [65, 59, 80, 81, 56, 55, 40],
		        }
		    ]
		};

		// Options for the chart
		var options = {
			responsive: true,
			legend: {
				display: false
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		};

		// Create the chart
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'bar',
		    data: data,
		    options: options
		});
	</script>
</body>
</html>
