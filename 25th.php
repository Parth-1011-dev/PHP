<?php
setcookie("user", "Parth", time() + 300);//Will be deleted after 5 Minutes
?>
<html>
<body>
<?php
echo"<br/>CookieValue: " . $_COOKIE["user"];
?>
</body>
</html>