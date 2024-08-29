<?php


function get_userid (object $pdo,$email){

    $queryy = "SELECT id FROM user WHERE email = :email";
    $stm = $pdo->prepare($queryy);
    $stm->bindParam(":email",$email);
    $stm->execute();
    $result = $stm->fetch(PDO::FETCH_ASSOC);
    $resultt = $result["id"];
    return $resultt;
}
function save_file_in_submition(object $pdo,string $email,$fileDestination){


$query = "INSERT INTO submition (userid,content) VALUES (:userid , :content);";
$stmm = $pdo->prepare($query);
$email_tmp = get_userid($pdo,$email) ?? "unknow@user.com" ;
$stmm->bindParam(":userid",$email_tmp);
$stmm->bindParam(":content",$$fileDestination);
$stmm->execute();

}


?>