<?php
    function showTable($a, $b) {
        ?>
        <table>
            <?php for ($i = $a; $i <= $b; $i++) :?>
                   <tr>
                       <?php for ($j = 1; $j <= ($b-$a)+1; $j++) :?>
                                <td><?= $i*$j ?></td>
                                <?php endfor; ?>
                    </tr>
                    <?php endfor; ?>
    </table> 
    <?php
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Функции PHP</title>
     <style>
        table {
            border: 1px solid red;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
            border: 1px solid red;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Функции PHP</h1>
    <?php showTable(10, 20) ?>
</body>
</html>