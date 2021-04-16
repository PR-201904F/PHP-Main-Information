<?php


echo "<h4>switch trick 1</h4>";
$week = 1;

# switch k ander jo variable h osy experetion kehty hai. 
switch($week)
{
    case 1: #is ka mtlb agr user ne 1 likha h to nechy wali line dikhao
        echo "Today is  monday";
    break; # break ka mtlb k is k bad is candition k ander kuch na chaly 
    case 2: #is ka mtlb agr user ne 2 likha h to nechy wali line dikhao
        echo "Today Is tuesday";
    break;
    case 3: #is ka mtlb agr user ne 3 likha h to nechy wali line dikhao
        echo "Today is wednesday";
    break;
    # mujy 2 ya is sy ziyada case k liye ek he msg chahye to
    # main case sy agy space dy k dosra case dal skta hu 
    # example:  case 4 case 5; or is ke nechy line m jo msg hoga wo dono pr ay ga ek he msg.
    case 4:
        echo "today is Thursday";
    break;
    case 5:
        echo "Today Is Friday";
    break;
    case 6:
        echo "Today is Seturday";
    break;
    case 7:
        echo "Today Is Monday";
    break;

    default: # ye else Ka kam krta h agr 1 sy 7 tk os ne in m sy kuch ni likha to nechy wali line osy nazar ay
    echo "Valid Number";


}
echo "<br>";
echo "<br>";
echo "<h4>switch trick 2</h4>";

$age = 15;

# switch m true is liye likha h k switch ko zaror chalna h.
switch(true)
{
    case($age >= 18 && $age <= 25);
    echo "Adult";
break;
case ($age > 25);
echo "Old age";
break;
case ($age < 18);
echo "Child";
break;
default: 
echo "Wrong Number";

}





?>