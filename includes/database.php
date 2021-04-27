<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "badersleben";
$select = "SELECT * FROM content ORDER BY date DESC LIMIT 5";
try{
    $connection = new PDO("mysql:host=$serverName;dbname=$dbname", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "error in connection ".$e->getMessage();
}
$result = $connection->query($select);

?>