<?php

session_start();

$con =mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'userreg');

$name=$_POST['user'];

$pass=$_POST['password'];

$s=" select * from usertable where name ='$name' && password='$pass'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username']= $name;

header('location:home.php');
   // echo"Usename Already Taken";
}
else{
    header('location:login.php');

  //  $res= " insert into usertable(name , password) values ('$name' , '$pass')";//

  //  mysqli_query($con, $reg);//

  //echo" Registration Successfully";//

}


?>