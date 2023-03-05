<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    header('Location: dashboard.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
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

</body>
</html>
