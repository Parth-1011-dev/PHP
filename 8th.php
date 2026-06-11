<?php

    echo"<center>";
    echo"using for loop"."<br>";

    for($i=5; $i<=10; $i++)
    {
        echo $i . " ";
    }

?>

<?php
echo"<center>";
echo"using foreach loop"."<br>";
"<br>";
$arr = array(5,6,7,8,9,10);
foreach($arr as $i)
{
    echo $i . " ";
}

?>