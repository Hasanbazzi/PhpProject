	<?php
 include ('partials/menu.php');
 
 ?>
	<?php
	if (isset($_POST['submit'])){
		 $full_name=$_POST['full_name'];
		$username = $_POST['user_name'];
		$password=$_POST['pass_word'];
		
		$sql="INSERT INTO tbl_admin SET 
		fullname='$full_name',
		username='$username',
		password='$password'";
		
		$result =mysqli_query($conn,$sql);
		
	}
			
	
	
	?>




         
	<div class="main-content">
	<div class="wrapper">
	<h1> Add Admin</h1>
	</br></br>
	<form action="" method="POST">
	<table class="tbl-30">
<tr>
	
	<td>full name:	</td>
	<td><input type="text" name="full_name" placeholder="enter your name"></td>
	</tr>
	<tr>
	
	<td>user name:	</td>
	<td><input type="text" name="user_name" placeholder="enter your username"></td>
	</tr>
	<tr>
	
	<td>password</td>
	<td><input type="password" name="pass_word" placeholder="enter your password"></td>
	</tr>
	<tr>
	
	<td colspan="2"><input type="submit" name="submit" value ="add Admin" class="btn-secondary">	</td>
	<td></td>
	</tr>
	</table>
	</form>
	</div>
	</div>
	
	<?php
	include('partials/footer.php');		
	?>
