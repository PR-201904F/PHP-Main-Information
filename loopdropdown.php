<?php

$month = array("","january","February","March","Aprail","May","Jun","July","August","September","October","November","December");

echo "<h4>Date OF Birth:</h4>";

echo "<select>";
for($a = 1;$a <= 31;$a++)
{
    
    echo "<option>".$a."</option>";
}
echo "</select>";

echo "<select>";
for($b = 1; $b <= 12;$b++)
{
    echo "<option>".$month[$b]."</option>";
}
echo "</select>";

echo "<select>";
for($c = 1980;$c <= 2005;$c++)
{
    echo "<option>".$c."</option>";
}
echo "</select>";

?>