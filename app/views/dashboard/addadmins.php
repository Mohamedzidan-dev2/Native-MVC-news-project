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
        padding-left: 26px;
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
				<li class="active">Add Admins</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add  Admins </h1>
                <a class="btn btn-primary" href="<?=DOMAIN_NAME;?>admin/Admins" style="margin-top: -70px;float: right;"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
			</div>
		</div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                

            <div id="addAdmin_result" style="    width: 100%;
                                             height: 54px;
                                             margin-top: -14px;">     </div>


            <form class="addadmins">
                <label for="">Name:</label>
                <input id ='name'type="text"  placeholder=" Name..." class="form-control " name="name" >
                 <div class="errname" style="color: red;"></div>
               
                 <label for="">Password:</label>
                <input id ='password'type="password"  placeholder=" password..." class="form-control " name="password" >
                 <div class="errpass22" style="color: red;"></div>
             
                 <label for="">Email:</label>
                <input id ='email'type="email"  placeholder=" Email..." class="form-control " name="email" >
                 <div class="erremail" style="color: red;"></div>

                <br>
                <label for="">Image:</label>
                <input id="img" type="file" name='img' class="form-control">
                <div class="errimg" style="color: red;"></div>
                <br>

                <label for="">Privliges:</label>

                <select name="priv_number" id="priv_number" class="form-control" >
                    <option  id='first_option2'  value="0">Choose privliges</option>


                 <option value="300"> Owner</option>
                 <option value="200"> Admin</option>
                 <option value="100"> superviser</option>


                </select>
                <div class="errpriv" style="color: red;"></div>
                <br><br>

                <br>
                <!-- <div id="result3" class="form control"></div> -->
                <br>

                <input type="submit" value='Add New Admin'  class="form-control btn btn-danger">
            </form>
            <br><br><br><br><br><br>

            </div>
        </div>
	</div>	<!--/.main-->
	
<?php require_once"includes/footer.php"; ?>