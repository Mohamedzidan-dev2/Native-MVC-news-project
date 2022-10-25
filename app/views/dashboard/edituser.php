<?php 
   require_once"includes/header.php";
   require_once"includes/sidebar.php";
   $active = "news";
?>

<style>
    .page-header{
        margin-left: 35%;
        background-color: darkgrey;
        width: 300px;
        padding-left: 50px;
        border-radius: 10px;
        margin-bottom: 21px;
        margin-top: 1px;
    }
</style>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit Users</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Users </h1>
                <a class="btn btn-primary" href="<?=DOMAIN_NAME;?>admin/users" style="margin-top: -70px;float: right;"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
			</div>
		</div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div id="result5" style="    width: 100%;
                                             height: 54px;
                                             margin-top: -14px;">     </div>
                  
            <form class="edituser" action="">

       <?php
           
foreach ($data as $user) {
    ?>
                <input type="hidden" name="id" value="<?= $user['id'];?>">
                <label for="">Name:</label>
                <input id ='name'type="text"  placeholder="User Name" class="form-control " value="<?= $user['name'];?>" name="name" >
                 <div class="errname" style="color: red;"></div><br>
   
                 <label for="">Email:</label>
                <input id ='email'type="email"  placeholder="User Email" class="form-control " value="<?= $user['email'];?>" name="email" >
                 <div class="erremail" style="color: red;"></div>

                <br>
                <label for="">Password:</label>
                <input id ='password'type="password"  placeholder="User Password" class="form-control " name="password" >
                 <div class="errpass" style="color: blue;">*password not required you do have one,Drop new one if you want*</div><br>
     <?php } ?>    
                <label for="">Gender:</label><span style="color: red;"> gender is : <?php  if($user['gender'] =="1"){echo"male";}else{echo"female";};?></span>

                <select name="gender" id="gender" class="form-control">
                    
                    <option id ="first_option" value="0" >Choose Your Gender</option>
 <?php foreach($data_g as $d){ ?> 
                        <option value="<?= $d["id"];?>" <?php if($user['gender'] == $d["id"]){echo "selected";}?> ><?= $d['name']; ?></option>
 <?php } ?>

                </select>

                <div class="errgender" style="color: red;"></div>  

                <br>
                <br>
                <!-- <div id="result5" class="form control"></div> -->
                <br>

                <input type="submit" value='Edit Users'  class="form-control btn btn-danger">
                   
            </form>
            
            <br><br><br><br> <br><br>

            </div>
        </div>
	</div>	<!--/.main-->
	
<?php require_once"includes/footer.php"; ?>