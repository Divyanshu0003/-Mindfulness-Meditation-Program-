
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- site metas -->
      <title>Personal Excellence </title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    
   </head>
   <!-- body -->
   <body class="main-layout">
      <div class="colour">
      <!-- loader  -->
     
      <!-- end loader -->
      <!-- header -->
      <div class="header">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class=" col-md-2 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                     <div class="logo">
                           <a href="index.html"><img src="images\SAGE_-removebg-preview.png" alt="#" /></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-8 col-sm-12">
                  <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item active">
                              <a class="nav-link" href="index.php">Home</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="About.php">About</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="action.php">Daily-Activity</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="Leaderboard.php">Leaderboard</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="contact.html">Contact Us</a>
                           </li>
                        </ul>

                        
                     </div>
                  </nav>
               </div>
               <div class="col-md-2">
                  <ul class="email text_align_right">
                  <?php
session_start();

// Check if the user is logged in
if(isset($_SESSION['user'])) {
    // Assuming 'name' is the key in $_SESSION['user'] that holds the username
    echo '<div class="dropdown">';

echo '<div class="dropdown-content">';echo '<strong style="font-size: larger;">Hi, ' . $_SESSION['user']['name'] . '!</strong>';
echo '<br><a href="logout.php">Logout</a>';
echo '</div>';
echo '</div>';


}
?>
                     <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                    
                  </ul>              
               </div>
               </div>
            </div>
            <hr>
         </div>
      </div>
     

      <!-- end header inner -->
      <figure style="
    position: relative;
   
    width: 100%; /* Full width of the parent container */
    text-align: center; /* Center the image horizontally */
    /* Responsive padding */
    box-sizing: border-box; /* Include padding in width calculation */
">
    <img src="images\Screenshot 2024-07-28 150342.png" style="
        max-width: 100%; /* Ensure the image scales with the container */
        height: auto; /* Maintain aspect ratio */
        display: block; /* Remove inline spacing issues */
    ">
</figure>




      <div class="class">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                 
                     <h2>Our Daily Practices </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 margi_bottom">
                  <div class="class_box text_align_center">
                     <i><img src="images/Screenshot 2024-07-25 020642.png" alt="#"/></i>
                     <h3>Morning Meditation</h3>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alterationThere are many variations </p>
                     <br> <a class="read_more"  href="https://www.sahajmarg.org/meditation">Read More</a>
                  </div>
                  
               </div>
               <div class="col-md-4 margi_bottom">
                  <div class="class_box blue text_align_center">
                     <i><img src="images/WhatsApp Image 2024-07-23 at 10.46.15_4da615b4.jpg" alt="#"/></i>
                     <h3>Cleaning</h3>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alterationThere are many variations </p>
                     <br><a class="read_more"   href="https://www.sahajmarg.org/sm/practice/cleaning">Read More</a>
                  </div>
                 
               </div>
               <div class="col-md-4 margi_bottom">
                  <div class="class_box text_align_center">
                     <i><img src="images\Screenshot 2024-07-25 021124.png"  alt="#"/></i>
                     <h3>Prayer</h3>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alterationThere are many variations </p>
                    <br> <a class="read_more"  href="https://www.sahajmarg.org/sm/practice/prayer-meditation">Read More</a>
                  </div>
       
               </div>
            </div>
         </div>
      </div>
      <!-- end our class -->
      <!-- about -->
      <div class="about">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="titlepage text_align_left">
                     <h2>About <br>Personal <br> Excellence</h2>
                     <p>This platform tracks your daily practice and rewards you monthly. It fosters healthy competition among young practitioners of Heartfulness, motivating them to maintain regularity.
                     </p>
                     <div class="link_btn">
                        <a class="read_more" href="about.php">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img text_align_center">
                     <figure>
                     <img src="images\Screenshot 2024-07-25 082102.png" style=" margin: 10px; padding: 25px; top: 20px; height: 450px;"></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- skating -->
    
   
      <!-- end skating -->
      <!-- shop -->

      <!-- end shop -->
      <!-- testimonial -->
      
      
      <!-- end testimonial -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 ">
                     <div class="infoma">
                        <h3>Contact Us</h3>
                        <ul class="conta">
                           <li><i class="fa fa-map-marker" aria-hidden="true"></i>Locations 
                           </li>
                           <li><i class="fa fa-phone" aria-hidden="true"></i>Call +91 9027926497</li>
                           <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="Javascript:void(0)"> divyanshusharma3305@gmail.com</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="row border_left">
                        <div class="col-md-12">
                           <div class="infoma">
                              <h3>For More <h3>
                              <form class="form_subscri">
                                 <div class="row">
                                    <div class="col-md-12">
                                    </div>
                                   
                                    <div class="col-md-4">
                                       <input class="newsl" placeholder="Enter your email" type="text" name="Enter your email">
                                    </div>
                                    <div class="col-md-4">
                                       <button class="subsci_btn">subscribe</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                        <div class="col-md-9">
                           <div class="infoma">
                              <h3>Useful Link</h3>
                              <ul class="fullink">
                                 <li><a href="index.php">Home</a></li>
                                 <li><a href="About.php">About</a></li>
                                 <li><a href="action.php">Daily-pratice</Daily-pratice></a></li>
                                 <li><a href="Leaderboard.php">Leaderboard</a></li>
                                 <li><a href="contact.html">Contact Us</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="infoma text_align_left">
                              <ul class="social_icon">
                                 <li><a href="Javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                 <li><a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="Javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                 <li><a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2024 All Rights Reserved.</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/custom.js"></script>
      <script>
         AOS.init();
      </script>
   </body>
</html>