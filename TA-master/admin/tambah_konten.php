<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "adminpanel");
if (isset($_POST['registerbtn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    if ($password === $cpassword) {
        $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
        $query_run  = mysqli_query($connection, $query);

        if ($query_run) {
            $_SESSION['success'] = "Admin Profile Added";
            header('location: register.php');
        } else {
            $_SESSION['status'] = "Admin Profile Not Added";
            header('location: register.php');
        }
    } else {
        $_SESSION['status'] = "Password and Confirm Password Does Not Match";
        header('location: register.php');
    }
}
//edit admin
if (isset($_POST['update'])) {
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE register SET username='$username', email='$email', password='$password' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Your Data is Updated";
        header('location: register.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT Updated";
        header('location: register.php');
    }
}
//delete admin
if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id ='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Your Data is Deleted";
        header('location: register.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT Deleted";
        header('location: register.php');
    }
}
