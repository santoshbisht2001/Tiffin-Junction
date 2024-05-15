<?php
// Assuming you have a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tiffin";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input data
function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = sanitizeInput($_POST["email"]);
    $password = sanitizeInput($_POST["password"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location:  coustomerlogin.php?error=email");
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row["password"];

            if ($password === $hashedPassword) {

                header("Location: hotel.html");
                exit();
            } else {
                header("Location:   coustomerlogin.php?error=password");
                exit();
            }
        } else {
            header("Location:   coustomerlogin.php?error=email_not_found");
            exit();
        }
     }
}
?>




