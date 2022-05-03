<?php

session_start();

require 'config/db.php';

$errors = array();
$username = "";
$email = "";

// jika user klik sign up button
if (isset($_POST['signup-btn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];

// validation
if (empty($username)){
    $errors['username'] = "Username harus diisi";
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email'] = 'Email address error';
}

if (empty($email)){
    $errors['email'] = "Email harus diisi";
}

if (empty($password)){
    $errors['password'] = "Password harus diisi";
}

if ($password !== $passwordConf){
    $errors['password'] = "Password tidak sama";
}

$emailQuery = "SELECT * FROM useradminrptra WHERE email=? LIMIT 1";
$stmt = $conn->prepare($emailQuery);
$stmt->bind_param('s',$email);
$stmt->execute();
$result = $stmt->get_result();
$userCount = $result->num_rows;
$stmt->close();



if ($userCount > 0){
    $errors['email'] = "Email sudah terdaftar";
}

if (count($errors) === 0){
    $password = password_hash($password, PASSWORD_DEFAULT);
    $token = bin2hex(random_bytes(50));
    $verified = false;


    $sql = "INSERT INTO useradminrptra (username, email, verified, token, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssbss', $username, $email, $verified, $token, $password);

    if ($stmt->execute()){
    //login user
        $user_id = $conn->insert_id;
        $_SESSION['id'] = $user_id;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['verified'] = $verified;
        //set flash message
        $_SESSION['message'] = "Anda sedang Login!";
        $_SESSION['alert-class'] = "alert-success";
        header('location: HomepageAdmin.php');
        exit();
    }else{
    $errors['db_error'] = "Database error: gagal mendaftarkan akun";
}


}
}

//jika user klik login button
if (isset($_POST['login-btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

// validation
if (empty($username)){
    $errors['username'] = "Username harus diisi";
}

if (empty($password)){
    $errors['password'] = "Password harus diisi";
}


if(count($errors) === 0){
    $sql = "SELECT * FROM useradminrptra WHERE email=? OR username=? LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt-> bind_param('ss', $username,$username );
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();


if (password_verify($password, $user['password'])){
    //login success
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['verified'] = $user['verified'];
        //set flash message
        $_SESSION['message'] = "Anda sedang Login!";
        $_SESSION['alert-class'] = "alert-success";
        header('location: HomepageAdmin.php');
        exit();

}else{
    $errors['login_fail'] = "Login gagal";
}
}

}

//logout user
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['verified']);
    header('location: login.php');
    exit();
}


