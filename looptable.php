<?php
echo "<h4> Table </h4>";
echo "<table border=5>";

for($a = 1;$a <= 10;$a++)
{
    echo "<tr>";
    
    for($b = 1;$b <= 10;$b++)
    {
        echo "<td>" .$a * $b. "</td>";
    }

    echo "</tr>";
}
echo "</table>";
?>