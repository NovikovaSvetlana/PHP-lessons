<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product_list</title>
</head>
<body>
   <?php
        require_once "lib/main.php";
        getHeader();
    ?>
    <h1>Товарные категории</h1>
    <ul>
       <ul>Напитки
            <li>Соки</li>
            <li>Кофе</li>
            <li>Коктели</li>
            <li>Чай</li>
            <li>Алкогольные</li>
        </ul>
        <ul>Кондитерские изделия
           <li>Пироженные</li>
           <li>Торты</li>
           <li>Мороженое</li>        
        </ul>
    </ul>
      
    <?php
        getFooter();
    ?>
</body>
</html>