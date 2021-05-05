<?php

session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}
  ?>
 
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css"rel="stylesheet"href="css/bootstrap.css">
    <title>Document</title>
    <style>
    .navbar{

      display: inline-block;
     margin: 0px 25px;
     margin-top:10px;
     text-decoration: none;
     color: #565673;
     font-size: 12px;
     letter-spacing: 1.2px;

}
.socialLink{
  float:right;
     margin: 0px 25px;
     margin-top:10px;
     text-decoration: none;
     font-size: 12px;
     letter-spacing: 1.2px;
     border:none;


}
    
    </style>
</head>
<body style="background:url(images/kitchen.JPG)">
<div >
  <div class='spacebtwn'>
<nav class="navbar">
<a href="">Home</a>
&nbsp;
<a href="about.php">About Us</a>
&nbsp;
<a href="#">Team</a>
&nbsp;
<a href="contactUs.php">Contact Us</a>
</nav>

<div class="socialLink"><a href="">LinkedIn</a>&nbsp;<a href="">Facebook</a>&nbsp;<a href="">Twitter</a></div>
</div>
</div>
<hr>
<center><div class="container">
<div>
   <h2 style=""class="text-centre text-success">Welcome <strong><?php echo $_SESSION['username'];?></strong>!</h2>
  <card> <div style="font-size:15px;text-transform:capitalize;font-style:italic;color:green"><p>Thank you for joining these platform,you will be able to access a wide variety of jobseekers from various
    backgrounds to choose from,<br>I recommend that you <strong>authenticate</strong> jobseekers conduct by checking on their criminal records as <br>provided in the
     <a href="searchData.php">jobseekers list</a>. feel free to <a href="contactUs.php">contact us</a> for any help or queries on the same.<br>For international clients
      especially from the middle East,kindly contact us for Travel arrangements.<br><strong>Be sure to forward the details of your choosen candidate to our team for
       logistical edit.</strong><br>Once you make a token payment of ksh100 by clicking on the jobseekers image to access payment gateway,
     you will be able to access all<br> the contact details of the jobseekers.Be sure to take all necessary details before<br> logging out because once you log out 
     you wll require to pay another token to access the contact details again,<br>All the best in your search.</p>
   </div></card>
   
   <hr>
    
    <h2 style="font-weight:bold;font-style:italic;font-size:20px;text-transform:capitalize;color:green">Click The link Below to Access The list of Househelps!</h2><br>
    <div>
        <img style="border-radius:50%"src="images/apples.jpg"height="250px"width="300px"> 
    </div>

    <div>
    
        
        
        <!--h1 style="font-size:20px;font-style:italic;color:green;font-weight:bold"class="mySlides"id="slide"><i>
         Tech is transforming the World!</i></h1>
        <h1 style="font-size:20px;font-style:italic;color:green;font-weight:bold"class="mySlides"id="slide2">
        <i>With tailor made solutions...</i></h1-->
    


      </div>
<br>
      <a href="searchData.php">Access List Of HouseHelps/Jobseekers</a>
      <br>
   
    
   <hr>
   <card ><div style="font-size:17px;font-style:italic;color:green"><p>The one and only online Agency where you get quality<br> employees with character and indeed with a link to Their Criminal records,
   therefore no more worries on who is taking<br> care of your kids while you are away from home.</p></div></card>
   
   <a href="logout.php">Logout</a>
   </div></center>
<script>
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 2000); // Change image every 2 seconds
}



    </script>
    <br>
    <footer>
    <center><div style="background:white;margin:0 60px;border-radius:20px"<p style="">&copy; 2020. Powered by Outer-Space Tech</p></div> </center>
 </footer>
</body>
</html>