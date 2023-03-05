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
      <script type="text/javascript">
      function resizeIframe(obj){
         obj.style.height = 0;
         obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
      }
      </script>      
<script type="text/javascript">
function getDocHeight(doc) {
    doc = doc || document;
    // stackoverflow.com/questions/1145850/
    var body = doc.body, html = doc.documentElement;
    var height = Math.max( body.scrollHeight, body.offsetHeight, 
        html.clientHeight, html.scrollHeight, html.offsetHeight );
    return height;
}

function setIframeHeight(id) {
    var ifrm = document.getElementById(id);
    var doc = ifrm.contentDocument? ifrm.contentDocument: 
        ifrm.contentWindow.document;
    ifrm.style.visibility = 'hidden';
    ifrm.style.height = "10px"; // reset to minimal height ...
    // IE opt. for bing/msn needs a bit added or scrollbar appears
    ifrm.style.height = getDocHeight( doc ) + 4 + "px";
    ifrm.style.visibility = 'visible';
}

document.getElementById('ifrm').onload = function() { // Adjust the Id accordingly
    setIframeHeight(this.id);
}
</script>      
      <script>
         window.onload = function() {
            var iframe = document.getElementById("myiframe");
            iframe.width = 100;
            iframe.height = iframe.contentWindow.document.body.scrollHeight;
         }
      </script>
   </head>
   <body>
      <iframe onload='resizeIframe(this)' id="myiframe" src="https://4ks.mx"></iframe>
   </body>
</html>