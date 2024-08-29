<?php
  $msg="logout not ruisser";
  $alert = "<script>alert('$msg');</script>";

if(isset($_POST["logout"])){
   
try{
   $currnetpage = $_SERVER['HTTP_REFERER'];
   
  
   if($currnetpage == "localhost/unistud/html/submitAfterSignin.php"){
    $_SESSION=[];
    header("Location: ../html/register.php");
   }
   
}catch(Exception $e){
    echo $alert;
}

}else{
    echo $alert;
}


?>