<?php
    require_once "config.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorial Login PHP MySQL</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            margin-top: 40px;
        }
    </style>

</head>
<body>

<div class="container">

<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"> LOGIN </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="?page=home">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="?page=profile">Profil</a></li>
                        <li><a href="?page=logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="row">
             <?php include_once "pages/" . $page . ".php"; ?>
         </div>
        <hr>
        <div class="row">
            <p class="text-center">Copyright &copy; 2017  - <a href="Sahabat_surga">JournalToday</a></p>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>