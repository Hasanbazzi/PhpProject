 <?php
 include ('partials/menu.php');
 ?>
 
 <div class="main-content">
	<div class="wrapper">
	<h1>MANAGE Contacts</h1>
	
	<br/><br/>
	<table class="tbl-full">
	<tr>
		<th>id	</th>
		<th>fullname</th>
		<th>email</th>
		<th>suggestions</th>
		<th>experience</th>
		
	</tr>
	<?php 
	$sql = "SELECT * FROM tbl_contact";
	
	$res= mysqli_query($conn,$sql);
	$sn=1;
	$count= mysqli_num_rows($res);	
if ($count>0){
	while ($row=mysqli_fetch_assoc($res)){
$fullname = $row['fullname'];
$email=$row['email'];
$suggestions=$row['Suggestions'];
$experience = $row['experience'];
	?>
		<tr>
		<td><?php echo $sn++; ?></td>
		<td><?php  echo $fullname; ?></td>
		<td><?php  echo $email; ?></td>
		<td><?php  echo $suggestions; ?></td>
		<td><?php  echo $experience; ?></td>	
	</tr>
	<?php		
	}
}else {
	
	echo "contact unavailable";
}
	?>
	
	
	 
     </table>   
	</div>
	</div>
	
	<?php
	include('partials/footer.php');		
	?>