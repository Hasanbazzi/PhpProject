<?php 

include('partials-front/menu.php');
?>

    <?php
if (isset($_POST['submit'])){
$people = $_POST['people'];
$FullName=$_POST['full-name'];
$PhoneNumber=$_POST['contact'];
$email=$_POST['email'];
$Month = $_POST['month'];
$day =$_POST['day'];
$year = $_POST['year'];
$hour =$_POST['hour'];
$minute =$_POST['minute'];
$AMPM =$_POST['AMPM'];	

$sql = "INSERT INTO tbl_reservation SET
people=$people,
FullName='$FullName',
PhoneNumber='$PhoneNumber',
email='$email',
Month=$Month,
day=$day,
year=$year,
hour=$hour,
minute=$minute,
AMPM='$AMPM'";

$res= mysqli_query($conn,$sql);

}
?>

  
    <section class="reserved">
        <div class="container">
            
            <h2 class="text-center text-white">Resrevations</h2>
<p class="t-body-1 t-body-1--white reservations__body ">We can’t wait to host you. If you have any special requirements please feel free to call on the phone number below. We’ll be happy to accommodate you.</p>
            <form action="" method="POST"  class="order">
                <fieldset>
                    <legend>Number of Seats</legend>

                    <div class="food-menu-img">
                        <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                     
                        <div class="order-label">People</div>
                        <input type="number" name="people" class="input-responsive" placeholder="up to 6 people" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. hasanbazzi" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. hassanbazzi@hotmail.com" class="input-responsive" required>
		                                
                    
                </fieldset>
				<fieldset>
				<legend>Delivery Dates</legend>
					<p class="order-label"> pick a Date </p>              
                  <input  type="text" name="month" id="month" placeholder="Month" maxlength="2"  class="input-responsive"></br></br>                                              
                  <input type="text" name="day" id="day" placeholder="Day" maxlength="2"  class="input-responsive"></br></br>                           
                  <input  type="text" name="year" id="year" placeholder="2022" maxlength="4"  class="input-responsive"></br>
				<p class="order-label"> pick a Time </p>           				
                  <input  type="text" name="hour" id="hour" placeholder="hour" maxlength="2"  class="input-responsive">                                         
                  <input type="text" name="minute" id="minute" placeholder="minute" maxlength="2"  class="input-responsive">		
				  <input type="text" name="AMPM" placeholder="AM/PM" maxlength="2"  class="input-responsive">
				  <input type="submit" name="submit" value="Confirm Reservation" class="but btnn btn-success btn-sm">
				  </fieldset>
            </form>

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