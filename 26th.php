
<form method="post" action="">
    <input type="text" name="username" placeholder="Enter name" required>
    <button type="submit">Submit</button>
</form>

<?php

if (isset($_POST['username'])) {
    setcookie("user", $_POST['username'], time() + 3600);
    header("Location: "); 
    exit;
}


if (isset($_COOKIE['user'])) {
    echo "Cookie Value: " . $_COOKIE['user'];
} else {
    echo "No cookie found.";
}
?>
