<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login Form</title>
</head>
<body>

<div class="container">
    <div class="alert-box">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4 class="alert-heading">Login Required</h4>
        <form id="loginForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-ghost">Login</button>
        </form>

        <?php
        // PHP code for form handling
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Perform your authentication logic here
            // For demonstration purposes, let's check if the username is "demo" and password is "demo123"
            if ($username === "demo" && $password === "demo123") {
                // Successful login, redirect to a dashboard or home page
                header("Location: dashboard.php");
                exit();
            } else {
                // Invalid credentials, display an error message
                echo "<div class='alert alert-danger'>Invalid username or password.</div>";
            }
        }
        ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
