<?php 
    $students = require_once "students.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .student {
            display: inline-block;
            border: 1px solid black;
            margin: 40px 10px;
            text-align: center;
        }
        address {
            margin: 10px;
        }
        ul {
            text-align: left;
            display: inline-block;
            padding-left: 0;
        }
    </style>
</head>
<body>
    <?php 
        foreach($students as $student) {
            include "students_tpl.php";
        }
    ?>
</body>
</html>