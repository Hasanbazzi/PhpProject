 <?php
 include ('partials/menu.php');
 ?>

 <div class="main-content">
	<div class="wrapper">
	<h1>MANAGE Reservations</h1>
	
	<br/><br/>
	<table class="tbl-full">
	<tr>
		<th>id</th>
		<th>People</th>
		<th>FullName</th>
		<th>PhoneNumber</th>
		<th>Email</th>
		<th>Month</th>
		<th>day</th>
		<th>year</th>
		<th>hour</th>
		<th>minute</th>
		<th>AM/PM</th>
	</tr>
	<?php 
	$sql = "SELECT * FROM tbl_reservation";
	
	$res= mysqli_query($conn,$sql);
	$sn=1;
	$count= mysqli_num_rows($res);	
if ($count>0){
	while ($row=mysqli_fetch_assoc($res)){
	$people = $row['people'];
$FullName=$row['FullName'];
$PhoneNumber=$row['PhoneNumber'];
$email = $row['email'];
$Month = $row['Month'];
$day = $row['day'];
$year = $row['year'];
$hour =$row['hour'];
$minute =$row['minute'];
$AMPM =$row['AMPM'];	
	?>
		<tr>
		<td><?php echo $sn++; ?></td>
		<td><?php  echo $people; ?></td>
		<td><?php  echo $FullName; ?></td>
		<td><?php  echo $PhoneNumber; ?></td>
		<td><?php  echo $email; ?></td>
		<td><?php  echo $Month; ?></td>
		<td><?php  echo $day; ?></td>
		<td><?php  echo $year; ?></td>
		<td><?php  echo $hour; ?></td>
		<td><?php  echo $minute; ?></td>
		<td><?php  echo $AMPM; ?></td>		
	</tr>	
	<?php	
	}
}else {
	
	echo "reservation unavailable";
}
	?> 
     </table>   
	</div>
	</div>
	
	<?php
	include('partials/footer.php');		
	?>