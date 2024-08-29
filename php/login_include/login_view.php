<?php
function check_login_errors() {

if(isset($_SESSION['login_errors'])){
    $errors = $_SESSION['login_errors'];

    foreach($errors as $error){
        echo '<p class="error-messege"> ' . $error . '</p>' . '<br>';
    }

    unset($_SESSION['login_errors']);

}

}

function check_login_links (){
    if(isset($_SESSION["logedin"]) && $_SESSION["logedin"] === true){
        echo '<a href="home-signedin.php" id="home">HOME</a>
            <a href="search.php" id="document">DOCUMENT</a>
            <a href="submitAfterSignin.php" id="submit">SUBMIT</a>' ;

    }else{
        echo '<a href="home.php" id="home">HOME</a>
            <a href="search.php" id="document">DOCUMENT</a>
            <a href="submit.php" id="submit">SUBMIT</a>';
    }
}

?>