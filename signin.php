<?php

    session_start();

    $con = mysqli_connect("localhost", "root", "", "flood") or die(mysqli_error($con));

    $username = $_POST['user'];
    $password = $_POST['pass'];

    $_SESSION['username'] = $username;      //to use username on different pages

    /*
    $result1 = mysql_query("SELECT password FROM signup WHERE username = '$username'");
    $result2 = mysql_query("SELECT username FROM signup WHERE password = '$password'");
    */

    $check_u = "select * from `signup` where username = '$username'";
    $res_u = mysqli_query($con,$check_u) or die(mysqli_error($con));
    $check_p = "select * from `signup` where username = '$username' and password = '$password'";
    $res_p = mysqli_query($con,$check_p) or die(mysqli_error($con));

    if(mysqli_num_rows($res_u) == 0)
    {
      echo "<script type='text/javascript'>alert('Incorrect username!!');</script>";
      header("refresh: 0.01; url=login.php");
    }

    else if(mysqli_num_rows($res_p) == 0)
    {
      echo "<script type='text/javascript'>alert('Incorrect password!!');</script>";
      header("refresh: 0.01; url=login.php");
    }

    /*
    if($username == $result2 && $password == $result1) 
    { 
        $_SESSION["logged_in"] = true; 
        $_SESSION["naam"] = $name; 
        header("refresh: 0.01; url=mag/index.html");
    }
    else
    {
        echo'The username or password are incorrect!';
    }
    */

    else
    {  
      //echo "<script type='text/javascript'>alert('Logged in successfully!!');</script>";
      header("refresh: 0.01; url=mag/index.html");
    }
?>