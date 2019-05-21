
   <!--ПОДКЛЮЧЕНИЕ К БД ДЛЯ ВЫГРУЗКИ ДАННЫХ-->
<?php
                        
$dbhost = "127.0.0.1";
$dbport ="3306" ;
$dbname = "renat";
$username = "renat";
$password = "12345";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname; dbport=$dbport", $username,$password);
$db->exec ("SET NAMES utf8");

  //получение всех данных из основной таблицы
        function get_singles_all(){
   global $db;
   $generals = $db->query("SELECT * FROM general");
   return $generals;
        }
        
  //получение одного параметра id
        function get_single_by_id($id){
   global $db;
   $generals = $db->query("SELECT * FROM general WHERE id=$id");
    foreach($generals as $general){
       return $general;
    }
        }      
        //получение всех данных из таблицы тип недвижимости
function get_types_by_id($id){
    global $db;
    $types = $db->query("SELECT * FROM types WHERE id=$id");
    foreach($types as $type){
       return $type["type"];
    }
}       


        //получение всех данных из таблицы города
function get_cities_by_id($id){
    global $db;
    $cities = $db->query("SELECT * FROM cities WHERE id=$id");
    foreach($cities as $city){
       return $city["city"];
    }
}          

      //получение всех данных из таблицы услуги

function get_services_by_id($id){
    global $db;
    $services = $db->query("SELECT * FROM services WHERE id=$id");
    foreach($services as $service){
       return $service["service"];
    }
}       
     
                           
                            