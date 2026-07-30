<?php
session_start();


if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
    setcookie(session_name(), '', time() - 3600, '/');
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['user'] === "admin" && $_POST['pass'] === "123") {
        $_SESSION['username'] = $_POST['user'];
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        $error = "Wrong credentials!";
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>PHP Session Control</title></head>
<body>


<?php if (isset($_SESSION['username'])): ?>
    <h2>Welcome to the Home Page Dashboard</h2>
    <p>Logged in as: <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong></p>
    <br>
    <a href="?action=logout">Logout</a>


<?php else: ?>
    <h2>Login Form</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
        <input type="text" name="user" placeholder="Username" required><br><br>
        <input type="password" name="pass" placeholder="Password" required><br><br>
        <button type="submit">Login</button>
    </form>
<?php endif; ?>

</body>
</html>