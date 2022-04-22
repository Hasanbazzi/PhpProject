<?php 

include('partials-front/menu.php');
?>
 
    <section class="food-search text-center">
        <div class="container">
            <?php 
			
			$search=$_POST['search'];

			
			?>
            <h2>Foods on Your Search <a href="#" class="text-white"><?php echo $search;?></a></h2>

        </div>
    </section>
    



    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>
<?php 

	
	$sql = "SELECT * FROM tbl_food WHERE title LIKE '%$search%' OR description LIKE '%$search%'";


	$res= mysqli_query($conn,$sql);
	$count = mysqli_num_rows($res);
	if ($count>0){
		while ($row=mysqli_fetch_assoc($res)){
	$id=$row['id'];
			$title=$row['title'];
			$price=$row['price'];
	$description=$row['description'];
	$image_name=$row['imagename'];
	?>

	<div class="food-menu-box">
					<div class="food-menu-img">
					<?php
					if ($image_name!=""){
					?>
				
				<img src="<?php echo SITEURL;  ?>images/food/<?php echo $image_name;?>" width="100" >
				<?php
				}
				else {
					echo "image not available.";
				}
					?>
					</div> 	

					<div class="food-menu-desc">
						<h4><?php echo $title;	?></h4>
						<p class="food-price"><?php echo "$".$price;	?></p>
						<p class="food-detail">
							<?php echo $description;?>
						</p>
						<br>

						<a href="order.php" class="btn btn-primary">Order Now</a>
					</div>
				 </div>
	
				<?php
	}
}
else {
echo "food not found";	
}

?>
            <div class="clearfix"></div>        
      
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