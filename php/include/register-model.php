<?php

declare(strict_types=1);

function get_username(object $pdo, string $username) {
    $query = "SELECT username FROM user WHERE username = :username;";
     
    $stm = $pdo->prepare($query);
    $stm->bindParam(":username",$username);
    $stm->execute();

    $result = $stm->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_email(object $pdo, string $email) {
    $query = "SELECT email FROM user WHERE email = :email;";
    $stm = $pdo->prepare($query); 
    $stm->bindParam(":email",$email);
    $stm->execute();

    $result = $stm->fetch(PDO::FETCH_ASSOC);
    return $result;
}
 

function set_user(object $pdo, string $email, string $username, string $password, string $role){

    $query = "INSERT INTO  user (email, username, password,role) VALUES (:email, :username, :password ,:role);";
    $hashedpassword = password_hash($password,PASSWORD_BCRYPT);
   

    $stm = $pdo->prepare($query);
    $stm->bindParam(":email",$email);
    $stm->bindParam(":username",$username);
    $stm->bindParam(":password",$hashedpassword);
    $stm->bindParam(":role",$role);
    $stm->execute();
}