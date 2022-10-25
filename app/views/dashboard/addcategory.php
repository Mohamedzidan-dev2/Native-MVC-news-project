<?php 
   require_once"includes/header.php";
   require_once"includes/sidebar.php";
   $active = "news";
?>
<style>
    .page-header{
        margin-left: 35%;
        background-color: darkgrey;
        width: 367px;
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
				<li class="active">Add Category</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Category </h1>
                <a class="btn btn-primary" href="<?=DOMAIN_NAME;?>admin/category" style="margin-top: -70px;float: right;"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
			</div>
		</div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                

            <div id="result3" style="    width: 100%;
                                             height: 54px;
                                             margin-top: -14px;">     </div>


            <form class="addcategory" action="">
                <label for="">name:</label>
                <input id ='name'type="text"  placeholder="Category Name" class="form-control " name="name" >
                 <div class="errname" style="color: red;"></div>

                <br>
                <label for="">icon:</label>
                <input id="img" type="file" name='img' class="form-control">
                <div class="errimg" style="color: red;"></div>

                <br>
                <div id="result3" class="form control"></div>
                <br>

                <input type="submit" value='add category'  class="form-control btn btn-danger">
            </form>

            </div>
        </div>
	</div>	<!--/.main-->
	
<?php require_once"includes/footer.php"; ?>