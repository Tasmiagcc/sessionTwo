<?php
 define("root_dir", "http://localhost/php/php/php/sessionTwo/");
 $pageTitle = "Tasmia 's Site";


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href=" <?root_dir?>css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
</head>
<body>
   <nav>
    <nav>
        <ul>
            <li><a href="<?=root_dir?>">Home</a></li>
            <li><a href="<?=root_dir?>pageTwo.php">PageTwo</a></li>
            <li><a href="<?=root_dir?>pageThree.php">PageThree</a></li>
            <li><a href="<?=root_dir?>pageFour.php">PageFour</a></li>
        </ul>
    </nav>
   