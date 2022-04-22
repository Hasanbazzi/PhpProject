 <?php
 include ('partials/menu.php');
 ?>
            

    
    
	
	<div class="main-content">
	<div class="wrapper">
	<h1>DASHBOARD</h1>
	<div class="col-4 text-center">
	<?php 
	$sql = "SELECT * FROM tbl_category ";
	$res=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($res);

	?>	
	<h1><?php echo $count;?></h1>
	</br>
	menu
	</div>	
	
	<div class="col-4 text-center">
		<?php 
	$sql1 = "SELECT * FROM tbl_food ";
	$res1=mysqli_query($conn,$sql1);
	$count1=mysqli_num_rows($res1);

	?>	
	<h1><?php echo $count1;?></h1>
	</br>
	foods
	</div>
	
	<div class="col-4 text-center">
		<?php 
	$sql2 = "SELECT * FROM tbl_order ";
	$res2=mysqli_query($conn,$sql2);
	$count2=mysqli_num_rows($res2);
	?>	
	<h1><?php echo $count2;?></h1>
	</br>
	 orders
	</div>
	
	<div class="col-4 text-center">
		<?php 
	$sql3 = "SELECT * FROM tbl_contact ";
	$res3=mysqli_query($conn,$sql3);
	$count3=mysqli_num_rows($res3);
	?>	
	<h1><?php echo $count3;?></h1>
	</br>
	contacts	
	</div>
	
	<div class="col-4 text-center">
		<?php 
	$sql4 = "SELECT * FROM tbl_reservation ";
	$res4=mysqli_query($conn,$sql4);
	$count4=mysqli_num_rows($res4);

	?>	
	<h1><?php echo $count4;?></h1>
	</br>
	reservations
	</div>
		   <div class="clearfix"></div>
        
	</div>
	</div>
	
	   
	<?php
	include('partials/footer.php');
	
	
	?>
	
	