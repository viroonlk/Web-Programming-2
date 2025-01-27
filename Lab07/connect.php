<?php
session_start();

try {
    $username = "root";
    $password = "";
    $host = "localhost";
    $dbname = "register";

    $servername = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $conn = new PDO($servername, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Database connection error: " . $e->getMessage();
    exit();
}

function login($conn, $username, $password) {
    $sql = "SELECT * FROM user WHERE username=:username";
    $stm = $conn->prepare($sql);
    $stm->execute(["username" => $username]);

    $user = $stm->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
      
        session_regenerate_id(true);
        $_SESSION['user'] = $user;
        return $user;
    } else {
        return false;
    }
}

function isLogin() {
    return isset($_SESSION['user']) ? $_SESSION['user'] : false;
}

function logout() {
    unset($_SESSION['user']);
}

function register($conn, $username, $password, $first_name, $last_name) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (username, password, first_name, last_name) 
            VALUES (:username, :password, :first_name, :last_name)";

    $stm = $conn->prepare($sql);
    $stm->execute([
        "username" => $username,
        "password" => $hashed_password,
        "first_name" => $first_name,
        "last_name" => $last_name
    ]);
}
