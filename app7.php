<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Store the current page in a session variable
    $_SESSION['redirect'] = $_SERVER['REQUEST_URI'];
    header('Location: login.php');
    exit;
}

// User is logged in, display the app content here
$username = $_SESSION['username'];

// Clear the redirect session variable if it exists
if (isset($_SESSION['redirect'])) {
    unset($_SESSION['redirect']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>App</title>
</head>
<body>
    <h1>Welcome to App, <?php echo $username; ?>!</h1>
    <p>This is the content of App. You are logged in and authorized to access this page.</p>
    
    <?php
    // Example link that redirects back to the previous page
    if (isset($_SESSION['redirect'])) {
        echo '<p><a href="' . $_SESSION['redirect'] . '">Go back to the previous page</a></p>';
    }
    ?>
</body>
</html>