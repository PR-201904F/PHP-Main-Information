<?php

echo "<h4>While loop trick 1</h4>";

$a = 1;

while($a <= 10) # a agr 10 sy Chota Ho ya Brabar to nechy line m jo likhu osy print kr do.
{             
      # ye nechy wali line ko 10 bar likhy ga agr ham 20 kry to 20 bar jitna likhyb gy otni bar.
echo $a . ") Ameer Hamza<br>";  #isy print kr do a 10 sy chota ya barabar h.
                             # uper wali line tb tk calti rahy gi jb tk wo fasle na ho jay 
    $a = $a + 1;#/ $a++      # or is main 1 add krta jao jesy ye ek bar add kry ga to ek line ay gi
                             # or jesy ye dobara ay ga or phr sy value ko check kry ga a m jo 1 th osy 2 kr k 
                             # dobara Uper wali line ko print kr dy ga isi tra ye chalta rahy ga jb tk ye false na ho jay. 
}

echo "<h4>While loop trick 2</h4>";

$b = 10;

while($b >= 1)
{
    echo $b . ") Ameer Hamzaa<br>";
    $b--;
}


echo "<h4>While loop trick 3</h4>";

$c = 1;

while($c <= 10)
{
    echo $c . ") Ameer Hamzaaa<br>";
    $c = $c + 2;
}


?>