<?php

if (isset($_COOKIE['user_status'])) {
    $visitor_message = "Welcome back! You are a repeated user.";
} else {
    

    setcookie("user_status", "returning", time() + (86400 * 30), "/");
    $visitor_message = "Welcome! This is your first time here (New User).";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Identity Tracker</title>
</head>
<body>

    <h2>Visitor Tracking Dashboard</h2>
    
    <p style="font-size: 1.2em; font-weight: bold; color: #333;">
        <?php echo $visitor_message; ?>
    </p>

    <p>Refresh the page to see your status change from a new user to a repeated user!</p>

</body>
</html>
