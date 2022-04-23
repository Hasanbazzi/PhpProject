<?php 

include('partials-front/menu.php');
?>
   
  
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
	
 <section class="food-menu">
   <div class="container">
      <h2 class="text-center">Food-Menu</h2>
      <?php 
         $sql2 = "SELECT * FROM tbl_food WHERE featured ='No' AND active ='YES'";
         
         $res= mysqli_query($conn,$sql2);
         $count2 = mysqli_num_rows($res);
         if ($count2>0){
         	while ($row=mysqli_fetch_assoc($res)){
         		$id=$row['id'];
         			$title=$row['title'];
         			$description=$row['description'];
         		    $price=$row['price'];
         			$image_name=$row['imagename'];
         			
         			?>		
      <div class="food-menu-box f">
         <div class="food-menu-img">
            <?php 
               if ($image_name!=""){
               	?>
            <img src="<?php echo SITEURL;  ?>images/food/<?php echo $image_name;?> "width="100" >
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
               <?php echo $description;	?>
            </p>
            <br>
            <a href="<?php echo SITEURL;?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
         </div>
      </div>
      <?php
         }
         	
         }
         
         else {
         	echo "food not available";
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