<?php
$host="localhost";
$db="hr";
$user="root";
$pass="passw0rd";

try{
  $conn=new PDO("mysql:host=$host;dbname=$db",$user,$pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
}
catch(PDOException $e){
  echo "Not connected :".$e->getMessage();

}
?>
