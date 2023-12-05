<?php

$conn = mysqli_connect("localhost", "root", "", "final_db");
session_start();

if (isset($_SESSION["id"])) {
    header ("Location: profile.php");
}

if(isset($_POST["login"])){
    global $conn;

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE Email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $user["Password"])){
            header("Location: profile.php");
            $_SESSION['firstname'] = $user["Firstname"];
            $_SESSION['email'] = $user["Email"];
            $_SESSION['phone'] = $user["Phone"];
            $_SESSION['age'] = $user["Age"];
            die();
        }
        else{
        echo "Wrong Password";
        exit;
        }
    }
    else{
        echo "User Not Registered";
        exit;
    }
}
