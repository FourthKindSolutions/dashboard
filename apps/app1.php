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
      <script>
         window.onload = function() {
            var iframe = document.getElementById("myiframe");
            iframe.width = iframe.contentWindow.document.body.scrollWidth;
            iframe.height = iframe.contentWindow.document.body.scrollHeight;
         }
      </script>
   </head>
   <body>
      <iframe width="100%" height="100%" id="myiframe" src="https://4ks.mx"></iframe>
   </body>
</html>