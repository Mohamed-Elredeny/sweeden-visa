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
       // $_SESSION['user'] ;
        header('location:index2.php?id='.$con->insert_id);
    } else {
        echo 'Error: ' . $sql . '<br>' . $con->error;
    }

}
function add_question($con,$user,$q1,$q2,$q3){
    $sql1 = "
    INSERT INTO user_answers
        ( user_id	, question_num	,answer	)
    VALUES
       ( '$user', '1', '$q1')
    ";
    $sql2 = "
    INSERT INTO user_answers
        ( user_id	, question_num	,answer	)
    VALUES
       ( '$user', '2', '$q2')
    ";
    $sql3 = "
    INSERT INTO user_answers
        ( user_id	, question_num	,answer	)
    VALUES
       ( '$user', '3', '$q3')
    ";
    $con->query($sql1);
    $con->query($sql2);
    $con->query($sql3);
}
function get_user_answer($con,$user_id,$number){
    $sql = "SELECT * FROM user_answers where user_id='$user_id' AND question_num='$number' ";
    $q2 = mysqli_query($con, $sql);
    $admins = mysqli_fetch_all($q2, MYSQLI_ASSOC);
    if (count($admins) > 0) {
       return $admins[0]['answer'];
    } else {
        return 'q23798y529385u72358792';
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

if(isset($_POST['addQuestionnaire'])){

}
#endregion
