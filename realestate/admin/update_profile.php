<?php

include("connect.php");

$name=$_POST["name"];
$myusername=$_POST["username"];
$mypassword=$_POST["passowrd"];
$tel=$_POST["tel"];
$h_p=$_POST["h_p"];
$fax=$_POST["fax"];
$email=$_POST["email"];

$update_sql="UPDATE admin SET name = '$name', username = '$username', password = '$password', tel = '$tel', h_p = '$h_p', fax = '$fax', email = '$email'
WHERE id = '$id'";
$sql_result=mysqli_query($db,$update_sql) or die("Error in updating data due to ".mysqli_error());
if($sql_result)

{
echo "<p><center>";
echo "";
echo "<br>";
echo "<a href='index.html'><img src='images/success.ico'></a>";
}
else
{
echo "Error";
echo mysqli_error();
}
?>