<?php
 if(($_POST["btn"])) 
{
    

$username = $_POST["username"];
$useremail = $_POST["useremail"];
$userpassword = $_POST["userpas"];

echo "Name : $username";
echo "Email : $useremail";
echo "PassWord : $userpassword";

}


?>