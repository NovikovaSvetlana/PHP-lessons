<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
        .container {
            margin: 0 auto;
            width: 100%;
            height: auto;
        }
        .day {
            background-color: yellow;
        }
        .night {
            background-color: cadetblue;
            color: white;
        }
        img {
            width: 200px;
            height: 200px;
        }
        .morning {
            background-color: aquamarine;
        }
        .evening {
            background-color: goldenrod;
        }
    </style>
    <?php
    // пример выводим часы     
    $time = strftime("%H");
    ?>
</head>
<body class="<?php echo ($time < 12) ? 'day' : 'night'?>">
    <h1>
        <?php
            echo "Hello";
        ?>
    </h1>
    <?php
    // однострочный комментарий
    /*
    многострочный комментарий, многострочные комментарии вкладывать друг в друга нельзя
    */
    
    echo 2+
    2/
    3;
    echo "<br>";
    $a=2;
    $b=3;
    $c=4;
    
    if ($a>$b) {
        if ($a>$c) {
            echo $a;
        } 
        else {
            echo $c;
        } 
    }else {
        if ($b>$c) {
            echo $b;
        }
        else {
            echo $c;
        }
    }
    
    // вызов информации для понимания какая версия php настроена
    // phpinfo();
        

    /* Короткая запись
    $a;
    if($b <3) {
        $a=4;
    } else {
        $a=8;
    }
    */
    $a = ($b < 3) ? 4 : 8;
    
    ?>
        <h2>Привет странник, сейчас <?php echo $time; ?> часов</h2> 
        <?php 
            if ($time <= 12):
                ?>
                    <div class="day">
                        <h3>Сейчас за окном день!</h3>
                    </div>
                <?php 
            else:
                ?>
                      <div class="night">
                        <h3>Сейчас за окном ночь!</h3>
                    </div>
                <?php 
            endif;
        ?>
        
<div class="container">
    <?php 
        if ($time <= 6 or $time >= 22): 
            ?>
           <div class="night">
                <h3>Доброй ночи</h3>
                <p>Сейчас <?php echo $time; ?>. Хорошего сна!</p>
            </div>
            <?php 
        elseif ($time <= 12):
                ?>
            <div class="morning">
                <h3>Доброе утро</h3>
                <p>Сейчас <?php echo $time; ?>. Хорошего дня!</p>
                <img src="http://cs619429.vk.me/v619429211/12a0e/2DL0xRGa_xc.jpg">
            </div>
            <?php 
        elseif ($time <= 18):
                ?>
            <div class="day">
                <h3>Добрый день</h3>
                <p>Сейчас <?php echo $time; ?>. Хорошего дня!</p>
                <img src="http://www.gismeteo.ru/static/news/img/src/1742/0ce1895b.jpg">
            </div>
            <?php
        else:
                ?>
            <div class="evening">
                <h3>Добрый вечер</h3>
                <p>Сейчас <?php echo $time; ?>. Хорошего вечера!</p>
                <img src="http://melochi-jizni.ru/_ph/58/2/141820812.gif">
            </div>
            <?php 
        endif;
    ?>
</div>


</body>
</html>