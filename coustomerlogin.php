
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Merchant Login - Tiffin Junction</title>
</head>
<body>

    <header>
        <div class="logo">
        <a href="index.html"><img src="logo.png" alt="Tiffin Junction Logo"> </a> 
        </div>
        <nav>
        <a href="index.html">Home</a>
        <a href="login.php">User Login</a>
        <a href="register.html" class="register-btn">User Register</a>
        <a href="merchant_register.html">Merchant Register</a>
        <a href="merchant_login.php">Merchant Login</a>
        <a href="#footer" class="contact-link">Contact Us</a>
        </nav>
    </header>

    <div class="container">
        
        <form action="testloginserver.php" method="post">
        <h2 style="color:black">User Login</h2>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>

    <footer style="height:20px">
        &copy; 2023 Tiffin Junction. All rights reserved.
    </footer>
    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error === 'email') {
            echo "<p style='color: red;'>Invalid email format.</p>";
        } elseif ($error === 'password') {
            echo "<p style='color: red;'>Invalid password.</p>";
        } elseif ($error === 'email_not_found') {
            echo "<p style='color: red;'>Email not found.</p>";
        }
    }
    ?>
</body>
</html>
