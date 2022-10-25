<script src="<?= DOMAIN_NAME;?>dashboard/js/jquery-1.11.1.min.js"></script>
	<script src="<?= DOMAIN_NAME;?>dashboard/js/bootstrap.min.js"></script>
	<script src="<?= DOMAIN_NAME;?>dashboard/js/chart.min.js"></script>
	<script src="<?= DOMAIN_NAME;?>dashboard/js/chart-data.js"></script>
	<script src="<?= DOMAIN_NAME;?>dashboard/js/easypiechart.js"></script>
	<script src="<?= DOMAIN_NAME;?>dashboard/js/easypiechart-data.js"></script>
	<script src="<?= DOMAIN_NAME;?>dashboard/js/bootstrap-datepicker.js"></script>
	<script src="<?= DOMAIN_NAME;?>dashboard/js/custom.js"></script>
	<!-- addnews -->
	<script src="<?= DOMAIN_NAME;?>dashboard/js/news/addnews.js"></script>
	<!-- editnews -->
	<script src="<?= DOMAIN_NAME;?>dashboard/js/news/editnews.js"></script>
	<!-- addcategory -->
	<script src="<?= DOMAIN_NAME;?>dashboard/js/category/addcategory.js"></script>
	<!-- edit category -->
	<script src="<?= DOMAIN_NAME;?>dashboard/js/category/editcategory.js"></script>
	<!-- add users -->
	<script src="<?= DOMAIN_NAME;?>dashboard/js/users/adduser.js"></script>
	<!-- edit user -->
	<script src="<?= DOMAIN_NAME;?>dashboard/js/users/edituser.js"></script>
	<!-- add admins  -->
	<script src="<?= DOMAIN_NAME;?>dashboard/js/admins/add_admins.js"></script>
	<!-- edit admin -->
	<script src="<?= DOMAIN_NAME;?>dashboard/js/admins/editadmin.js"></script>
	<!-- messages -->
	<script src="<?= DOMAIN_NAME;?>dashboard/js/messages/message.js"></script>


	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
	
</body>
</html>