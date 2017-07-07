<?php 
    $items = require_once "items.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .menu {
            display: inline-block;
            border: 1px solid black;
            margin: 40px 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 
            include "items_tpl.php";
    ?>
</body>
</html>