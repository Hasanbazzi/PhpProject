<?php
 include ('partials/menu.php');
 ?>


	
           <div class="main-content">
	<div class="wrapper">
		   <h1>Add category</h1>
		   </br></br>
		   
		   <form action="" method="POST" enctype="multipart/form-data">
	<table class="tbl-30">
	
<tr>
	<td>title:	</td>
	<td><input type="text" name="title" placeholder="category title"></td>
	</tr>
	<tr>
	<td>Select image:	</td>
	<td><input type="file" name="image"></td>
	</tr>
	
	<tr>
	<td>Featured:</td>
	<td><input type="radio" name="featured" value="Yes">Yes
	<input type="radio" name="featured" value="No" >No
	</td>
	</tr>
	
	<tr>
	<td>active:</td>
	<td><input type="radio" name="active" value="Yes">Yes
	<input type="radio" name="active" value="No">No
	</td>
	</tr>
	
	<tr>
	<td colspan ="2"><input type="submit" name="submit" value="Add Category" class="btn-secondary">
	</td>
	</tr>
	
	
	 </table>
	</form>
<?php 
	if(isset($_POST['submit'])){
		
		$title=$_POST['title'];
		if (isset($_POST['featured'])){
$featured=$_POST['featured'];
		}	
else {
	$featured="No";
}	
if (isset($_POST['active'])){
	$active=$_POST['active'];
	
}
else{
		$active="No";
}
	if (isset($_FILES['image']['name'])){
		$image_name =$_FILES['image']['name'];	
		$source_path =$_FILES['image']['tmp_name'];
		
		
		$destination_path="../images/category/".$image_name;
		$upload = move_uploaded_file($source_path,$destination_path);
		
		if ($upload==false){
			
			header('location:'.SITEURL.'admin/add-category.php');
			die();
		}
	}
	else{
		$image_name="";
	}
	$sql ="INSERT INTO tbl_category SET 
	title='$title',
	image_name='$image_name',
	featured='$featured',
	active='$active'";
	

$result = mysqli_query($conn,$sql);


	}
	?>
		   </div>
		    </div>
			
		   <?php
	include('partials/footer.php');		
	?>