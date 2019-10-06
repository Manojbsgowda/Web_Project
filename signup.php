<?php
session_start();
$con = mysqli_connect('localhost','root','','flood');
$type = $_POST['flood'];
$name = $_POST['user'];
$pass = $_POST['pass'];
$rpass = $_POST['rpass'];
$email = $_POST['email'];
$mob = $_POST['mob'];
$org = $_POST['org'];


$hash=md5($pass);



if($pass == $rpass){
$s="SELECT * FROM `signup` WHERE `username` = '$name'";
$result = mysqli_query($con,$s);
$num= mysqli_num_rows($result);
if($num >= 1){

    //header('location:home.php');
    echo "user name taken ";
    

}else{

    //header('location:index.html');
    $reg= "INSERT INTO `signup`(`type`,`username` ,`password`,`rpassword`,`email`,`mobno`,`organization`) VALUES('$type','$name','$hash','$rpass','$email','$mob','$org')";
    mysqli_query($con,$reg);
    echo "registration successful";
}
}
else
echo "Passwords do not match";
//  && password = '$pass'
?>