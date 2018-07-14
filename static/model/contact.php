<?php
header("Access-Control-Allow-Origin: *");
require_once('../utils/bdd.php');
$req = $bdd->prepare("SELECT `tel`, `tel_interna` FROM `informations`"); 
$req->execute();
$response = $req->fetch(PDO::FETCH_ASSOC);
echo json_encode($response,  JSON_UNESCAPED_UNICODE);         
?>