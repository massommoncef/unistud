<?php

declare(strict_types=1);

function check_signup_errors() {

if(isset($_SESSION['errors_signup'])){
    $errors = $_SESSION['errors_signup'];

    foreach($errors as $error){
        echo '<p class="error-messege"> ' . $error . '</p>' . '<br>';
    }

    unset($_SESSION['errors_signup']);

}

}

function signup_user_data(){

        if(isset($_SESSION['signup_data']['username']) && !isset($_SESSION['errors_signup']['username_taken'])){
            echo '<input type="text" name="name" placeholder="Enter your name" value="' . $_SESSION["signup_data"]["username"] . '">';
        }else{
          echo '<input type="text" name="name" placeholder="Enter your name">' ;
        }
    
        if(isset($_SESSION['signup_data']['email']) && !isset($_SESSION['errors_signup']['email_used']) 
        && !isset($_SESSION['errors_signup']['invalid_email'])){
            echo '<input type="text" name="email" placeholder="Enter your email"  value="' . $_SESSION["signup_data"]["email"] . '">';
        }else{
          echo '<input type="text" name="email" placeholder="Enter your email">' ;
        }
    
        echo '<input type="password" name="password" placeholder="Enter your password">';
        echo '<input type="password" name="password-confirm" placeholder="confirm your password">';

}

function user_registreted(){
    // if(isset($_SESSION["logedin"]) && $_SESSION["logedin"]===true  && ){



    // }
    if( isset($_SESSION["registered"]) && $_SESSION["registered"] === 'true'){

            echo ' <p style="font-weight: bold; font-size: 1.4em;">Log-in</p>';

    }else{
        echo ' <p style="font-weight: bold; font-size: 1.4em;">Log-in</p>
        <a href="register.php" id="regester"
            style="font-weight:medium;text-decoration: underline;color:rgba(0, 22, 77, 0.8);">register</a>';
    }
}