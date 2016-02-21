<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Golf App</title>

    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="script.js"></script>

</head>



	<?php if(isset($error) && !empty($error)){ ?>
		<div class="alert alert-danger alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<?php echo $error; ?>
		</div>
	<?php
	} ?>
<body>
<section id="login-container">
<div class="col-md-offset-4 col-xs-offset-1 col-md-4 col-xs-10 form">
	<form class="form-horizontal" method="POST" action="register.php">
		<div class="form-group">
			<input type="text" name="pseudo" placeholder="Pseudo">
		</div>
		<div class="form-group">
			<input type="password" name="password" placeholder="Password">
		</div>
		<div class="form-group">
			<input type="integer" name="HCP" placeholder="Handicap">
		</div>
		<div class="form-group">
			<div class="place">
				<input type="submit" value="Je m'inscris !" class="btn btn-primary btn-lg btn-block">
			</div>
		</div>
		<p class="account">Vous avez un compte ? <a href="login.php">Connectez-vous !</a></p>
	</form>
	</div>
</section>