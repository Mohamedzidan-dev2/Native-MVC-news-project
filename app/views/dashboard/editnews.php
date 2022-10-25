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
				<li class="active">Edit News</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit News </h1>
                <a class="btn btn-primary btnHome" href="<?=DOMAIN_NAME;?>admin/news" style="margin-top: -70px;float: right;"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
			</div>
		</div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                

            <div id="result6" style="    width: 100%;
                                             height: 54px;
                                             margin-top: -14px;">     </div>

            <form class="editnews" action="">
                <?php foreach($data as $d){ ?>
                    <input type="hidden" name='id' value="<?= $d['id'];?>">
                <label for="">news:</label>
                <textarea id="err" value="<?= $d['news']; ?>" placeholder="inter news" class="form-control err" name="news" id="" cols="30" rows="10"><?= $d['news'];?></textarea>
                 <div class="errmessage" style="color: red;"></div>

                <br>
                <label for="">Img:</label>
                <img style="width:100px;height:70px;"  src="<?= DOMAIN_NAME; ?>images/<?= $d['img']; ?>" alt="">
                <input id="errimg" type="file" name='img' placeholder="inter news" class="form-control">
                <div class="errimg" style="color: red;"></div>

                <br>
                <div id="result" class="form control"></div>
                <br>

                <input type="submit" value='Edit News'  class="form-control btn btn-danger">
                <?php } ?>
            </form>

                            

            </div>
        </div>
	</div>	<!--/.main-->
	
<?php require_once"includes/footer.php"; ?>