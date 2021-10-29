<?php
session_start();
$db_name = 'swedenvisa';
$db_username = 'root';
$db_password = '';
$con = mysqli_connect('localhost', $db_username, $db_password, $db_name);

#region admin
//Get all users
$q1 = mysqli_query($con, 'SELECT * FROM users');
$users = mysqli_fetch_all($q1, MYSQLI_ASSOC);

//Get admin
function admin_login($con,$email,$password)
{
    $sql = "SELECT * FROM admins where email='$email' AND password='$password' ";
    $q2 = mysqli_query($con, $sql);
    $admins = mysqli_fetch_all($q2, MYSQLI_ASSOC);
    if(count($admins) > 0){
        $_SESSION['isAdmin'] = 1;
        header("Location:index.php");
    }else {
        header('Location:login.php');
    }
}
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    admin_login($con,$email,$password);
}
if(isset($_POST['logout'])){
    session_destroy();
    header('Location:login.php');
}
#endregion
#region site
function add_user($con,$fname,$lname,$email,$phone,$country,$address){
    $sql = "
    INSERT INTO users
        ( fname, lname, email,	phone,	country,	address)
    VALUES
       ( '$fname', '$lname', '$email',	'$phone',	'$country',	'$address')
    ";
    if ($con->query($sql) === TRUE) {
        echo 'New record created successfully';
        header('location:index2.php');
    } else {
        echo 'Error: ' . $sql . '<br>' . $con->error;
    }

}
if(isset($_POST['add_user'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    add_user($con,$fname,$lname,$email,$phone,$country,$address);
}
#endregion
