<?php


require_once("backend/db.php");
session_start();

// initializing variables
$username = "";
$password = "";
;
    
    $username=$_POST['username'];
    $password=$_POST['password'];


$sql = "SELECT password FROM librarians WHERE username = "."'$username'";

echo $sql. "</br>";

    
$dsn= 'mysql:host=localhost;dbname=library';
$pdo = new PDO($dsn, 'root','');

$stmt = $pdo->prepare($sql);
$stmt->execute();  

$result = $stmt->fetch(PDO::FETCH_COLUMN);
print_r($result);


echo $result. "</br>";
echo $password."</br>";
//if (empty($result)){
//    echo "booo";
//}
If ($password == $result){
    echo " you are loggen in";
} else{
    echo "boo";
}







  // librarianhomepage.php
  
  

  
  
  
  
  
  
  
  ?>