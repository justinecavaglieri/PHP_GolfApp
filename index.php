<?php 

session_start();

//si l'utilisateur est connecté on affiche un message
	if(isset($_SESSION) && !empty($_SESSION)){
		echo "test réussi";;
	}
//sinon on l'envoie sur la page de login
	else{
		header('Location: login.php');
	}