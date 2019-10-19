<?php
include('db.php');
?>
<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home page</title>
        <link type="text/css" rel="stylesheet" href="contact.css">
    </head>
    
    <body>
        <div class="logo">
            <ul class="login">
                    <li><a href="#">Log in</a></li>
                </ul>  
            <div class="logo1">Online Hotel Booking In Bnagladesh</div>    
        </div>
         <div class="menu">
                <ul>
                    <li><a href="Home%20Page.html">HOME</a></li>
                    <li><a href="About.html">ABOUT</a></li>
                    <li><a href="#">HOTEL</a></li>
                    <li><a href="hotdeal.html">HOT DEALS</a></li>
                    <li><a href="tourist_coach_rent.html">TOURIST COACH RENT</a></li>
                    <li><a href="#">SUPPORT CENTER</a></li>
                    <li><a href="contact.html">CONTACT US</a></li>
                </ul>
            </div>
        <div id="map" style="width:100%;height:400px;background:yellow"></div>
       <script>
           function myMap() {
               var mapOptions = {
                   center: new google.maps.LatLng(23.7545654,90.3066789),
                    zoom: 10,
                mapTypeId: google.maps.MapTypeId.HYBRID
                }
               var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>
        <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
        
        <div>
            <table>
                <tr>
                    <td id="t1">
                <img src="Photo/phone-call.png">
                <h1>Call us anytime</h1>
                <p>Open from 9.00AM
                    to 6.30PM</p></td>
          <td id="t2">
                <img src="Photo/envelope.png">
                <h1>We are always with you</h1>
                <p>We answer quickly</p>
                </td>
                    <td id="t3">
                <img src="Photo/insurance-agent.png">
                <h1>The Bangladeshi <br>travel expert</h1>
                <p>We are your best travel agent</p>
                        </td>
            </tr>
            
        </table>
        </div>
        
        <div class="contruct">
            <table>
                <tr>
            <td>
                <form class="suggetion" method="post" action="contact.php">
                Your Name:<br><input type="text" name="name" id="name" required>
                <br>
                Your Email:<br><input type="email" name="email" id="email" required>
                <br>
                Phone:<br><input type="number" name="phone" id="phone" required>
                <br>
                Your Message:<br><input type="text"  name="message" id="message" required>
                <br>
                    <br>
                <input type="submit" name="sub" value="Send" >
                    </form>
                
                
            </td>
            
            <td class="hotline">
                <h2>Email:</h2>
                <p>Onlinehotelbooking.bd.com@gmail.com</p>
                <br>
                <p>Phone Number:<br>+8801770489990, +8801950513295<br>Email:<br>Onlinehotelbooking.bd.com@gmail.com<br>Address:<br>Onlinehotelbooking.COM.BD<br>4/2, Sobhanbag, Mirpur Road, Dhanmondi, Dhaka 1207,Bangladesh</p>
                
            </td>
                </tr>
                </table>
            <?php
				if(isset($_POST['sub']))
				{
					$name =$_POST['name'];
					$phone = $_POST['phone'];
					$email = $_POST['email'];
                    $message = $_POST['message'];
					$approval = "Not Allowed";
					$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`message`,`cdate`,`approval`) VALUES ('$name','$phone','$email','$message',now(),'$approval')" ;
					
					
					if(mysqli_query($con,$sql))
					echo"OK";
					
				}
				?>
           
            
        </div>
        
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
                    <li><a href="#">TOURIST COACH RENT</a></li>
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