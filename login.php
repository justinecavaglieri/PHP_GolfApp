<?php
session_start();

require('config/config.php');
require('function/function.fn.php');

if(isset($_POST) && !empty($_POST)){
	$connect = userConnection($db,$_POST['pseudo'],$_POST['password']);
	if($connect == true){
		header('Location: index.php');
	} else{
		$error = 'Username / password incorrect';
	}     
}

include 'templates/login.php';