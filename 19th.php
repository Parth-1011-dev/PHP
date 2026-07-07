<?php
// 1) DAYOFWEEK() -> 1 (Sunday) to 7 (Saturday)
echo "1) DAYOFWEEK: " . (date('w') + 1) . "<br>";

// 2) DAYOFMONTH() -> 1 to 31
echo "2) DAYOFMONTH: " . date('j') . "<br>";

// 3 & 4) DAYOFYEAR() -> 1 to 366
echo "3 & 4) DAYOFYEAR: " . (date('z') + 1) . "<br>";

// 5) DAYNAME() -> Monday, Tuesday, etc.
echo "5) DAYNAME: " . date('l') . "<br>";
?>
