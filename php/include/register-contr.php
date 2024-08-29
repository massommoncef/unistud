<?php

declare(strict_types=1);

function is_input_empty(string $email, string $password, string $username){
    if (empty($username) || empty($password || empty($email))){
        return true;
    }else{
        return false;
    }
}
function is_input_empty_login(string $email, string $password){
    if (empty($password || empty($email))){
        return true;
    }else{
        return false;
    }
}


function is_email_invalid(string $email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL) && $email!=""){
        return false;
    }else{
        return true;
    }
}

function is_username_taken(object $pdo, string $username){
    if(get_username($pdo , $username)){
        return true;
    }else{
        return false;
    }
}

function is_email_taken(object $pdo, string $email){
    if(get_email($pdo , $email)){
        return true;
    }else{
        return false;
    }
}

function create_user(object $pdo, string $email, string $username, string $password, string $role ){
    set_user($pdo, $email, $username, $password, $role);
  
}

function password_confirmed(string $password, string $passwordConfirm): bool {
    // Check if both passwords are the same length
    if (strlen($password) !== strlen($passwordConfirm)) {
        return false;
    }

    // Compare character by character
    for ($i = 0; $i < strlen($password); $i++) {
        if ($password[$i] !== $passwordConfirm[$i]) {
            return false;
        }
    }

    return true;
}


function string_length(string $string){
    $count=0 ;
    while(!empty($string[$count])){
        $count++;
    }
    return $count;
}

function short_password($password){
    if(string_length($password)<8){
        return true;
    }else{
        return false;
    }
}