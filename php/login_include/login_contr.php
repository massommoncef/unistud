<?php

function correct_password_login(object $pdo,string $email,string $password){
    if( get_password_of_email($pdo, $email) && get_password_of_email($pdo, $email)==password_hash($password,PASSWORD_BCRYPT)){
     return true;
    }else{
     return false;
 
    }
 }
 
 function is_input_empty_login(string $email, string $password){
    if (empty($email) || empty($password)){
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

function is_email_taken(object $pdo, string $email){
    if(get_email($pdo , $email)){
        return true;
    }else{
        return false;
    }
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

?>