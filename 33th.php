<?php
$saved_user = $_COOKIE['user'] ?? '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['remember'])) {
        setcookie("user", $_POST['user'], time() + 3600, "/");
    } else {
        setcookie("user", "", time() - 3600, "/");
    }
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<form method="POST">
    <input type="text" name="user" value="<?php echo htmlspecialchars($saved_user); ?>" placeholder="Username" required><br><br>
    <input type="password" name="pass" placeholder="Password" required><br><br>
    <label><input type="checkbox" name="remember" <?php if($saved_user) echo "checked"; ?>> Remember Me</label><br><br>
    <button type="submit">Login</button>
</form>
