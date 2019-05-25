<?php
// данные для подключения
$serverMySQL="localhost"; # имя сервера
$db="test"; # база данных
$dblog="root"; # логин
$dbpass=""; # пароль
$table="test"; # наша таблица

$mi=new mysqli($serverMySQL, $dblog, $dbpass, $db);
$mi->set_charset("utf8"); # кодировка
if($mi->connect_errno):
    die($mi->connect_error);
endif;
?>
<?php
$sql=$mi->query("select a1 from a"); 
print "$sql";
?>
