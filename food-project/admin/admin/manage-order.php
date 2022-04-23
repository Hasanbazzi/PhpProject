 <?php
 include ('partials/menu.php');
 ?>
            
<div class="main-content">
	<div class="wrapper">
	<h1>MANAGE order</h1>
	
	<br/><br/>
	<table class="tbl-full">
	<tr>
		<th>id	</th>
		<th>Food</th>
		<th>price</th>
		<th>quantity</th>
		<th>Total</th>
		<th>Order Date</th>
		<th>Status</th>
		<th>customer Name</th>
		<th>phone Number</th>
		<th>Email</th>
		<th>Address	</th>
	</tr>
	<?php 
	$sql = "SELECT * FROM tbl_order";
	
	$res= mysqli_query($conn,$sql);
	$sn=1;
	$count= mysqli_num_rows($res);	
if ($count>0){
	while ($row=mysqli_fetch_assoc($res)){
	$food = $row['food'];
$price=$row['price'];
$quantity=$row['qty'];
$total = $row['total'];
$order_date = $row['order_date'];
$status = $row['status'];
$customer_name =$row['customername'];
$customer_phone =$row['customerphone'];
$customer_email =$row['customeremail'];
$customer_address =$row['customeraddress'];
	
	?>
		<tr>
		<td><?php echo $sn++; ?></td>
		<td><?php  echo $food; ?></td>
		<td><?php  echo $price; ?></td>
		<td><?php  echo $quantity; ?></td>
		<td><?php  echo $total; ?></td>
		<td><?php  echo $order_date; ?></td>
		<td><?php  echo $status; ?></td>
		<td><?php  echo $customer_name; ?></td>
		<td><?php  echo $customer_phone; ?></td>
		<td><?php  echo $customer_email; ?></td>
		<td><?php  $customer_address; ?></td>
		
	</tr>
	
	<?php
	
	
	}
}else {
	
	echo "order unavailable";
}
	?>
	
	
	 
     </table>   
	</div>
	</div>
	
	<?php
	include('partials/footer.php');		
	?>