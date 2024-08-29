<?php

if($_SERVER["REQUEST_METHOD"]   === "POST"){

    $email = $_POST["email"];
    $password = $_POST["password"];
    
    try{
    
        require_once 'include/connection.php';
        require_once 'login_include/login_model.php';
        require_once 'login_include/login_contr.php';
    
        $errors = [];

        if(is_input_empty_login($email,$password)){
        $errors["empty_input"] = 'Fill in all fields';
        }
        if(is_email_invalid($email)){
            $errors["invalid_email"] = 'invalid email used';
        }
        if(!is_email_taken($pdo, $email)){
            $errors["email_used"] = 'wrong email';
        }
        if(correct_password_login($pdo,$email,$password)){
            $errors["invalid_password_login"] = 'invalid password';
        }
        if(short_password($password)){
            $errors["short_password"] = 'password must have 8 caracters';
        }
        
        require_once 'include/config-session.php';
        $_SESSION["email"]=$email;
        

      if($errors){
        $_SESSION["login_errors"] = $errors;
        header("Location: ../html/home.php");
        $_SESSION["logedin"] = false;
      }else{
        $_SESSION["logedin"] = true;
        header("Location: ../html/home-signedin.php?login=true");
      }

    }catch(PDOException $e){
        die("Login failed    " . $e->getMessage());
    }

}

?>