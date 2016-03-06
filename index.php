<?php
session_start();
?>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Golf App</title>

	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="js/jquery-1.12.1.min.js"></script>

</head>


<?php

require('config/config.php');
require('function/function.fn.php');

//si l'utilisateur est connecté on affiche un message
	if(isset($_SESSION) && !empty($_SESSION)){
		echo "test réussi";
    }
//sinon on l'envoie sur la page de login
	else{
		header('Location: login.php');
	}


?>
<script>
    var url = 'http://localhost:8888/PHP_GolfApp/function.php';
    var id = 6;
    var pass = 'admin';
    var pseudo = 'fab';
    var HCP = 16;

$.ajax({
    method: "GET",
    url: url + "/api/users",
    data: {},
    dataType : "json"
    })
  .done(function( msg ) {
		$("#test").html(msg);
		console.log(msg);
});

$.ajax({
	method: "POST",
	url: url + "/api/users/{id}",
	data: {id: id},
    dataType : "json"
    })
	.done(function( msg ) {
		$("#test1").html(msg['pseudo'] + msg['password'] + msg['HCP']);
		console.log(msg);
});

/*$.ajax({

	method: "POST",
	url: url + "/api/login",
	data: {pseudo: pseudo ,  password: pass},
        type: "json"
})
	.done(function( msg ) {
		$("#test").html(msg);
		console.log(msg);
});*/

$.ajax({

    method: "POST",
    url: url + "/api/register",
    data: {pseudo: pseudo ,  password: pass, HCP: HCP},
    type: "json"
})
    .done(function( msg ) {
        $("#test").html(msg['pseudo'] + msg['password'] + msg['HCP'] );
        console.log(msg);
});
/*$.ajax({
    method: "PUT",
    url: url + "/api/update/{id}",
    data: {id: id, pseudo: pseudo , password: pass, HCP: HCP},
    dataType : "json"
})
    .done(function( msg ) {
        $("#test").html(msg);
        console.log(msg);
    });

$.ajax({
    method: "DELETE",
    url: url + "/api/delete/{id}",
    data: {id: id},
    dataType : "json"
})
    .done(function( msg ) {
        $("#test").html(msg);
        console.log(msg);
    });*/

</script>

<body>
<section>
	<div id="test"> coucou</div>
	<div id="test1"> coucou</div>
</section>
</body>

</html>