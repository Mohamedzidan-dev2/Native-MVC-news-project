<?php 
   require_once"includes/header.php";
   require_once"includes/sidebar.php";
   $active ="dashboard";
?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><span style="color: brown;"><i class="fa fa-pencil-square-o fa-3x" aria-hidden="true"></i></span>
							<div class="large"><?= $num_news;?></div>
							<div class="text-muted">All News</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><span style="color: brown;"><i class="fa fa-user-circle-o fa-3x" aria-hidden="true"></i></span>
							<div class="large"><?= $num_admins; ?></div>
							<div class="text-muted">Admins</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><span style="color: brown;"><i class="fa fa-users fa-3x" aria-hidden="true"></i></span>
							<div class="large"><?= $num_users;?></div>
							<div class="text-muted">All Users</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><span style="color: red;"><i class="fa fa-search fa-2x" aria-hidden="true"></i></span>
							<div class="large">25.2k</div>
							<div class="text-muted">Page Views</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
		<div class="row">
			<div class="col-md-6">

			<!-- first chart 1  /////////////////////////////////////////////////////////////////////////////////////// -->
			<canvas id="myChart" style="width:100%;max-width:600px ;height:350px"></canvas>

				<script>
				var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
				var yValues = [100, 49, 44, 24, 15];
				var barColors = ["red", "green","blue","orange","brown"];

				new Chart("myChart", {
				type: "bar",
				data: {
					labels: xValues,
					datasets: [{
					backgroundColor: barColors,
					data: yValues
					}]
				},
				options: {
					legend: {display: false},
					title: {
					display: true,
					text: "Users From Diffrent Countries"
					}
				}
				});



				</script>
				
			</div>

			<div class="col-md-6">
				     
                    <!-- second chart 2  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
			       <canvas id="myChart2" style="width:100%;max-width:600px;height:350px"></canvas>

					<script>
						
					var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
					var yValues = [55, 49, 44, 24, 15];
					var barColors = [
					"#b91d47",
					"#00aba9",
					"#2b5797",
					"#e8c3b9",
					"#1e7145"
					];

					new Chart("myChart2", {
					type: "doughnut",
					data: {
						labels: xValues,
						datasets: [{
						backgroundColor: barColors,
						data: yValues
						}]
					},
					options: {
						title: {
						display: true,
						text: "Users From Diffrent Countries"
						}
					}
					});
					</script>




			</div><!--/.col-->
		</div><!--/.row-->

	</div>	<!--/.main-->
	
<?php require_once"includes/footer.php"; ?>