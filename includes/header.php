<?php require_once "./includes/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Tube</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="./assets/js/scripts.js"></script>
</head>
<body>
    <div id="page-container">
        <div id="main-nav-container">
            <button class="navShowHide">
                <img src="./assets/images/icons/menu.png" alt="icon" >
            </button>

            <a class="logo-container" href="index.php">
                <img src="./assets/images/icons/VideoTubeLogo.png" title="logo" alt="logo of website" >
            </a>

            <div class="search-bar-container">
                <form action="search.php" method="GET">
                    <input type="text" class="search-bar" name="term" placeholder="search..." >
                    <button class="search-button">
                        <img src="./assets/images/icons/search.png" alt="icon" >
                    </button>
                </form>
            </div>

            <div class="right-icons">
                <a href="upload.php">
                    <img class="upload-image" src="./assets/images/icons/upload.png" alt="icon" >
                </a>

                <a href="#">
                    <img class="profile-image" src="./assets/images/profilePictures/default.png" alt="icon" >
                </a>
            </div>
        </div>

        <div id="side-nav-container" style="display:none;">
            <p>side navigation</p>
        </div>

        <div id="main-section-container">
            
            <div id="main-content-container">