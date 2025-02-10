o<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      
   
      <!-- site metas -->
      <title>Personal Excellence</title>
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
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
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
                        <li class="nav-item">
                              <a class="nav-link" href="index.php">Home</a>
                           </li>
                           <li class="nav-item active">
                              <a class="nav-link" href="About.php">About</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="action.php">Daily-Activity</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="Leaderboard.php">Leaderboard</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="contact.php">Contact Us</a>
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
      </div>
      <!-- end header inner -->
      <!-- about -->
      <div class="about">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="titlepage text_align_left">
                     <h2>About <br>Personal<br>Excellence</h2>
                     <p>The Heartfulness platform is designed not only to introduce individuals to the practice of meditation but also to encourage consistent engagement through a structured reward system. By tracking daily meditation sessions, the platform not only helps users monitor their progress but also fosters a sense of accountability. This accountability is enhanced through monthly rewards, which serve as incentives for regular participation.

Moreover, the platform cultivates healthy competition among its users, particularly appealing to young practitioners. By gamifying the experience with rewards for consistent practice, it motivates individuals to establish and maintain a daily meditation routine. This competitive aspect not only makes the practice engaging but also reinforces the importance of regularity in meditation for overall well-being.

In addition to fostering competition, the platform serves as a supportive community where practitioners can connect and share their experiences. This communal aspect enhances the overall meditation journey, providing encouragement and solidarity among participants. Through shared achievements and challenges, users can strengthen their commitment to meditation and deepen their understanding of its benefits.

Overall, the Heartfulness platform combines technology and mindfulness to create a motivating environment that supports individuals in establishing a sustainable meditation practice.
                     </p>
                    
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img text_align_center">
                  <img src="images\Screenshot 2024-07-25 082102.png" style=" margin: 10px; padding: 25px; top: 20px; height: 450px;"></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
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
                           <li><i class="fa fa-phone" aria-hidden="true"></i>Call +01 1234567890</li>
                           <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="Javascript:void(0)"> demo@gmail.com</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="row border_left">
                        <div class="col-md-12">
                           <div class="infoma">
                              <h3>Newsletter</h3>
                              <form class="form_subscri">
                                 <div class="row">
                                    <div class="col-md-12">
                                    </div>
                                    <div class="col-md-4">
                                       <input class="newsl" placeholder="Enter your email" type="text" name="Enter your email">
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
                                 <li><a href="index.html">Home</a></li>
                                 <li><a href="about.html">About</a></li>
                                 <li><a href="skating.html">Daily-Activity</a></li>
                                 <li><a href="shop.html">Leaderboard
                                 </a></li>
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
                        <p>© 2020 All Rights Reserved. Design by <a href="https://html.design/"> Free html Templates</a></p>
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