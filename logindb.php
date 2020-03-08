<?php
$host="localhost";
$username="root";
$password="qwerty12345";
$db_name="son";
$tbl_name="login";
$conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($conn,"$db_name")or die("cannot select DB");
$myusername=$_POST['usr'];
$mypassword=$_POST['pwd'];
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($conn,$myusername);
$mypassword = mysqli_real_escape_string($conn,$mypassword);
$sql="select * from $tbl_name where passwd='$mypassword' AND name='$myusername'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if ($count >= 1)
{
echo ":) :) LOGIN SUCCESS :) :) ";
exit();
}
else 
{
echo ":( :( AUTHETICATION FAILURE :( :( ";
exit();
}
?>
