<?php
header("Access-Control-Allow-Origin: *");
    // S'il y des données de postées
   
      // (1) Code PHP pour traiter l'envoi de l'email
     
      // Récupération des variables et sécurisation des données
      
      // $lastName = $_POST['lastName'];
      // $firstName = $_POST['firstName'];
      // $email = $_POST['email'];
      // $message = $_POST['message'];
      // echo $lastName;
      // echo $firstName;
      // echo $email;
      // echo $message;
     
      // Variables concernant l'email
     
      if (!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['message']) && !empty($_POST['email']))
      {
      var_dump('coucou');
      $lastName = $_POST['lastName'];
      $firstName = $_POST['firstName'];
      $email = $_POST['email'];
      $message = $_POST['message'];
       
			$destinataire='nicolas.jacquot7@free.fr';
			$sujet="Portfolio";
			$message = str_replace("\n", '<br>', $message); //retour à ligne
			$new_message = '<p>' . $message . '</p><p>Envoyé par ' . $lastName . ' '.$firstName.' dont l\'email est : ' . $email . '</p>'; 
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";  
      $headers .= 'From: ' . $lastName. ' '.$firstName.'<' . $email . '>';  
      

      mail($destinataire,
      $sujet,
      $new_message,
      $headers);

  }	    
    else
    {
      
    }
  		
    ?>

    