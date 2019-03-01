<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./assets/js/commonActions.js"></script>
    <title>VideoTube</title>
</head>
<body>
    <div id="pageContainer">
        <div id="mastHeadContainer">
            <button class="navShowHide">
                <img src="./assets/images/icons/menu.png" title="menu" alt="menu bar button" />
            </button>
            <a class="logoContainer" href="index.php">
                <img src="./assets/images/icons/VideoTubeLogo.png" title="logo" alt="site logo" />
            </a>
            <div class="searchBarContainer">
                <form action="search.php" method="GET">
                    <input type="text" class="searchBar" name="term" placeholder="Search...">
                    <button class="searchButton">
                        <img src="./assets/images/icons/search.png">
                    </button>
                </form>
            </div>
            <div class="rightIcons">
                <a href="upload.php">
                    <img class="upload" alt="upload button" src="./assets/images/icons/upload.png">
                </a>
                <a href="#">
                    <img class="upload" alt="upload button" src="./assets/images/profilePictures/default.png">
                </a>
            </div>
        </div>
        <div id="sideNavContainer" style="display:none;"></div>
        <div id="mainSectionContainer">
            <div id="mainContentContainer">