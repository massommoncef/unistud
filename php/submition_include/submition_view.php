<?php
function submitted_message(){
    if (isset($_SESSION["submitted"]) && $_SESSION["submitted"] === true) {
        echo '<script>
        window.alert("You have submitted a document successfully");
        </script>';
    }
}

?>