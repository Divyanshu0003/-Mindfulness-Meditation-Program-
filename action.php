<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Viewport meta tag for responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/action.css">
    <!-- Favicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    
</head>
<body class="main-layout inner_page">
    <!-- Loader -->
  
    <!-- Header -->
    <div class="header">
        <div class="container-fluid">
            <div class="row d_flex">
                <div class="col-md-2 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                        <div class="logo">
                 
</div>

</div>
<div style="position: relative;">
    <a href="index.html">
        <img src="images/SAGE_-removebg-preview.png" alt="#" style="position: absolute; top: -45px; left: -170px; width: 100px; height: 100px; margin:0px;" />
    </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <nav class="navigation navbar navbar-expand-md navbar-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
                                <li class="nav-item active"><a class="nav-link" href="action.php">Daily-Activity</a></li>
                                <li class="nav-item"><a class="nav-link" href="Leaderboard.php">Leaderboard</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
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
 <script>
   
        window.onload = function() {
            var today = new Date().toISOString().split('T')[0];
            document.getElementById("todaysDate").setAttribute('value', today);
            document.getElementById("todaysDate").setAttribute('min', today);
            document.getElementById("todaysDate").setAttribute('max', today);

            var today = new Date();
            var dayOfWeek = today.getDay(); // 0 (Sunday) to 6 (Saturday)
            if (dayOfWeek === 0) {
                showSundayQuestion(); // Show Sunday-specific question
            }

            document.getElementById('todaysDate').addEventListener('change', function() {
                checkSunday(this.value);
            });

            document.querySelectorAll('input[name="visit"]').forEach(function(radio) {
                radio.addEventListener('change', function() {
                    if (this.value === 'yes') {
                        document.getElementById('details').style.display = 'block';
                    } else {
                        document.getElementById('details').style.display = 'none';
                    }
                });
            });

            document.querySelectorAll('input[name="oneOnOne"]').forEach(function(radio) {
                radio.addEventListener('change', function() {
                    if (this.value === 'yes') {
                        document.getElementById('preceptorNameDiv').style.display = 'block';
                    } else {
                        document.getElementById('preceptorNameDiv').style.display = 'none';
                    }
                });
            });
        };

        function checkSunday(selectedDate) {
            var date = new Date(selectedDate);
            var dayOfWeek = date.getDay(); // 0 (Sunday) to 6 (Saturday)
            if (dayOfWeek === 0) {
                showSundayQuestion(); // Show Sunday-specific question
            } else {
                hideSundayQuestion(); // Hide Sunday-specific question
            }
        }

        function showSundayQuestion() {
            document.getElementById('sundayQuestion').style.display = 'block';
            document.getElementById('defaultQuestions').style.display = 'none';
        }

        function hideSundayQuestion() {
            document.getElementById('sundayQuestion').style.display = 'none';
            document.getElementById('defaultQuestions').style.display = 'block';
        }
        var today = new Date();
        var yyyy = today.getFullYear();
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var dd = String(today.getDate()).padStart(2, '0');
        var formattedDate = yyyy + '-' + mm + '-' + dd;
        document.getElementById("todaysDate").value = formattedDate;

        // Show Sunday question if the date is a Sunday
        var dateInput = document.getElementById("todaysDate");
        dateInput.addEventListener('change', checkSunday);
        checkSunday();

        function checkSunday() {
            var selectedDate = new Date(dateInput.value);
            var dayOfWeek = selectedDate.getDay();
            var sundayQuestion = document.getElementById("sundayQuestion");
            if (dayOfWeek === 0) {
                sundayQuestion.style.display = "block";
            } else {
                sundayQuestion.style.display = "none";
            }
        }

        // Show preceptor name field if 'Yes' for one-on-one sitting
        document.querySelectorAll('input[name="oneOnOne"]').forEach(function(radio) {
    radio.addEventListener('change', function() {
        var preceptorNameDiv = document.getElementById('preceptorNameDiv');
        var preceptorNameInput = document.getElementById('preceptorName');
        if (this.value === 'yes') {
            preceptorNameDiv.style.display = 'block';
            preceptorNameInput.setAttribute('required', 'true'); // Make it required
        } else {
            preceptorNameDiv.style.display = 'none';
            preceptorNameInput.removeAttribute('required'); // Remove required attribute
        }
    });
});


      
    </script> 
                        <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
    
    <div id="myFormContainer">
        <form action="submit.php" method="post" id="myForm">
            <label for="experienceDate" style="font-weight: bold; color: #333;">Form date:</label><br>
            <input type="date" id="todaysDate" name="date" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box;">

            <div id="defaultQuestions">
                <label for="question1" style="font-weight: bold; color: #333;">• Have you practiced your morning meditation?</label><br>
                <input type="radio" id="question1_yes" name="Mmed" value="yes" style="margin-right: 10px;">
                <label for="question1_yes" style="color: #333;">Yes</label><br>
                <input type="radio" id="question1_no" name="Mmed" value="no" style="margin-right: 10px;">
                <label for="question1_no" style="color: #333;">No</label><br><br>

                <label for="question2" style="font-weight: bold; color: #333;">• Has your cleaning been completed?</label><br>
                <input type="radio" id="question2_yes" name="Clean" value="yes" style="margin-right: 10px;">
                <label for="question2_yes" style="color: #333;">Yes</label><br>
                <input type="radio" id="question2_no" name="Clean" value="no" style="margin-right: 10px;">
                <label for="question2_no" style="color: #333;">No</label><br><br>

                <label for="question4" style="font-weight: bold; color: #333;">• Did you attend the meeting?</label><br>
                <input type="radio" id="question4_yes" name="meet" value="yes" style="margin-right: 10px;">
                <label for="question4_yes" style="color: #333;">Yes</label><br>
                <input type="radio" id="question4_no" name="meet" value="no" style="margin-right: 10px;">
                <label for="question4_no" style="color: #333;">No</label><br><br>

                <label for="preceptorName" style="font-weight: bold; color: #333;">• Have you attended a one-on-one sitting?</label><br>
        <input type="radio" id="oneOnOneYes" name="oneOnOne" value="yes" style="margin-right: 10px;">
        <label for="oneOnOneYes" style="color: #333;">Yes</label><br>
        <input type="radio" id="oneOnOneNo" name="oneOnOne" value="no" style="margin-right: 10px;">
        <label for="oneOnOneNo" style="color: #333;">No</label><br><br>

        <div id="preceptorNameDiv" class="hidden">
            <label for="preceptorName" style="font-weight: bold; color: #333;">Name of the preceptor:</label>
            <input type="text" id="preceptorName" name="preceptorName" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box;"><br><br>
        </div>

          

                <label for="question3" style="font-weight: bold; color: #333;">• Have you completed your prayer?</label><br>
                <input type="radio" id="question3_yes" name="prayer" value="yes" style="margin-right: 10px;">
                <label for="question3_yes" style="color: #333;">Yes</label><br>
                <input type="radio" id="question3_no" name="prayer" value="no" style="margin-right: 10px;">
                <label for="question3_no" style="color: #333;">No</label><br><br>
           
                <label for="experience" style="font-weight: bold; color: #333;">• Share Your Experience Here:</label><br>
            <textarea id="experience" name="exp" rows="4" cols="50" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box;"></textarea><br><br>
