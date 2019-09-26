<?php
    session_start();
    $username = "";
    $email = "";


    // connect DB
    $db = mysqli_connect("localhost", "root", "", "db_hdv");

    if( isset($_POST['btn-signup']) ) {
        $username = mysqli_real_escape_string($_POST['name']);
        $email = mysqli_real_escape_string($_POST['email']);
        $password = mysqli_real_escape_string($_POST['password']);
        $re_password = mysqli_real_escape_string($_POST['repeat-pass']);

        if( $password === $re_password ) {
            // create user 
            $sql = "INSERT INTO tbl_user(name, email, password) VALUES($username, $email, $password)";
            mysqli_query($db, $sql);
            $_SESSION['message'] = "Login in Success";
            $_SESSION['username'] = $username;
            header('location: ../Home/index.php');

        } else {
            // fail
            $_SESSION['message'] = "Password fail";
        }

    }


?>