<?php
header("Access-Control-Allow-Origin: *");
require_once('../utils/bdd.php');
$req = $bdd->prepare("SELECT projets.id, projets.nom, projets.description, projets.adresse, GROUP_CONCAT(DISTINCT competences.adresse) AS imgcomp,  GROUP_CONCAT(DISTINCT images.url) AS url  
FROM projets 
INNER JOIN projets_competences ON projets_competences.id_projet = projets.id 
INNER JOIN competences ON projets_competences.id_competence = competences.id 
INNER JOIN projets_images ON projets_images.id_projet = projets.id 
INNER JOIN images ON projets_images.id_image = images.id 
WHERE projets.id = :id ");
$id=$_GET['id'];
$req->bindParam(':id',$id, PDO::PARAM_INT);
$req->execute();
$response = $req->fetch(PDO::FETCH_ASSOC);
echo json_encode($response,  JSON_UNESCAPED_UNICODE);   
// $lol= array('monid'=> $_GET['id']);
// echo json_encode($lol);
?>

