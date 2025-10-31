<?php
session_start();

require_once '../../config.php';
require_once '../../app/includes/constant.php';
require_once '../../app/includes/app_start.php';

function ValidateFields($field, $var)
{
    global $socket;
    $Validate = "select * from zon_users where $field='$var'";

    return mysqli_num_rows(mysqli_query($socket, $Validate));
}


// User Adding, Updating And Deleteing Action  
if (isset($_POST['add_user']) && isset($_POST)) {


    // $id = mysqli_real_escape_string($con, $_POST['id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $user_status = mysqli_real_escape_string($con, $_POST['user_status']);

    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    $user_pic = "user_pic.png";

    if ($_FILES['user_pic']['error'] == 0) {
        $file_name = rand(111111111, 99999999) . $_FILES['user_pic']['name'];
        $file_tmp = $_FILES['user_pic']['tmp_name'];

        if (move_uploaded_file($file_tmp, "../../static/img/" . $file_name)) {
            $user_pic = $file_name;
        }
    }

    if (ValidateFields('email', $email)) {
        @header("location: ../add-users.php?emailError=Email Already Exist");
        // $bool = true;
        $emil = false;
    } else {
        $emil = true;
    }
    if (ValidateFields('username', $username)) {
        @header("location: ../add-users.php?usernameError=Username Already Exist");
        $usern = false;
    } else {
        $usern = true;
    }

    $query = "INSERT INTO zon_users (`name`, `email`, `username`, `password`, `user_pic`, `status`, `is_admin`) VALUES ('$name', '$email', '$username', '$password', '$user_pic', $user_status, 0) ";

    if ($usern == true && $emil == true) {
        if (mysqli_query($con, $query)) {

            unset($_SESSION['name']);
            unset($_SESSION['email']);
            unset($_SESSION['username']);
            unset($_SESSION['password']);

            @header("location: ../users.php");
        }
    }
}




if (isset($_POST['update_user']) && isset($_POST)) {


    $id = mysqli_real_escape_string($con, $_POST['user_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $user_status = mysqli_real_escape_string($con, $_POST['user_status']);



    // $user_pic = "user_pic.png";

    if (ValidateFields('email', $email) == 2 && ValidateFields('username', $username) == 2) {
        @header("location: ../add-users.php?action=update&token_id=$id&emailError=Email Already Exist&usernameError=Username Already Exist");
        $user = false;
    } else {
        $user = true;
    }

    if (ValidateFields('email', $email) == 2) {
        @header("location: ../add-users.php?action=update&token_id=$id&emailError=Email Already Exist");
        $emil = false;
    } else {
        $emil = true;
    }

    if (ValidateFields('username', $username) == 2) {
        @header("location: ../add-users.php?action=update&token_id=$id&usernameError=Username Already Exist");
        $usern = false;
    } else {
        $usern = true;
    }

    $query = "UPDATE  zon_users SET `name`='$name', `email`='$email', `username`='$username', `password`='$password', `status`=$user_status where id=$id ";

    if ($_FILES['user_pic']['error'] == 0) {
        $file_name = rand(111111111, 99999999) . $_FILES['user_pic']['name'];
        $file_tmp = $_FILES['user_pic']['tmp_name'];

        if (move_uploaded_file($file_tmp, "../../static/img/" . $file_name)) {
            $user_pic = $file_name;

            $query = "UPDATE  zon_users SET `name`='$name', `email`='$email', `username`='$username', `password`='$password', `user_pic`='$user_pic', `status`=$user_status where id=$id  ";
        }
    }
    if ($usern == true && $emil == true && $user == true) {
        if (mysqli_query($con, $query)) {

            unset($_SESSION['name']);
            unset($_SESSION['email']);
            unset($_SESSION['username']);
            unset($_SESSION['password']);

            @header("location: ../users.php");
        }
    }
}