<?php
session_start();
session_unset();
session_destroy();

setcookie("user", "", time() - 3600, "/");

echo "Session and cookie have been successfully destroyed.";
?>
