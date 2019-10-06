<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,flood);
$name = $_POST['user'];
$pass = $_POST['pass'];

$s="select * from signin where name = '$name' && password='$pass'";
$result = mysqli_query($con, $s);
$num= mysqli_num_rows($result);
if($num == 1){
    header('location:home.php');

}else{
    header('location:index.html');
}

?>