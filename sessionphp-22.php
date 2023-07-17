<?php
$con=mysqli_connect("localhost","WT","wt","wt");
$uname=$_POST['uname'];
$pwd = $_POST['pwd'];
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "SELECT * FROM user WHERE uname='$uname'";
$result = mysqli_query($con, $query);

while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
$dbpwd = $row['pwd'];
$uname = $row['uname'];
} 

if(md5($pwd)==$dbpwd)
{
session_start();
$_SESSION['uname']=$uname;
$expire=time()+60*60*24*30;
setcookie("login1", "$uname", $expire);
header("Location: welcome.php"); 
}
else
{
header("Location: login.php"); 
}
?>

