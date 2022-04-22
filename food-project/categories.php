<?php 

include('partials-front/menu.php');
?>
  
	
    <section class="categories food-menu" >
        <div class="container">	
            <h2 class="text-center">Explore All Foods</h2>

<?php 
$sql="SELECT *  FROM tbl_category WHERE active='Yes' ";
$res = mysqli_query($conn,$sql);
$count=mysqli_num_rows($res);
	if ($count>0){
		while($row=mysqli_fetch_assoc($res)){
			$id=$row['id'];
			$title=$row['title'];
			$image_name=$row['image_name'];
			?>
            <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id;?>">
            <div class="box-3 float-container">
			<?php
			if ($image_name==""){
				echo "image not available";
			}
			else {
				?>
			<img src="<?php echo SITEURL;  ?>images/category/<?php echo $image_name;?>" >
				<?php
			}
			?>
               

                <h3 class="float-text text-white"><?php echo $title; ?></h3>
            </div>
            </a>
<?php
		}
	}
	else {
		echo "categ not found";
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