<input type="submit" value="Submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; width: 100%; box-sizing: border-box;">
       
        </div>
            <div id="sundayQuestion" style="display: none;">
               <label for="details" style="font-weight: bold; color: #333;">• Have you visited the ashram?</label><br>
                <input type="radio" id="question1_sunday_yes" name="visit" value="yes" style="margin-right: 10px;">
                <label for="question1_sunday_yes" style="color: #333;">Yes</label><br>
                <input type="radio" id="question1_sunday_no" name="visit" value="no" style="margin-right: 10px;">
                <label for="question1_sunday_no" style="color: #333;">No</label><br><br>
                
                <!-- Details to be shown/hidden -->
                <div id="details" class="hidden">
                    <label for="selfie">Upload a selfie at the ashram:</label>
                    <input type="file" id="selfie" name="selfie" accept="image/*"><br>

                    <label for="location">Type your location:</label>
                    <input type="text" id="location" name="location"><br>
                </div>


                <label for="question2" style="font-weight: bold; color: #333;">• Has your cleaning been completed?</label><br>
                <input type="radio" id="question2_yes" name="Clean" value="yes" style="margin-right: 10px;">
                <label for="question2_yes" style="color: #333;">Yes</label><br>
                <input type="radio" id="question2_no" name="Clean" value="no" style="margin-right: 10px;">
                <label for="question2_no" style="color: #333;">No</label><br><br>

                <label for="question3" style="font-weight: bold; color: #333;">• Have you completed your prayer?</label><br>
                <input type="radio" id="question3_yes" name="prayer" value="yes" style="margin-right: 10px;">
                <label for="question3_yes" style="color: #333;">Yes</label><br>
                <input type="radio" id="question3_no" name="prayer" value="no" style="margin-right: 10px;">
                <label for="question3_no" style="color: #333;">No</label><br><br>

                <label for="question4" style="font-weight: bold; color: #333;">• Did you attend the meeting?</label><br>
                <input type="radio" id="question4_yes" name="meet" value="yes" style="margin-right: 10px;">
                <label for="question4_yes" style="color: #333;">Yes</label><br>
                <input type="radio" id="question4_no" name="meet" value="no" style="margin-right: 10px;">
                <label for="question4_no" style="color: #333;">No</label><br><br>
            
                <label for="experience" style="font-weight: bold; color: #333;">• Share Your Experience Here:</label><br>
            <textarea id="experience" name="exp" rows="4" cols="50"      style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box;"></textarea><br><br>
            <input type="submit" value="Submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; width: 100%; box-sizing: border-box;">
            </div>

            
            </form>
    </div>
<br><br><br><br><br><br><br><br><br><br>
    <!-- Footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="infoma">
                            <h3>Contact Us</h3>
                            <ul class="conta">
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Locations</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> Call +91 9027926497</li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:divyanshusharma3305@gmail.com">divyanshusharma3305@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row border_left">
                            <div class="col-md-12">
                                <div class="infoma">
                                    <h3>For More</h3>
                                    <form class="form_subscri">
                                        <div class="row">
                                            <div class="col-md-12"></div>
                                            <div class="col-md-4">
                                                <input class="newsl" placeholder="Enter your email" type="email" name="email">
                                            </div>
                                            <div class="col-md-4">
                                                <button class="subsci_btn">Subscribe</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="infoma">
                                    <h3>Useful Links</h3>
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
                            <p>© 2024 All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
   
<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>
</html>
