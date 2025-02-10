
<!DOCTYPE html>
   <html lang="en">
      <head>
         <!-- basic -->
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <!-- mobile metas -->
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="viewport" content="initial-scale=1, maximum-scale=1">
         <!-- site metas -->
         <title>sbs</title>
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
                              <a href="index.html"><img src="images/heartfulness-logo-removebg-preview.png" alt="#" /></a>
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
                              <li class="nav-item">
                                 <a class="nav-link" href="About.php">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="action.php">Daily-Activity</a>
                              </li>
                              <li class="nav-item active">
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
         <!-- shop -->
         <?php
// Database connection details
$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "test";
// Create connection
$conn = new mysqli($servername, $username, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data sorted by highest streak, showing each user only once
// SQL query to fetch the latest streak data for each user, ensuring no duplicates
$sql = "SELECT name, streak FROM records 
        WHERE date IN (
            SELECT MAX(date) FROM records GROUP BY name
        )
        GROUP BY name 
        ORDER BY streak DESC 
        LIMIT 20";

$result = $conn->query($sql);

// Output table with CSS styling
if ($result->num_rows > 0) {
    echo "<style>
             table {
                margin: 50px auto; /* Center align the table */
                width: 80%; /* Set table width */
                border: 4px solid #000; /* Thick border */
                border-collapse: collapse;
                border-radius: 10px; /* Rounded corners */
                overflow: hidden; /* Ensure rounded corners don't overflow */
                background-color: #f0f0f0; /* Smoke white background */
                font-family: Arial, sans-serif;
             }
             th, td {
                padding: 12px;
                text-align: left;
                border-bottom: 1px solid #ddd;
             }
             tr:hover {
                background-color: #e0e0e0; /* Light grey on hover */
             }
             th {
                background-color: #ddd; /* Light grey for header */
             }
          </style>";
    echo "<table><tr><th>Badge</th><th>Name</th><th>Streak</th></tr>";

    // Array for badges
    $places = ["🥇", "🥈", "🥉"];
    $place_index = 0;

    // Initialize serial number for ranks
    $serial = 4;

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        if ($place_index < count($places)) {
            // Output first three places with predefined badges
            echo "<tr><td>". $places[$place_index] ."</td><td>". $row["name"] ."</td><td>". $row["streak"] ."</td></tr>";
        } else {
            // Output subsequent places with serial numbers and no badges
            echo "<tr><td>". $serial ."</td><td>". $row["name"] ."</td><td>". $row["streak"] ."</td></tr>";
            $serial++;
        }
        $place_index++;
    }
    echo "</table>";
} else {
    echo "0 results";
}


// Close connection
$conn->close();
?>
<?php

// Database connection parameters
$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is logged in
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']['name'];

    // Query to fetch the maximum streak value for the logged-in user
    // Query to fetch the current streak value for the logged-in user
$sql = "SELECT streak FROM records 
WHERE name = ? 
ORDER BY date DESC 
LIMIT 1";

$stmt = $conn->prepare($sql);
if ($stmt === false) {
die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
// Output current streak value
$row = $result->fetch_assoc();
$streak = $row["streak"];

// Display streak value
echo "<div style=\"text-align: center; font-size: 18px; font-weight: bold;\">";
echo $username . "&nbsp; your current streak value is " . $streak;
echo "</div>";
} else {
echo "No streak found for the logged-in user.";
}

$stmt->close();
}

// Close connection
$conn->close();
?>



         <!-- end shop -->
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
                                    <li><a href="action.php">Daily-Activity</a></li>
                                    <li><a href="Leaderboard.php">Leaderboard</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
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