<?php

echo "<h4> Example 1 </h4>";

# Agr hame bhot jaga value ko print krwana h jesy function m krwaty thy pr os m thori c changing b 
# karni h to ham function ko parameter use krty h 

#ham is m arthmatic operator b use kr skty h.
function sum($a , $b)
{
    echo "This is value : ";
    echo $a + $b;
    
}

sum(10,20); # a or b m kiya kiya plus krwana h wo yaha likhna hoga

echo "<h4> Example 2 </h4>";

#ham is m koe name b dy skty h.
function call($fname,$lname)
{
   
    echo $fname . $lname;
}

call("Ameer","Hamza");

echo "<h4> Example 3 </h4>";

# is m ham parameter k ander b value dy skty h.
function fullname($first="Zahid",$last="khan")
{
    echo $first . $last;
}

fullname(); # or call krty time kuch ni likhy gy q k uper hamne likha huwa h.

echo "<h4> Example 4 </h4>";


# is m ham parameter k ander b value dy skty h or osy call krty time change b kr skty h.
function fullname2($first2="Zahid",$last2="Khan")
{
    echo $first2 , $last2;
}

fullname2("Nabeel"); #oper jo first2 parameter m zahid likha h oski jaga nabeel a jay gaa.

echo "<h4> Example 5 </h4>";


function sum2($c,$d)
{
    echo $c + $d;
}
# is ko ham variable k ander value ko add kr k call krwa skty h.
$f = 20;
$g = 30;

sum2($f,$g); #is tra.



?>