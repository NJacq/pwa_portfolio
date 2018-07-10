<?php
header("Access-Control-Allow-Origin: *");
require_once('../utils/bdd.php');
$req = $bdd->prepare("SELECT id, nom,description,adresse FROM projetsWHERE id=1");
$req = $bdd->prepare("SELECT projets.id, projets.nom, projets.description, projets.adresse, GROUP_CONCAT(images.url) AS url, GROUP_CONCAT(competences.adresse) AS imgcomp
FROM projets_competences_images 
INNER JOIN projets ON projets_competences_images.id_projet = projets.id 
INNER JOIN competences ON projets_competences_images.id_competence = competences.id
INNER JOIN images ON projets_competences_images.id_image=images.id 
WHERE projets.id=:id");
$id=$_GET['id'];
$req->bindParam(':id',$id, PDO::PARAM_INT);

// $req= array('monid'=> $_GET['id']);
// echo json_encode($id,  JSON_UNESCAPED_UNICODE);
// $req->bindParam(':id',$id, PDO::PARAM_INT);
$req->execute();
$response = $req->fetch(PDO::FETCH_ASSOC);
echo json_encode($response,  JSON_UNESCAPED_UNICODE);   
// $lol= array('monid'=> $_GET['id']);
// echo json_encode($lol);
?>

