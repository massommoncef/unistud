<?php

function save_file_in_db(object $pdo,string $email,string $fileDestination){
    save_file_in_submition($pdo,$email,$fileDestination);
}
?>