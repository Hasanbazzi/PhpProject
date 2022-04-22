 <?php
 include ('partials/menu.php');
 ?>
            
<div class="main-content">
	<div class="wrapper">
	<h1>MANAGE category</h1>
	    <br/><br/>
	<a href="add-category.php" class="btn-primary">Add category</a>
	<br/><br/>
	<table class="tbl-full">
	<tr>
	<th>id	</th>
	<th>Title</th>
		<th>image</th>
		<th>featured</th>
		<th>active</th>
		
	</tr>
	<?php 
	$sql = "SELECT * FROM tbl_category";
	$res = mysqli_query($conn,$sql);
	$sn=1;
	$count=mysqli_num_rows($res);
	if ($count>0){
		while($row=mysqli_fetch_assoc($res)){
			$id=$row['id'];
			$title=$row['title'];
			$image_name=$row['image_name'];
			$featured=$row['featured'];
			$active=$row['active'];
			?>
						<tr>
			<td><?php echo $sn++;?>	</td>
			<td><?php echo $title;	?></td>
			
				<td>
				<?php 
				if ($image_name!=""){
					?>
				
				<img src="<?php echo SITEURL;  ?>images/category/<?php echo $image_name;?>" width="100" >
				<?php
				}
				else {
					echo "image not added.";
				}
				
				
				?> 
				</td>
				
				<td><?php echo $featured;?></td>
				<td><?php echo $active;?></td>
				<!--td>
				<a href="" class="btn-secondary">Update category</a>
				<a href="" class="btn-danger">delete category</a>
				</td-->
			</tr>
			
			
			<?php
		}
	}
	else {
		?>
		
			<tr>
	<td colspan="6"><div class="error">No category Added</div>	</td>
	</tr>
		<?php
	}
	?>
	
	 
     </table>   
	</div>
	</div>
	
	<?php
	include('partials/footer.php');
	
	
	?>
	