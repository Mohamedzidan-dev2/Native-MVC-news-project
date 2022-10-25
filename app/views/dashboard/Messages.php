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
    .myspan{
      color: red;
    }
</style>


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Messages</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Messages</h1>
			</div>
		</div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">

                <br>
                <br>
               <table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>Status</th>
                        <th>View</th>
                        <th>Controlls</th>

                    </tr>
                </thead>
                <tbody>
                <?php  $id=1;  foreach($data as $d){      ?>    
                    <tr>
                        <td><?=  $id++;?></td>
                        <td> <?=  $d['name'];?></td>
                        <td> <?=  $d['email'];?></td>
                        <td> <?=  $d['phone'];?></td>
                        <td> <?php  $num = $d['view'];
                      
                         if($num == 0){echo"<span class='myspan'><i class='fa fa-exclamation fa-2x' aria-hidden='true'></i> Unread";}else{echo "Read";}
                         
                         ?></td>

                      
                        <td>

<!-- Button trigger modal -->
<button type="button" data-id ="<?= $d['id'];?>" class="btn modalbtn" data-toggle="modal" data-target="#<?= $d['id'];?>">
<i class="fa fa-eye fa-2x" aria-hidden="true"></i>
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
Message : <span style="color: red;"><?= $d['message'];?></span>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<a href="" class="btn btn-primary">Save changes</a>
</div>
</div>
</div>
</div>
                        </td>
                        <td>
 <!-- Button trigger modal -->
<button type="button"  class="btn btn-danger " data-toggle="modal" data-target="#dd<?= $d['id'];?>" aria-labelledby="exampleModalLabel" aria-hidden="true">
<span style="color:black ;"><i class="fa fa-trash" aria-hidden="true"></i></span> Delete
</button>

<div class="modal fade " tabindex="-1" id="dd<?= $d['id'];?>" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <p style="color:black ;">Are You Sure To Delete Message : <span style="color: red;"> <?= $d['message']; ?></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?= DOMAIN_NAME;?>admin/DeleteMessage/<?= $d['id']; ?>" class="btn btn-primary">Save changes</a>
      </div>
    </div>
  </div>
</div>                      
                        </td>

                    </tr>
                <?php } ?>    
                </tbody>
               </table>
            </div>
        </div>
	</div>	<!--/.main-->
	
<?php require_once"includes/footer.php"; ?>