<?php

require_once 'include/connection.php';
require_once 'include/config-session.php';
require_once 'submition_include/submition_contr.php'; 
require_once 'submition_include/submition_model.php'; 

$email = $_SESSION["email"];


if(isset(($_POST["submit"]))){
    $file = $_FILES["file"];

    $fileName = $_FILES["file"]["name"];
    $fileTmpName = $_FILES["file"]["tmp_name"];
    $fileSize = $_FILES["file"]["size"];
    $fileEroor = $_FILES["file"]["error"];
    $fileType = $_FILES["file"]["type"];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));


    if($fileEroor === 0 ){
        $fileNameNew = get_userid($pdo,$email) . uniqid('',true) . ".". $fileActualExt;
        $fileDestination = __DIR__."/../uploads/". $fileNameNew;
        move_uploaded_file($fileTmpName,$fileDestination);
        save_file_in_db($pdo,$email,$fileDestination);
        // submit($pdo,$fileDestination,$email);
        header('Location: http://localhost/unistud/html/home.php');
    }else{
        echo "there was a error uploading your file ";
    }
}

// if($_SERVER["REQUEST_METHOD"] === "POST"){

//     // $contente=$_POST["doc"];

//     try{

//         require_once 'include/connection.php';
//         require_once 'submition_include/submition_model.php';
//         require_once 'include/config-session.php';

//         $target = "upload/";

//         if(isset($_FILES["file"]) && $_FILES["file"]["error"] == 0){
//             $filename = $_FILES["file"]["name"];
//             $targetpath = $target.$filename;
//         }

//         if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetpath)){
            
//         }
        
//         // $email=$_SESSION["email"];
//         // submit ( $pdo,$contente,$email);

//         // if(submit ( $pdo,$contente,$email)){
//         //     $_SESSION["submited"]=true;
//         // }else{
//         //     $_SESSION["submited"]=false;
//         // }
    
//         // header("Location: ../html/submitAfterSignin.php");

//     }catch(Exception $e ){
//         echo 'ERROR : ' .$e->getMessage();
//     }

// }else{
//     header("Location: ../htlm/submitAfterSignin.php");
//     die();
// }

// 

// $target_dir = "uploads/";
// $uploadOk = 1;

// // Vérifier si le formulaire a été soumis
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     if (isset($_FILES["fileToUpload"])) {
//         $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//         $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//         // Vérifier si le fichier est une image réelle ou une image fictive
//         if (isset($_POST["submit"])) {
//             $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//             if ($check !== false) {
//                 echo "File is an image - " . $check["mime"] . ".";
//                 $uploadOk = 1;
//             } else {
//                 echo "File is not an image.";
//                 $uploadOk = 0;
//             }
//         }

//         // Vérifier si le fichier existe déjà
//         if (file_exists($target_file)) {
//             echo "Sorry, file already exists.";
//             $uploadOk = 0;
//         }

//         // Vérifier la taille du fichier
//         if ($_FILES["fileToUpload"]["size"] > 500000) {
//             echo "Sorry, your file is too large.";
//             $uploadOk = 0;
//         }

//         // Autoriser certains formats de fichiers
//         if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
//             echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//             $uploadOk = 0;
//         }

//         // Vérifier si $uploadOk est défini sur 0 par une erreur
//         if ($uploadOk == 0) {
//             echo "Sorry, your file was not uploaded.";
//         } else {
//             // Si tout est OK, essayer de télécharger le fichier
//             if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//                 echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
//             } else {
//                 echo "Sorry, there was an error uploading your file.";
//             }
//         }
//     } else {
//         echo "No file uploaded.";
//     }
// } else {
//     echo "Form has not been submitted.";
// }
?>