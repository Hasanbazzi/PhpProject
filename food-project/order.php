<?php 

include('partials-front/menu.php');
?>
   
   <?php 
   if (isset($_GET['food_id'])){
	   
	   $food_id=$_GET['food_id'];
	   $sql = "SELECT * FROM tbl_food WHERE id=$food_id";
	   
	   $res= mysqli_query($conn,$sql);
$count = mysqli_num_rows($res);
if ($count==1){
	$row=mysqli_fetch_assoc($res);
		$title=$row['title'];
		$price=$row['price'];
		$image_name=$row['imagename'];
   
   
}else {
	header ('location:'.SITEURL);
}
   }
   else {
	   
	   header ('location:'.SITEURL);
   }
   ?>
  
    <section class="orderr">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="" method="POST" class="order">
                <fieldset>
                    <legend>Selected Food</legend>

                    <div class="food-menu-img">
					<?php 
					if ($image_name==""){
						echo "not available image";
					}
					else  {
						?>
						 <img src="<?php echo SITEURL;  ?>images/food/<?php echo $image_name;?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
						 <?php
					}
					?>
                       
                    </div>
    
                    <div class="food-menu-desc">
                        <h3><?php echo $title;?></h3>
						<input type="hidden" name="food" value ="<?php echo $title; ?>">
                        <p class="food-price"><?php echo "$".$price;?></p>
<input type="hidden" name="price" value ="<?php echo $price; ?>">
                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Vijay Thapa" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. hi@vijaythapa.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="but btnn btn-success btn-sm">
                </fieldset>

            </form>
 <?php
if (isset($_POST['submit'])){
$food = $_POST['food'];
$price=$_POST['price'];
$quantity=$_POST['qty'];
$total = $price * $quantity;
$order_date = date("Y-m-d H:i:s");
$status = "Ordered";
$customer_name =$_POST['full-name'];
$customer_phone =$_POST['contact'];
$customer_email =$_POST['email'];
$customer_address =$_POST['address'];


$sql2 = "INSERT INTO tbl_order SET
food='$food',
price=$price,
qty=$quantity,
total=$total,
order_date='$order_date',
status='$status',
customername='$customer_name',
customerphone='$customer_phone',
customeremail='$customer_email',
customeraddress='$customer_address'";

$res2= mysqli_query($conn,$sql2);

//echo $sql2;
}
?>
        </div>
    </section>
   
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>

  <?php 

include ('partials-front/footer.php');
?>