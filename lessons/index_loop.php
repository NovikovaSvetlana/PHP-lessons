<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Циклы</title>
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
    <h1>Циклы для PHP</h1>
    <?php 
//        for($i = 0; $i < 10; $i++) {
//            if($i % 3 == 0) {
//               continue;
//            }
//             echo $i."<br>";
//        }
    
//    for ($i = 1; $i <= 10; $i++) {
//        for ($j = 1; $j <= 10; $j++) {
//            echo $i*$j;
//        }  
//        echo "<br>";
//    }
    
    ?>
    
    <table>
            <?php 
                for ($i = 1; $i <= 10; $i++) :
                    ?>
                   <tr>
                       <?php 
                            for ($j = 1; $j <= 10; $j++) :
                                ?>
                                <td><?= $i*$j ?></td>
                                <?php
                            endfor;
                        ?>
                    </tr>
                    <?php
                endfor;
            ?>
    </table>
    
</body>
</html>