<?php
function get_password_of_email(object $pdo, string $email) {
    $query = "SELECT password FROM user WHERE email = :email;";
    $stm = $pdo->prepare($query);
    $stm->bindParam(":email",$email);
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
 

?>