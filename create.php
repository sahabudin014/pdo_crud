<?php
require_once("libs/Db.php");
$objDb = new Db();
$db = $objDb->database;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $query = $db->prepare("INSERT INTO member (id, first_name, last_name,status) VALUES (NULL, :first_name,:last_name, :status);");
    $result = $query->execute(["first_name" => "Sahabudin","last_name" => "baha","status" => 1,]);
    if($result){
      echo "Successfully";
    }else{
      echo "Save fail!";
    }
?>
  </body>
</html>
