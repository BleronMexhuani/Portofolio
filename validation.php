<?php

session_start();

$servername='localhost';
$username='root';
$password='123456';
$dbName='userregistration';
$con=mysqli_connect($servername,$username,$password,$dbName);
if(mysqli_connect_errno()){
    echo 'gabim shtypi';
}


$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from usertable where name='$name' && password ='$pass'";

$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1)
{
    $_SESSION['nameuser']=$name;
    header('location:index.php');
}
else
{
   header('location:login.php');
}
?>
