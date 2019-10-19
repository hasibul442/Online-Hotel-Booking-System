<?php
include('db.php');
?>
<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home page</title>
        <link type="text/css" rel="stylesheet" href="tourist_coach_rent.css">
    </head>
    
    <body>
        <div class="logo">
            <ul class="login">
                    <li><a href="reg.php">Sign Up</a></li>
                    <li><a href="#">Log in</a></li>
                </ul>  
            <div class="logo1">Online Hotel Booking In Bnagladesh</div>    
        </div>
        <div class="menu">
                <ul>
                    <li><a href="Home%20Page.html">HOME</a></li>
                    <li><a href="About.html">ABOUT</a></li>
                    <li><a href="#">HOTEL</a></li>
                    <li><a href="#">HOT DEALS</a></li>
                    <li><a href="tourist_coach_rent.html">TOURIST COACH RENT</a></li>
                    <li><a href="#">SUPPORT CENTER</a></li>
                    <li><a href="contact.html">CONTACT US</a></li>
                </ul>
            </div>
        <h1 class="tcr">Tourist Coach Rent:</h1>
        <table class="table1">
            <tr>
                <td class="tablerow1">
                    <p>Tourist Bus or Toyota coaster Or Nissan Civilian car     Rental service :<br><br>
                        Tourist coach Or Bus Full AC with 22 adult +6 Folding Seat= 28 seater rent/ hire in Bangladesh.<br><br>We do make sure the private Car, Microbus, A/C Tourist Coach and Bus rent for entire Bangladesh. You can hire this luxurious tourist coach service for Dhaka City, Gazipur picnic spot, Cox’s Bazar, Shylhet, Bandarban, Rangamati, khulna, Rajshahi, Barisal,Chittagong, Patengan.</p><br>
                    <div id="contain">
                        <ul><h3>Tourist Coaster Or Tourist Bus Rental Or Nissan Civilian Fee:</h3><br>
                            <li>Tourist Bus Or Toyota coaster Or Nissan Civilian Full Ac 22 +6 Folding = 28 Seater Total Fare BDT 14000/day in Dhaka City. Maximum 8 hours Duty without Fuel charge. Extra per Hours will cost BDT 300.</li><br><br>
                            <li>Tourist Bus Or Toyota coaster Or Nissan Civilian Full Ac 22 +6 Folding = 28 Seater Total Fare BDT 18000/day  in Bangladesh. Maximum 8 hours Duty without Fuel charge. Extra Per Hours will cost BDT 400 .Others Road expense (Like Tools, ferry fare) bear by customer.</li><br><br>
                            <li>Volvo Tourist Bus Full Ac 45 seats Total Fare BDT 40000/day  in Dhaka City. Maximum 8 hours Duty without Fuel charge. Extra Per Hours will cost BDT 800.</li><br><br>
                            <li>China Tourist Bus Full Ac 40 seats Total Fare BDT 25000/day in Dhaka City. Maximum 8 hours Duty without Fuel charge. Extra per Hours will cost BDT 500.</li><br><br>
                            <li>China Tourist Bus Full Ac 30 seats Total Fare 23000 BDT in Dhaka City Per Days Maximum 8 hours Duty without Fuel. Extra per Hours 400 BDT.</li><br><br>
                            <li>Hyundai H1 Full Ac 7 seats Total Fare 12000 BDT in Dhaka City Per Days Maximum 8 hours Duty without Fuel. Extra per Hours 500 BDT.
                            </li>
                        </ul>
                    </div>
                
                </td>
                <td class="tablerow2">
                    <h4>Reserve Now !</h4><br><br>
                    <p>Phone: +88019000000<br>Mobile: +88019992999<br>Email: xxxxxx.xx@gmail.com</p><br><br><br>
                    
                    <h2>Get In Touch</h2><br><br>
                    <form>
                        Your Name:<br>
                        <input type="text" name="name" id="name"><br>
                        Your Email:<br>
                        <input type="email" name="email" id="email"><br><br>
                        Phone:<br>
                        <input type="tel" name="phone" id="phone"><br><br>
                        Your Message:<br>
                        <textarea name="message" cols="40" rows="10" id="message"></textarea><br>
                        <input type="submit" name = "sub" value="Send">
                        
                        
                    </form>
                    
                </td>
            </tr>
            
        </table>
        
        <?php
				if(isset($_POST['sub']))
				{
					$name =$_POST['name'];
					$phone = $_POST['phone'];
					$email = $_POST['email'];
                    $message= $_POST['message'];
					$sql = "INSERT INTO `touch`(`fullname`, `phoneno`, `email`,`message`,`cdate`) VALUES ('$name','$phone','$email','$message',now())" ;
					
					
					if(mysqli_query($con,$sql))
					echo"OK";
					
				}
				?>
        <footer>
            <table class="footer1">
                <tr>
                    <td id="one">
                        <p>OnlinehotelBooking.com is Bangladesh’s No.1 hotel booking website, allowing you to get the best prices for more than 225,000 hotels around the world.</p>
                    </td>
                    <td id="two">
                        <ul>
                            <li><a href="About.html">Hotel In Dhaka</a></li>
                            <li><a href="#">Hotel In Sylet</a></li>
                            <li><a href="#">Hotel In Chittagong</a></li>
                            <li><a href="#">Hotel In Cox's Bazar</a></li>
                            <li><a href="#">Hotel In St. Martin's island</a></li>
                            <li><a href="#">Hotel In Kuakata</a></li>
                            
                        </ul>
                    </td>
                    <td id="three">
                        <ul>
                    <li><a href="About.html">ABOUT Us</a></li>
                    <li><a href="tourist_coach_rent.html">TOURIST COACH RENT</a></li>
                    <li><a href="#">SUPPORT CENTER</a></li>
                    <li><a href="contact.html">CONTACT US</a></li>
                </ul>
                    </td>
                    <td id="four">
                        <h2>Have any Question??</h2>
                        <h3>+8801770489990, +8801950513295</h3>
                        <h3>Onlinehotelbooking.bd.com@gmail.com</h3>
                        <p>24/7 Dedicated Customer Support</p>
                    </td>
                
                </tr>
            </table>
            <div class="copyright">Copyright © 2018 Daffodil International University. All Rights Reserved</div>
        </footer>
    </body>

</html>