<?php

header("Set-Cookie: user=Parth; Max-Age=3600; Path=/; HttpOnly");

if (isset($_COOKIE['user'])) {
    echo "Cookie Value: " . $_COOKIE['user'];
} else {
    echo "Cookie set! Refresh the page to read it.";
}
?>
