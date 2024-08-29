<?php

require '../php/include/config-session.php';
require '../php/include/register-view.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unistud</title>

    <style>
    body,
    html {
        margin: 0;
        padding: 0;
        height: 100%;
        font-family: Arial, sans-serif;
    }

    .container {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }

    .register {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 40%;
        height: 60%;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.9);
        border: 2px solid black;
        display: flex;
        flex-direction: row;
        gap: 15px;
        z-index: 1;
        border-radius: 30px;
    }

    .register-box {
        width: 90%;
        height: 90%;
        margin-left: 2rem;
    }

    /* .register-img{
            width: 47%;
        } */

    .register-box h2 {
        text-align: center;
        margin-bottom: 10px;
    }

    .register-box p {
        text-align: center;
        margin-bottom: 20px;
    }

    .register-box form {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .register-box input[type="text"],
    .register-box input[type="password"] {
        padding: 10px;
        font-size: 13px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .register-box button {
        padding: 10px;
        font-size: 16px;
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 2.5rem;
    }

    .register-box button:hover {
        background-color: #0056b3;
    }

    .retour {
        height: 40px;
        width: 40px;
        margin-top: 15px;
        margin-left: 15px;
        transition: ease 0.6s;
    }

    .retour:hover {
        height: 45px;
        width: 45px;
        margin-top: 17px;
        margin-left: 17px;
    }
    </style>

</head>

<body>

    <div class="container">


        <img src="../images/home-pic3.jpg" alt="Background Image" class="background">
        <a href="home.php"><img src="../images/retoursign.png" alt="retoure" class="retour"></a>

        <div class="register">
            <div class="register-box">
                <h2>User Registration</h2>
                <p>Enter your details to create your account</p>
                <form action="../php/registration.php" method="post" id="signup-form">
                    <?php
                    signup_user_data();
                    ?>
                    <button type="submit" class="button-container">Register</button>

                    <?php 
                    // if(isset($_GET['']) && ){
                        check_signup_errors(); 
                    // }
                    ?>
                </form>
            </div>
        </div>

    </div>

    <script src="../js/djil.js"></script>
</body>

</html>