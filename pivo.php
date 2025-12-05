<?php
// pivo.php
// Определяем функцию для автоопределения типа перевода строки
function println ($string_message) {
    if (isset($_SERVER['SERVER_PROTOCOL'])) print "$string_message<br />";
    else  print "$string_message\n";
}
 
$usecli=(php_sapi_name() == "cli") ? True: False;
// If use cli interface
if($usecli > 0 and $argc == 2){
        $beer = $argv[1];
} else {
// if use http GET request
        if(isset($_GET["beer"])){
                $beer = $_GET["beer"];
        }
        else {
                println("Вы не выбрали пиво!!!");
                exit();
        }
}
 
// Определяем сорт пива
//$beer = 'Tuborg';
switch ($beer) {
    case 'Tuborg';
    case 'Carlsberg';
    case 'Stella';
    case 'Heineken';
        println("$beer - Хороший выбор");
        break;
    default;
        println("$beer - Пожалуйста, выберите заново...");
        break;
}
 
?>