<?php 

// use MVC\core\Session;
// $data = Session::Get("user");
// foreach($data as $d){}

?>


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
<div class="profile-sidebar">
<div class="profile-userpic">
<?php 
foreach($userData as $userlogin){}


?>
<img src="<?=DOMAIN_NAME;?>images/<?= $userlogin['img'];?>" class="img-responsive" alt="">
</div>
<div class="profile-usertitle">
<div class="profile-usertitle-name"><?php
echo $userlogin['name'];
?> <span style="font-size: 13px;color:red;"> (<?= $userlogin['privliges'];?>)</span></div>
<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
</div>
<div class="clear"></div>
</div>
<div class="divider"></div>
<form role="search">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search">
</div>
</form>
<ul class="nav menu">
<li class="<?php if(isset($active) == "dashboard"){echo "active";} ?>"><a href="<?= DOMAIN_NAME;?>admin"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
<li class="<?php if(isset($active) == "news"){echo "active";} ?>"><a href="<?= DOMAIN_NAME;?>admin/news"><em class="fa fa-calendar">&nbsp;</em>News</a></li>
<li class="<?php if(isset($active) == "news"){echo "active";} ?>"><a href="<?= DOMAIN_NAME;?>admin/category"><i class="fa fa-bars" aria-hidden="true"></i> Category</a></li>
<li class="<?php if(isset($active) == "news"){echo "active";} ?>"><a href="<?= DOMAIN_NAME;?>admin/Admins"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Admins</a></li>
<li class="<?php if(isset($active) == "news"){echo "active";} ?>"><a href="<?= DOMAIN_NAME;?>admin/users"><i class="fa fa-users" aria-hidden="true"></i> Users</a></li>
<li class="<?php if(isset($active) == "news"){echo "active";} ?>"><a href="<?= DOMAIN_NAME;?>admin/Messages"><i class="fa fa-commenting" aria-hidden="true"></i> Messages</a></li>
<li><a href="<?= DOMAIN_NAME;?>admin/Logout"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>_
</ul>
</div><!--/.sidebar-->
		