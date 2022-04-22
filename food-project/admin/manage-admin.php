 <?php
 include ('partials/menu.php');
 ?>
            

            

    
    
	
	<div class="main-content">
	<div class="wrapper">
	<h1>MANAGE ADMIN</h1>
	
	<br/><br/>
	<a href="add-admin.php" class="btn-primary">Add Admin</a>
	<br/><br/>
	<table class="tbl-full">
	<tr>
	<th>id	</th>
	<th>full name	</th>
		<th>username</th>
	
	</tr>
	<?php
	
	$sql="SELECT * FROM tbl_admin";
	$res=mysqli_query($conn,$sql);
	if ($res==TRUE){
		$sn=1;
		$count= mysqli_num_rows($res);
		if ($count>0)
		{
			while($rows=mysqli_fetch_assoc($res)){
			$id=$rows['id'];
			$full_name=$rows['fullname'];
			$username=$rows['username'];
			?>	
			<tr>
	<td><?php echo $sn++; ?>	</td>
	<td><?php  echo $full_name; ?>	</td>
		<td><?php  echo $username; ?></td>
		
	</tr>		
			<?php
			}
		}
			else{
				
			}
	
			
		}
	?>
	 
     </table>   
	</div>
	</div>
	
	   
	
	
	<?php
	include('partials/footer.php');
	
	
	?>
	
