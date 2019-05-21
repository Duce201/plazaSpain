
   <!--ПОДКЛЮЧЕНИЕ К БД ДЛЯ ВЫГРУЗКИ ДАННЫХ-->
<?php
                             
$dbhost = "127.0.0.1";
$dbname = "renat";
$username = "renat";
$password = "12345";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username,$password);
$db->exec ("SET NAMES utf8");

  //получение всех данных из основной таблицы
        function get_singles_all(){
   global $db;
   $alqilars = $db->query("SELECT * FROM alqilars");
   return $alqilars;
        }
        
  //получение одного параметра id
        function get_single_by_id($id){
   global $db;
   $alqilars = $db->query("SELECT * FROM alqilars WHERE id=$id");
    foreach($alqilars as $alqilar){
       return $alqilar;
    }
        }      