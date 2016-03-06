
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Golf App</title>

    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery-1.12.1.min.js"></script>

</head>

<script>
    var url = 'http://localhost:8888/PHP_GolfApp/function.php';
    var id = 1;

    $.ajax({
            method: "GET",
            url: url + "/api/users",
            data: {},
            dataType : "json",
            contentType: "application/json; charset=utf-8"
        })
        .done(function( msg ) {
            $("#test").html(msg);
            console.log(msg);
        });

    $.ajax({
            method: "GET",
            url: url + "/api/users/1",
            data: "id=" + id,
            dataType : "json",
            contentType: "application/json; charset=utf-8"
        })
        .done(function( msg ) {
            $("#test").html(msg);
            console.log(msg);
        });

    $.ajax({

            method: "POST",
            url: url + "/api/login",
            data: "pseudo=" + 'justine' + "password=" + 'justine',
            type: "json"
        })
        .done(function( msg ) {
            $("#test").html(msg);
            console.log(msg);
        });

    $.ajax({

            method: "POST",
            url: url + "/api/register",
            data: {pseudo: 'test', password: 'test', HCP: '13'},
            type: "json"
        })
        .done(function( msg ) {
            $("#test").html(msg);
            console.log(msg);
        });



</script>

<body>
<section>
    <div id="test"> coucou</div>
</section>
</body>

</html>