<?php
// Database connection parameters
$servername = "sql204.infinityfree.com";
$username = "if0_36972375";
$password_db = "goBO9UPxO3e";
$dbname = "if0_36972375_test";

// Create connection
$conn = new mysqli($servername, $username, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start session to access session variables
session_start();

// Handle the case where user is not logged in
if (!isset($_SESSION['user']['id'])) {
    die("User not logged in");
}

// Check if the user is logged in and retrieve username
if (isset($_SESSION['user']['name'])) {
    $name = $_SESSION['user']['name']; // Assuming 'name' is the key in $_SESSION['user'] that holds the username

    // Check if the user has already submitted for today
    $currentDate = date('Y-m-d'); // Get the current date in 'Y-m-d' format
    $checkSql = "SELECT COUNT(*) as count FROM record WHERE name = ? AND DATE(date) = ?";
    $checkStmt = $conn->prepare($checkSql);
    
    if ($checkStmt === false) {
        die("Prepare failed for check query: " . $conn->error);
    }
    
    $checkStmt->bind_param("ss", $name, $currentDate);
    $checkStmt->execute();
    $checkResult = $checkStmt->get_result();
    $row = $checkResult->fetch_assoc();
    $submissionCount = $row['count'];
    
    $checkStmt->close();
    
    if ($submissionCount > 0) {
        echo '<style>
        #loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .loader-text {
            font-size: 24px;
            font-weight: bold;
        }
        </style>';

        // Echo loader HTML for already submitted message
        echo '<div id="loader"><p class="loader-text">You have already submitted the form today.</p></div>';

        // Echo JavaScript with setTimeout to redirect after 3 seconds
        echo '<script>
        setTimeout(function() {
            window.location.href = "index.php";
        }, 3000); // 3000 milliseconds = 3 seconds
        </script>';

        // Exit to stop further execution
        exit;
    } else {
        // Retrieve name from form submission
        // Check if the user is logged in
        if (isset($_SESSION['user'])) {
            // Fetch the name from the session
            $submittedname = htmlspecialchars($_SESSION['user']['name']);
            
            // Display the user's name in the dropdown
          

            $Mmed = isset($_POST['Mmed']) && $_POST['Mmed'] === 'yes' ? 1 : 0;
            $Clean = isset($_POST['Clean']) && $_POST['Clean'] === 'yes' ? 1 : 0;
            $meet = isset($_POST['meet']) && $_POST['meet'] === 'yes' ? 1 : 0;
            $oneOnOne = isset($_POST['oneOnOne']) && $_POST['oneOnOne'] === 'yes' ? 1 : 0;
            $visit = isset($_POST['visit']) && $_POST['visit'] === 'yes' ? 1 : 0;
            $prayer = isset($_POST['prayer']) && $_POST['prayer'] === 'yes' ? 1 : 0;
            $exp = isset($_POST['exp']) ? $_POST['exp'] : '';
            $preceptorName = isset($_POST['preceptorName']) ? $_POST['preceptorName'] : '';
            $date = isset($_POST['date']) ? $_POST['date'] : '';
            
            // Fetch the previous streak value
            $previousSql = "SELECT streak FROM record WHERE name = ? AND date = (SELECT MAX(date) FROM record WHERE name = ?)";
            $previousStmt = $conn->prepare($previousSql);
            if ($previousStmt === false) {
                die("Prepare failed for previous query: " . $conn->error);
            }
            $previousStmt->bind_param("ss", $submittedname, $submittedname);
            $previousStmt->execute();
            $previousStmt->bind_result($previousStreak);
            $previousStmt->fetch();
            $previousStmt->close();
            
            // Calculate streak based on current data
            $streak = $Mmed + $Clean + $prayer + ($previousStreak ?? 0) + 2 * $meet + 10 * $visit + 5 * $oneOnOne;
            
            // Adjust streak based on day of the week
            if (date('w', strtotime($date)) == 0) { // Sunday
                $streak += ($Mmed == 1) ? 9 : -5;
            }
            if (date('w', strtotime($date)) == 3 && $meet == 1) { // Wednesday
                $streak += 3;
            }
            
          
            
            // Apply penalty if no submission was made yesterday
            $yesterday = strtotime('yesterday');
            $lastSubmissionSql = "SELECT MAX(date) as last_date FROM record WHERE name = ?";
            $lastSubmissionStmt = $conn->prepare($lastSubmissionSql);
            $lastSubmissionStmt->bind_param("s", $submittedname);
            $lastSubmissionStmt->execute();
            $lastSubmissionStmt->bind_result($lastSubmissionDate);
            $lastSubmissionStmt->fetch();
            $lastSubmissionStmt->close();
            if (strtotime($lastSubmissionDate) < $yesterday) {
                $streak -= 2;
            }
            
            // Insert new record
            $insertSql = "INSERT INTO record (name, Mmed, Clean, meet, oneOnOne, visit, prayer, exp, preceptorName, date, streak) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, STR_TO_DATE(?, '%Y-%m-%d'), ?)";
            $insertStmt = $conn->prepare($insertSql);
            if ($insertStmt === false) {
                die("Prepare failed for insert query: " . $conn->error);
            }
            $insertStmt->bind_param("siiiiiisssi", $submittedname, $Mmed, $Clean, $meet, $oneOnOne, $visit, $prayer, $exp, $preceptorName, $date, $streak);
            if ($insertStmt->execute()) {
                echo '<style>
                #loader {
                    position: fixed;
                    left: 0;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(255, 255, 255, 0.7);
                    z-index: 9999;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                .loader-text {
                    font-size: 24px;
                    font-weight: bold;
                }
                </style>';
                echo '<div id="loader"><p class="loader-text">Thank You...</p></div>';
                echo '<script>
                setTimeout(function() {
                    window.location.href = "index.php";
                }, 3000);
                </script>';
            } else {
                echo "Error: " . $insertStmt->error;
            }
        }
    }
    $conn->close();
}
?>
