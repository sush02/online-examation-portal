<?php
session_start();

header('location:login.php');

$con=mysqli_connect('localhost','root');


mysqli_select_db($con,'userregistration');
$name=$_POST['user'];
$pass=$_POST['password'];

$q="select * from usertable where name='$name' && password='$pass'";
$result=mysqli_query($con, $q);
$num=mysqli_num_rows($result);
if($num==1){
    echo "Username Already taken";
}
else
{
    $qy="insert into usertable(name,password) values ('$name','$pass')";
    mysqli_query($con,$qy);
    echo"Registration Successful";
}

?>