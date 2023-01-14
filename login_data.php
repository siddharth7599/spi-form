<?php
$email=$_POST['email'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','','spidb');
$query="select*from tbl_login";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
if($row['email']==$email && $row['password']==$password){
    echo"Successfully login in!"; 
header("location:index1.php");
}else{
    header("location:login.php?msg=1");
}


?>