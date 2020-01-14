<?php
session_start();
session_unset();
session_destroy();
header("Refresh: 1; url=/Sign-in.html");
echo "Redirection to your page</i>";
exit();
?>