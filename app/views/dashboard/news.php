<?php 
   require_once"includes/header.php";
   require_once"includes/sidebar.php";
   $active = "news";
?>
<style>
    img{
        width:90px ;
        height: 80px;
        border-radius: 10px;
    }   
    table{
        text-align: center;
        align-items: center;
        justify-content: center;
    }
    table thead tr th{
        text-align: center;
    }

    table thead tr{
        background: #656565;
        color: white;
    }
    
</style>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">News</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">News</h1>
			</div>
		</div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <a href="<?=DOMAIN_NAME;?>admin/addnews" class="btn btn-primary"> <span style="color: black;"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></span> <span style="color:white ;"> Add  News </span></a>
                <br>
                <br>
               <table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>news</th>
                        <th>img</th>
                        <th>date</th>
                        <th>user</th>
                        <th>controlls</th>
                    </tr>
                </thead>
                <tbody>
                <?php  $id=1;  foreach($data as $d){      ?>    
                    <tr>
                        <td><?=  $id++;?></td>
                        <td width='50%';> <?=  $d['news'];?></td>

                        <td>  
                            <!-- image -->
                            <?php  $img = $d['img']; ?>  
                            <img src="<?= DOMAIN_NAME;?>images/<?= $img;?>"style="width:100px; height:70px;" alt="">
                       </td>
                       
                        <td><?=  $d['date'];?></td>
                        <td><?=  $d['user_name'];?> </td> 

  
                        <td>
                        <?php
if ($userlogin['priv_number'] >= 100 && $userlogin['priv_number'] < 200) {
    echo "<span style='color:red;'> <i class='fa fa-exclamation-circle fa-lg' aria-hidden='true'></i> you cant acess here!!</span>";
}elseif($userlogin['priv_number'] >= 200 && $userlogin['priv_number'] < 300){

    
    ?>                            
                            <a class="btn btn-primary" href="<?=DOMAIN_NAME;?>admin/editnews/<?= $d['id'];?>"><span style="color:black ;"><i class="fa fa-pencil" aria-hidden="true"></i></span> Edit</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $d['id'];?>">
                            Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="<?= $d['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are You Sure To Delete this News : <span style="color: red;"><?= $d['news'];?></span>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="<?= DOMAIN_NAME;?>admin/deletenews/<?= $d['id']; ?>" class="btn btn-primary">Save changes</a>
                                </div>
                                </div>
                            </div>
                            </div>
                   <?php
}elseif($userlogin['priv_number'] == 300){
                   ?>         
                                               <a class="btn btn-primary" href="<?=DOMAIN_NAME;?>admin/editnews/<?= $d['id'];?>">  <span style="color:black ;"><i class="fa fa-pencil" aria-hidden="true"></i></span> Edit</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $d['id'];?>">
                            <span style="color:black ;"><i class="fa fa-trash" aria-hidden="true"></i></span> Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="<?= $d['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are You Sure To Delete this News : <span style="color: red;"><?= $d['news'];?></span>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="<?= DOMAIN_NAME;?>admin/deletenews/<?= $d['id']; ?>" class="btn btn-primary">Save changes</a>
                                </div>
                                </div>
                            </div>
                            </div>
                       <?php } ?>     
                        </td>
                    </tr>
                <?php } ?>    
                </tbody>
               </table>
            </div>
        </div>
	</div>	<!--/.main-->
	
<?php require_once"includes/footer.php"; ?>