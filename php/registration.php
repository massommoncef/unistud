<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST"){

$username = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$passwordConfirm = $_POST["password-confirm"];

try{
    require_once 'include/connection.php';
    require_once 'include/register-model.php';
    require_once 'include/register-contr.php';

    // ERROR HANDLERS
$errors = [];

    if(is_input_empty($email,$password,$username)){
    $errors["empty_input"] = 'Fill in all fields';
    }
    if(is_username_taken($pdo,$username)){
        $errors["username_taken"] = 'username already taken';
    }
    if(is_email_invalid($email)){
        $errors["invalid_email"] = 'invalid email used';
    }
    if(is_email_taken($pdo, $email)){
        $errors["email_used"] = 'Email already registered';
    }
    if(!password_confirmed($password, $passwordConfirm)){
        $errors["password_confirmation"] = 'invalide password';
    }
    if(short_password($password)){
        $errors["short_password"] = 'password must have 8 caracters';
    }
    
    require_once 'include/config-session.php';

    if($errors){
        $_SESSION["errors_signup"] = $errors;
        
        $_SESSION["registered"]= 'false';

            $signup_data = [
                "email"=>$email,
                "username"=>$username
            ];
            $_SESSION["signup_data"] = $signup_data;
           
            
        header("Location: ../html/register.php?signup=error");
        $stm=null;
        $pdo=null;

        die();
    }else{

         create_user($pdo, $email, $username, $password,'user');
      
         $_SESSION["registered"]= 'true';

        header("Location: ../html/home.php?signup=success");
        die();
    }


    
}catch (PDOException $e){
    die("Query failed    " . $e->getMessage());
}

}else {
    header("Location: ../html/register.php");
    die();
}

?>