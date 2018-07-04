<?php
header("Access-Control-Allow-Origin: *");
require_once('../utils/bdd.php');
$req = $bdd->prepare("SELECT adresse FROM `competences`"); 
$req->execute();
$response = $req->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($response,  JSON_UNESCAPED_UNICODE);         
// echo "<img src=\"".response['type']."\">";
?>


