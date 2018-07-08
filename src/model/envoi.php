<?php
if(isset($_POST) && isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['message'])){
	extract($_POST);
	if(!empty($nom) && !empty($mail) && !empty($message)) {
		$message=str_replace("\'","'",$message);
		$destinataire="hugodewattinne@live.be";
		$sujet="Portfolio";
		$msg="Message provenant de  www.hugodewattinne.be  \n
		Nom: $nom \n
		Email: $mail \n
		Message: $message";
		$entete="From: $nom \n Reply-To: $mail";
		mail($destinataire, $sujet, $msg, $entete);
		
		$confirmation= "<p class=\"confirmation\">Votre message a bien été envoyé</p>";
	}

	else{
		$confirmation = "<p class=\"erreur\">Vérifiez que vous ayez bien rempli tous les champs</p>";
	}
	
}
?>      

