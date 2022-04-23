 <?php
 include ('partials/menu.php');
 ?>
<div class="main-content">
	<div class="wrapper">
	<h1>MANAGE food</h1>
	    <br/><br/>
		          <?php 
if (isset($_SESSION['add'])){

echo $_SESSION['add'];
unset( $_SESSION['add']);

}
	?>
	<a href="add-food.php" class="btn-primary">Add food</a>
	<br/><br/>
	
	<table class="tbl-full">
	<tr>
	
			<th>id	</th>
			<th>title</th>
			<th>description</th>
			<th>price</th>
			<th>imageName</th>
			<th>Featured</th>
			<th>Active</th>	
	</tr>
	
	<?php 
	$sql = "SELECT * FROM tbl_food";
	$res = mysqli_query($conn,$sql);
	$sn=1;
	$count=mysqli_num_rows($res);
	if ($count>0){
		while($row=mysqli_fetch_assoc($res)){
			$id=$row['id'];
			$title=$row['title'];
			$description=$row['description'];
		    $price=$row['price'];
			$image_name=$row['imagename'];
			$featured=$row['featured'];
			$active=$row['active'];
		
			?>
		<tr>
	<td><?php echo $sn++;	?>	</td>
	<td><?php echo $title;	?>	</td>
		<td><?php echo $description;	?></td>
		<td><?php echo $price."$";?></td>
		<td>
		<?php 
				if ($image_name!=""){
					?>
				
				<img src="<?php echo SITEURL;  ?>images/food/<?php echo $image_name;?>" width="100" >
				<?php
				}
				else {
					echo "image not added.";
				}
				
				
				?> </td>
		
				<td><?php echo $featured;?></td>
				<td><?php echo $active;?></td>
		</tr>

	<?php
		}
	
	}	else {
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