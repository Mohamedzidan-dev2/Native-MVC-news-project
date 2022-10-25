<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title; ?> Dashboard</title>
	<link href="<?= DOMAIN_NAME;?>dashboard/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= DOMAIN_NAME;?>dashboard/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?= DOMAIN_NAME;?>dashboard/css/datepicker3.css" rel="stylesheet">
	<link href="<?= DOMAIN_NAME;?>dashboard/css/styles.css" rel="stylesheet">
	<link href="<?= DOMAIN_NAME;?>dashboard/css/users.css" rel="stylesheet">
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

	<style>
		.img-circle{
			width: 30px;
			height: 30px;
		}
	</style>
		
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger myspan2"><?= $num_unread_messages;?></span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
		

							<li class="divider"></li>
<?php foreach($info_of_new_message as $info){ ?>							
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="<?=DOMAIN_NAME;?>images/1662923274421sasuke_8mx4.jpg" >
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="<?= DOMAIN_NAME;?>admin/Messages">New message from <strong><?= $info['name'];?></strong>.</a>
									<br /><small class="text-muted"><?= $info['time'];?></small></div>
								</div>
							</li>
		<?php } ?>					

							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="<?= DOMAIN_NAME;?>admin/Messages">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>