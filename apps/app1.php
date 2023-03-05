<?php
session_start();
session_set_cookie_params(0, '/', '.4ks.online');


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
<style>
		body {
			margin: 0;
			padding: 0;
		}
		
		iframe {
			border: none;
			width: 100vw;
			height: 100vh;
		}
	</style>
<html>
   <head>
      <script>
         window.onload = function() {
            var iframe = document.getElementById("myiframe");
            iframe.width = iframe.contentWindow.document.body.scrollWidth;
            iframe.height = iframe.contentWindow.document.body.scrollHeight;
         }
      </script>
   </head>
   <body>
      <iframe width="100%" height="100%" id="myiframe" src="https://4ks.mx" frameborder="0" ></iframe>
   </body>
</html>


<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>App1</title>

</head>
<body>
	<?php
		// Check if the user is logged in
		if (!isset($_SESSION['username'])) {
			header('Location: login.php');
			exit;
		}
	?>

	<iframe src="http://example.com" frameborder="0"></iframe>
</body>
</html>