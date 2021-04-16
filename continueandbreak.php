<?php

echo "<h4> Continue </h4>";

for($a = 1;$a <= 10;$a++)
{
   if($a == 4) #is ka mtlb agr numbr 4 aya to os ki jaga wo likhna jo m yaha likhu.
   {
       echo "No : " . $a . "<br>"; # jb number 4 Aya to os ki jaga Ye lihna.
       continue; # is sy ye hoga k Number 4 k liye jo phly ham ne kuch likha tha
   }             #  wo hat jay ga or opr jo ham ne likha os ki jaga wo a jay ga.

    echo "Number : " . $a . "<br>";
}

echo "<h4> Break </h4>";

for($b = 1; $b <= 10;$b++)
{
    if($b == 4) 
    {
        echo  "Number : " . $b;
    break; # jb yaha break Lagay gy to 4 sy necy koe Value print ni kry ga.
    }
    echo "Number : " . $b . "<br>";
}

?>
