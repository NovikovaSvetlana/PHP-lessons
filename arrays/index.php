<?php
function show($data) {
    echo '<pre>';
    var_dump($data);
    echo '<pre>';
}
/* Организация массива
    $arr = array();
    $arr1 = []; //работает для версий PHP выше 5.4;
    $arr2 = [
        key => value,
    ];
    */
/* Доступ к элементу массива
    echo $arr['name'];
    */
$arr = [
    'name' => 'Alex',
    12,
    32,
    'email' => [
        'bvf@mfjvn',
        'fdh@ngkg',
    ],
    5 => 34,
    6 => 'dfbhrbgj',
]; 
//echo '<pre>';
//var_dump($arr);
//echo '<pre>';

show($arr);

/*
foreach([] as $key => $value){ //имя переменной придумываем самиб с доступом к ключам
    
}

foreach([] as $value){ // без доступа к ключам
    
}
*/

foreach($arr as $key => $value) {
    echo "<p>".$key."<strong> => </strong>".$value."</p>";
    echo "<p>$key<strong> => </strong>$value</p>";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
   
    
</body>
</html>