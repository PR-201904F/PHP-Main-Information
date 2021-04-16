<?php

$connectionwithsql = mysqli_connect("localhost","root","","training");

$username = $_POST["urname"];
$useremail = $_POST["uremail"];
$userpassword = $_POST["urpas"];

$savedatabase = "insert into test(name,email,password) values('$username','$useremail','$userpassword')";


    if(mysqli_query($connectionwithsql,$savedatabase))
{
    echo "Send Your Data";
}
else
{
    echo "Not Send";
}
$hello = "select * from test";
$viewdata = mysqli_query($connectionwithsql,$hello);

 echo "<table>";
 echo  "<tr>";
 echo    "<td>Id</td>";
 echo    "<td>Nane</td>";
 echo    "<td>Email</td>";
 echo    "<td>Password</td>";
 echo "</tr>";
 while($show = mysqli_fetch_arry($viewdata))
 {
 echo "$show[id]";
 echo    "<td>'.$show[id].'</td>";
 echo    "<td></td>";
 echo    "<td></td>";
 echo    "<td></td>" ;
 echo "</tr>";
 echo "</table>";
 }

?>