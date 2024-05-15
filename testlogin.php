<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 300px;
            padding: 16px;
            background-color: white;
            margin: 0 auto;
            margin-top: 100px;
            border: 1px solid black;
            border-radius: 4px;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .success-message {
            color: green;
        }

        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <form  method="post" action="testloginserver.php">
    <div class="container">
        <label for="uname"><b>Email</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

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

        <button type="submit">Login</button>
    </div>
</form>
</body>
</html>