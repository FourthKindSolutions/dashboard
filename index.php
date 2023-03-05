<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    header('Location: dashboard.php');
    exit;
    
}
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check the username and password
    if ($_POST['username'] === 'myusername' && $_POST['password'] === 'mypassword') {
        // Set the session variable and redirect to dashboard
        $_SESSION['username'] = $_POST['username'];
        header('Location: dashboard.php');
        exit;
    } else {
        // Display an error message
        $error_message = 'Incorrect username or password.';
    }
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css" />
<head>
    <style>
        
        body {
            font-family: Arial, sans-serif;
        }
        body {
        background-image: url('img/bg.png');
        background-repeat: no-repeat;
        background-size: cover;
        justify-content: center;
        align-items: center;
        }

        form {
            border: 1px solid #ccc;
            padding: 20px;
            width: 300px;
            margin: 50px auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            padding: 5px;
            margin-bottom: 10px;
            width: 100%;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #3e8e41;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>
        <button type="submit">Login</button>
    </form>

    <?php if (isset($error_message)): ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php endif; ?>
</body>
</html>
