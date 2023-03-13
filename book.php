<?php

if (isset($_POST['DepartureDate'])) {
    ?>
                <div id="respp" style="display:none" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>

    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $Nationality = $_POST['Nationality'];
    $NumberOfChild = $_POST['NumberOfChild'];
    $ArivalDate = $_POST['ArivalDate'];
    $DepartureDate = $_POST['DepartureDate'];
    $Message = $_POST['Message'];
    $BookCategory = $_POST['BookCategory'];

    // echo "<h1>HHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH</h1>";

$to = 'info@hospitalitylovers.com'; 
$from = 'firstclasstours@mwewe.afriregister.com'; 
$fromName = 'SenderName'; 
 
$subject = "New Booking Request"; 
 
$htmlContent = ' 
    <html> 
    <head> 
        <title>New From $name</title> 
    </head> 
    <body> 
        <h1>New Booking from '.$name.'</h1> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th><h3>Booking Category:</h3></th><td><b><u><h3>'.$BookCategory.'</h3></u></b></td> 
            </tr> 
            <tr> 
                <th>Name:</th><td>'.$name.'</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Email:</th><td>'.$email.'</td> 
            </tr> 
            <tr> 
                <th>Phone:</th>
                <td>'.$phone.'</td> 
            </tr> 
            <tr> 
                <th>Nationality:</th><td>'.$Nationality.'</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>NumberOfChild:</th><td>'.$NumberOfChild.'</td> 
            </tr> 
            <tr> 
                <th>ArivalDate:</th>
                <td>'.$ArivalDate.'</td> 
            </tr> 
            <tr> 
                <th>DepartureDate:</th>
                <td>'.$DepartureDate.'</td> 
            </tr> 
            <tr> 
                <th>Message:</th>
                <td>'.$Message.'</td> 
            </tr> 
        </table> 
    </body> 
    </html>'; 
 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
 
// Send email 
if(mail($to, $subject, $htmlContent, $headers)){ 
    echo 'Email has sent successfully.'; 
    ?>
    <script>alert('Message sent Successfully !')</script>
    <?php
}else{ 
   echo 'Email sending failed.'; 
}
    

}

?>

<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.7.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.7.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/final-logo-removebg-preview-124x95.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>BOOK NOW</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Lexend:100,200,300,400,500,600,700,800,900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend:100,200,300,400,500,600,700,800,900&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu2 cid-txUWSpwPkq" once="menu" id="menu2-2k">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="#">
                        <img src="assets/images/final-logo-removebg-preview-124x95.png" alt="Mobirise Website Builder" style="height: 3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-primary display-7" href="#">Hospitality &amp;&nbsp;<br>Tourism Lovers</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="ABOUT US.html" target="_blank">About us</a></li><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="page7.html" aria-expanded="false" target="_blank">Hospitality</a></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="Tourism.html" aria-expanded="false" target="_blank">Tourism</a>
                    </li></ul>
                
                    <div class="navbar-buttons mbr-section-btn"><a class="btn btn-danger display-4" href="book.php">Book Now</a></div>
            </div>
        </div>
    </nav>
</section>

<section data-bs-version="5.1" class="header3 cid-tygT3bk53C mbr-fullscreen" id="header3-2q">

    

    
    <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(0, 0, 0);"></div>

    <div class="align-center container-fluid">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-10">
                
                <center>
                <form action="" method="POST" >
                    <div class="dragArea row">
                        <div class="col-6 form-group mb-3" data-for="name">
                            <input type="text" name="name" placeholder="Name" data-form-field="name" required class="form-control" value="" id="name-form5-8o">
                        </div>
                       
                        <div class="col-6 form-group mb-3" data-for="email">
                            <input type="email" name="email" required placeholder="E-mail" data-form-field="email" class="form-control" value="" id="email-form5-8o">
                        </div>
                        
                        <div class="col-6 form-group mb-3" data-for="Phone">
                            <input type="text" name="phone" placeholder="Phone" required data-form-field="text" class="form-control" value="" id="url-form5-8o">
                        </div>
                        <div class="col-6 form-group mb-3" data-for="Nationality">
                            <input type="text" name="Nationality" placeholder="Nationality" required data-form-field="text" class="form-control" value="" id="url-form5-8o">
                        </div>
                        <div class="col-6 form-group mb-3" data-for="NumberOfChild">
                            <input type="number" min="1" name="NumberOfChild" placeholder="Number of Child" required data-form-field="text" class="form-control" value="" id="url-form5-8o">
                        </div>
                        <div class="col-6 form-group mb-3" data-for="BookCategory">
                            <select class="form-control" name="BookCategory">
                                <option value="" selected>Select Booking Category</option>
                                <option>Hotel</option>
                                <option>Apartment</option>
                                <option>Air BnB</option>
                                <option>Guest House</option>
                            </select>
                        </div>
                        <div class="col-md col-sm-12 form-group mb-3" data-for="ArivalDate">
                            <input type="date" name="ArivalDate" placeholder="Arival Date" data-form-field="name" required class="form-control" value="" id="name-form5-8o">
                        </div>

                        <div class="col-md col-sm-12 form-group mb-3" data-for="DepartureDate">
                            <input type="date" name="DepartureDate" placeholder="Departure Date" data-form-field="name" required class="form-control" value="" id="name-form5-8o">
                        </div>
                        
                        <div class="col-12 form-group mb-3" data-for="textarea">
                            <textarea name="Message" placeholder="Message" data-form-field="textarea" class="form-control" required id="textarea-form5-8o"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                            <input type="submit" class="btn btn-warning display-4" value="Send message">
                        </div>
                    </div>
                </form>
                </center>
                
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="contacts1 cid-tygSOxXTMZ" id="contacts1-2p">

    

    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-5">Contact us For more information&nbsp;about accommodation and tourism&nbsp;</h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="card col-12 col-lg-6">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-letter mobi-mbri" style="color: rgb(110, 199, 242); fill: rgb(110, 199, 242);"></span>
                        </div>
                        <h4 class="card-title mbr-fonts-style mb-2 display-7">
                            Email
                        </h4>
                        
                        <h5 class="link mbr-fonts-style display-7"><a href="mailto:info.h8tl@gmail.com" class="text-primary">Send us an
                                email</a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-lg-6">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-phone mobi-mbri" style="color: rgb(110, 199, 242); fill: rgb(110, 199, 242);"></span>
                        </div>
                        <h4 class="card-title mbr-fonts-style align-center mb-2 display-7">
                            Phone Call &amp;&nbsp;<span style="font-size: 19.2px;">WhatsApp</span></h4>
                        
                        <h5 class="link mbr-black mbr-fonts-style display-7"><a href="https://wa.me/250786526422" class="text-primary">(+250)&nbsp;0786526422</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer3 cid-txUWSnxodT" once="footers" id="footer3-2j">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-primary" href="ABOUT US.html">About us</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7"><a href="page7.html" class="text-primary">Hospitality</a></li><li class="foot-menu-item mbr-fonts-style display-7"><a href="Tourism.html" class="text-primary">Tourism</a></li><li class="foot-menu-item mbr-fonts-style display-7"><a href="page8.html" class="text-primary">Contact Us</a></li></ul>
            </div>
            
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright Hospitality and tourism lovers 2023-2024. All Rights Reserved.<br>Designed by First Class Digital&nbsp;</p>
            </div>
        </div>
    </div>
</section><section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;"> <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  
  
  
</body>
</html>