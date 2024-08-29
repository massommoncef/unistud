<?php
    require '../php/include/register-view.php';
    require '../php/include/config-session.php';
    require '../php/login_include/login_view.php';

    if(isset($_SESSION["logedin"]) && $_SESSION["logedin"] === true){
        header('Location: submitAfterSignin');
      }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">


    <title>Document</title>
    <link rel="stylesheet" href="../cssFILE/submit.css">
</head>

<body>

    <div class="body-submit">

        <div class="logo">
            <img src="../images/unistud-logo.png">
        </div>

        <nav class="nav-bar">
            <?php
            check_login_links ();
            ?>
        </nav>

        <div class="signin-text-submit">

            <p class="signin-title-submit"><span> sign in </span></p>

            <p class="signin-submit">to contribute whith us by sharing resources and finding
                <br> them you have to register first
            </p>

        </div>

        <footer class="signin-butt-submit">
            <button>
                <?php
                user_registreted();
                ?>
            </button>

        </footer>


        <!-- pop up login box  -->



        <div class="pop-box">

            <div class="img">
                <img src="../images/unistud-logo.png">
            </div>

            <div class="exit">
                <img src="../images/exit.png">
            </div>

            <div class="text-container">
                <p class="pop-box-title">Login </p>
                <p class="pop-box-text">sign in to your account </p>

            </div>

            <div class="input-container">
                <form action="../php/login.php" method="post" id="login-form">

                    <input type="text" name="email" value=" email">

                    <input type="password" name="password" value="password">

                    <button type="submit" class="button-container">login </button>

                </form>
            </div>

            <?php
            check_login_errors() ;
            ?>

        </div>

    </div>

    <script src="../js/submit.js"> </script>

</body>

</html>