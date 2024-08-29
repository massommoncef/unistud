<?php
        require_once '../php/submition_include/submition_view.php';
        require_once '../php/include/config-session.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>unistud</title>
    <link rel="stylesheet" href="../cssFILE/submit.css">
</head>

<body>

    <div class="logo">
        <img src="../images/unistud-logo.png">
    </div>

    <nav class="nav-bar">
        <a href="home.php" id="home">HOME</a>
        <a href="search.php" id="document">DOCUMENT</a>
        <a href="submit.php" id="submit">SUBMIT</a>
    </nav>

    <form name="logout" action="../php/logout.php" method="POST">
        <button type="submit" name="logout" class="submit-butt" style="background-color:rgba(239, 130, 189, 1); margin-top:70px;
         margin-left:88%;color:rgba(4, 58, 98, 1);">Log
            out</button>
    </form>

    <div class="submition-box">

        <div class="text-submition-box">
            <p class="inbox-title">Submition</p>
            <p class="inbox-text"> &nbsp;&nbsp;&nbsp;select a document to <br> submit and it will be treated </p>
        </div>

        <div class="submit-container">
            <form name="submit" method="post" action="../php/submition.php" enctype="multipart/form-data">
                <input type="file" name="file" class="file-name">

                <div class="submit-butt-container">
                    <button type="submit" name="submit" class="submit-butt">submit</button>
                </div>
            </form>
        </div>

        <?php
        submitted_message();
        ?>


        <!-- <div class="submit-butt-container">
            <button class="submit-butt">submit</button>
        </div> -->

    </div>
</body>

</html>