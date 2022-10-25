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
        padding-left: 27px;
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
				<li class="active">Edit Admins</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Admins </h1>
                <a class="btn btn-primary btnHome" href="<?=DOMAIN_NAME;?>admin/Admins" style="margin-top: -70px;float: right;"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
			</div>
		</div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                



            <div id="editAdmins_result" style="    width: 100%;
                                             height: 54px;
                                             margin-top: -14px;">     </div>

<?php foreach($data as $d){} 

?>

<form class="editadmins">
    <input type="hidden" value="<?= $d['id'];?>" name="id">
                <label for="">Name:</label>
                <input id ='name'type="text"  placeholder=" Name..." class="form-control " name="name" value="<?= $d['name'];?>">
                 <div class="errname" style="color: red;"></div>
                  <br>
                 <label for="">Password:</label>
                <input id ='password'type="password"  placeholder=" password..." class="form-control " name="password" >
                 <div class="errpass" style="color: blue;">*This Field Not Required,You Do Have Old Password ,Drop New One If You Want*</div>
                 <br>
                 <label for="">Email:</label>
                <input id ='email'type="email"  placeholder=" Email..." class="form-control " name="email"  value="<?= $d['email'];?>">
                 <div class="erremail" style="color: red;"></div>

                <br>
                <label for="">Image:</label>
                <img style="width:100px;height:70px;"  src="<?= DOMAIN_NAME; ?>images/<?= $d['img']; ?>" alt="">
                <input id="img" type="file" name='img' class="form-control">
                <div class="errimg" style="color: red;"></div>
                <br>

                <label for="">Privliges:</label>

                <select name="priv_number" id="priv_number" class="form-control" >
                    <option class='first_option_AddAdmins'  value="0">Choose privliges</option>


                 <option value="300"  <?php if($d['priv_number'] == 300){echo "selected";};?>  > Owner</option>
                 <option value="200"  <?php if($d['priv_number'] == 200){echo "selected";};?> > Admin</option>
                 <option value="100"  <?php if($d['priv_number'] == 100){echo "selected";};?> > superviser</option>


                </select>
                <div class="errpriv" style="color: red;"></div>
                <br><br>

                <br>
                <!-- <div id="result3" class="form control"></div> -->
                <br>

                <input type="submit" value='Edit  Admin'  class="form-control btn btn-danger">
            </form>

                 <br><br><br><br><br><br>                   

            </div>
        </div>
	</div>	<!--/.main-->
	
<?php require_once"includes/footer.php"; ?>