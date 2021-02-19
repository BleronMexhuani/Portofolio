<?php

session_start();
header('location:login.php');
$servername='localhost';
$username='root';
$password='123456';
$dbName='userregistration';
$con=mysqli_connect($servername,$username,$password,$dbName);

$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from usertable where name='$name'";

$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1)
{
    echo "Username already taken";
}
else
{
    $reg="insert into usertable(name , password) values ('$name','$pass')";
    mysqli_query($con,$reg);
    echo 'Registration Succses';
}
?>
