<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Debugging: Print current date
$currentDate = date("Y-m-d");
echo "Current date: " . $currentDate . "<br>";

// Retrieve name from form submission
$submittedname = htmlspecialchars($_POST['name']);

// Prepare SQL statement to find the name and fetch `oneOnOne` value
$sql = "SELECT oneOnOne FROM records WHERE name = ? AND DATE(date) >= CURDATE() - INTERVAL 6 DAY";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $submittedname);
$stmt->execute();
$result = $stmt->get_result();

$oneOnOneData = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $oneOnOneData[] = $row['oneOnOne'];
    }
}

// Fetch streak value for the current date
$sql_streak = "SELECT streak FROM records WHERE name = ? AND DATE(date) = CURDATE()";
$stmt_streak = $conn->prepare($sql_streak);
$stmt_streak->bind_param("s", $submittedname);
$stmt_streak->execute();
$result_streak = $stmt_streak->get_result();

$streak = 10; // Default value
if ($result_streak->num_rows > 0) {
    $row_streak = $result_streak->fetch_assoc();
    $streak = $row_streak['streak'];
}

// Check if there was at least one `oneOnOne` session in the past 6 days
$sessionTaken = false;
foreach ($oneOnOneData as $oneOnOne) {
    if ($oneOnOne == 1) {
        $sessionTaken = true;
        break;
    }
}

// Adjust the streak based on sessions
if ($sessionTaken) {
    echo "Current date: $currentDate<br>Current streak: $streak (No change)";
} else {
    $streak -= 5;
    echo "Current date: $currentDate<br>Current streak: $streak (Subtracted 5 due to no sessions)";
}

// Close the connection
$conn->close();
?>
