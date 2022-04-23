<?php 

include('partials-front/menu.php');
?>
       <?php
if (isset($_POST['submit'])){
$FullName=$_POST['full-name'];
$email =$_POST['email'];
$suggestion= $_POST['suggestion'];
$experiences= $_POST['experience'];


$sql = "INSERT INTO tbl_contact SET
fullname='$FullName',
email='$email',
Suggestions='$suggestion',
experience='$experiences'
";

$res= mysqli_query($conn,$sql);

}
?>

    <section class="New-Photo">
        <div class="container">
             <div class="content">
    <h2 class="text-center text-white">Reach  Out  To  Us</h2>
    <p class="t-body-1 t-body-1--white reservations__body ">Hope it has been a <em><b>smooth experience</b></em> for you with <em><b>us</b></em>. We would love to hear your feedback.</p>
   </div>
            <h2 class="text-center text-white">Give Your Valuable Feedback !</h2>

            <form action="" method="POST"  class="order">
               
                
                <fieldset>
                    <legend>Delivery Details</legend>
					<div class="food-menu-img ">
                        <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                    </div>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. hasan bazzi" class="input-responsive" required>
					
                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. hassanbazzi19@hotmail.com" class="input-responsive" required>

                    <div class="order-label">Any Suggestions ?</div>
                   <textarea name="suggestion" rows="10" placeholder="E.g. we would like u to add .." class="input-responsive" required></textarea>
  <select  name= "experience" class=" input-responsive" required>
          <option value="" disabled selected hidden >How was  your experience with us?</option>
          <option>Poor</option>
          <option>Bad</option>
          <option>Average</option>
          <option>Good</option>
          <option>Outstanding</option>
        </select>
                    <input type="submit" name="submit" value="Send" class="but btnn btn-success btn-sm">
					 <input class="but btnn btn-warning btn-sm " type="reset" value="Reset">
                </fieldset>
<?php 
if (isset($_POST['submit'])){
	
	echo "You have Successfully sent a contact !";
	
	
}
?>
            </form>

        </div>
    </section>
 	<section class="food-menu">
   <div class="container">
      <h2 class="text-center">Top Feedbacks</h2>
      <?php 
         $sql2 = "SELECT * FROM tbl_contact  WHERE experience='Outstanding' OR experience='Good'";
         
         $res2= mysqli_query($conn,$sql2);
         $count2 = mysqli_num_rows($res2);
         if ($count2>0){
         	while ($row=mysqli_fetch_assoc($res2)){
					$id=$row['id'];
         			$fullname=$row['fullname'];
         			$email=$row['email'];
         		    $suggestions=$row['Suggestions'];
         			$experience=$row['experience'];		
					
         			?>		
      <div class="food-menu-box f">
        <div class="food-menu-img">
            
            <img src="images/reviewicon.png "  width="100" >
         
         </div>
         <div class="food-menu-desc">
            <h4><?php echo $fullname;	?></h4>
            <p class="food-price"><?php echo $experience;	?></p>
            <p class="food-detail">
               <?php echo $suggestions;	?>
            </p>
            <br>
          
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