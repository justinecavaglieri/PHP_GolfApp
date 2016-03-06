<?php
session_start();

require('config/config.php');
require('function/function.fn.php');

if(isset($_POST) && !empty($_POST)){
	if(!empty($_POST['pseudo']) && !empty($_POST['password']) &&!empty($_POST['HCP'])){
		$register = userRegistration($db,$_POST['pseudo'],$_POST['password'],$_POST['HCP']);
		if($register == true){
			header('Location: login.php');
		} else{
		$error = 'L\'adresse email et ou l\'username existe déjà';
		}
	} else{
		$error = 'Veuillez remplir tous les champs!';
	}
	
}

include 'templates/register.php';