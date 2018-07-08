<?php
header("Access-Control-Allow-Origin: *");
require_once('../utils/bdd.php');
// $req = $bdd->prepare("SELECT `id`, `nom`,`description`,`adresse` FROM `projets`WHERE id=1");
$req = $bdd->prepare("SELECT projets.id, projets.nom, projets.description, projets.adresse, GROUP_CONCAT(images.url SEPARATOR' et ')
FROM `projets-competences-images` 
INNER JOIN projets ON `projets-competences-images`.id_projet = projets.id 
INNER JOIN competences ON `projets-competences-images`.id_competence = competences.id
INNER JOIN images ON `projets-competences-images`.id_image=images.id 
WHERE projets.id='3'");
$req->execute();
$response = $req->fetch(PDO::FETCH_ASSOC);
echo json_encode($response,  JSON_UNESCAPED_UNICODE);         
?>

