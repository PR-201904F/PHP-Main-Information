<?php

echo "<h4>Nested Loop</h4>";

#Nested Loop Ek he loop k ander Bhot Sary loop La skta h.
for($a = 1; $a <= 100;$a = $a + 10)
{
    for($b = $a; $b < $a + 10; $b++)
    {
        echo $b;
    }

    echo "<br>";
     
   
}


?>