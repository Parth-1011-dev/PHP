<?php

$monthName = date('F');

if($monthName) {
    echo "The Current month is " . $monthName.".";
}
else{
    echo "not available";
}
?>
