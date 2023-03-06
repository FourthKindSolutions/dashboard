<?php
session_set_cookie_params(0, '/', '.4ks.online');
session_start();


// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Store the current page in a session variable
    $_SESSION['redirect'] = $_SERVER['REQUEST_URI'];
    header('Location: /');
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
	<title>App1</title>
	<style>
		body {
			margin: 0;
			padding: 0;
		}
		
		iframe {
			border: none;
			width: 100vw;
			height: calc(100vh - 60px);
			margin-top: 60px;
		}

		.navbar {
			background-color: #333;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			height: 60px;
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding: 0 20px;
			color: #fff;
		}

		.navbar a {
			color: #fff;
			text-decoration: none;
			margin-right: 20px;
		}

	</style>
</head>
<body>
	<nav class="navbar">
		<a href="../dashboard.php">Dashboard</a>
		<a href="../logout.php">Logout</a>
	</nav>

	<iframe src="https://photo-gallery-php-git.csn.svc.cluster.local:8443" frameborder="0"></iframe>
</body>
</html>
