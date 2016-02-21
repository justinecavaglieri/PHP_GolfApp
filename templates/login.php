<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Golf App</title>

    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<?php
    if(isset($error) && !empty($error)){
?>
<div class="alert alert-danger alert-dismissable error">
    <?php echo $error; ?>
</div>

<?php
    }
?>

<body>
    <section>
        <div class="col-md-offset-4 col-xs-offset-1 col-md-4 col-xs-10 form">
            <form class="form-horizontal" method="POST" action="login.php">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="place">
                        <input type="text" name="pseudo" class="form-control" id="inputEmail3" placeholder="Pseudo">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label"></label>
                    <div class="place">
                        <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="place">
                      <input type="submit" value="Sign" class="btn btn-primary btn-lg btn-block">
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>