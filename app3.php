<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

// User is logged in, display the app content here
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>App3</title>
</head>
<body>
    <h1>Welcome to App3, <?php echo $username; ?>!</h1>
    <p>This is the content of App3. You are logged in and authorized to access this page.</p>
</body>
</html>