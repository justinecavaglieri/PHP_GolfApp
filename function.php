<?php
require_once __DIR__.'/vendor/autoload.php';
require_once 'function/function.fn.php';

$app = new Silex\Application();
$app['debug']=true;

use Cocur\Slugify\Bridge\Silex;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


$app->get('/api/users', function (Request $request) use ($app) {

    $data = $request->request->all();
    $result = allProfil($data);

    return new Response(json_encode($result), 200, array('Content-Type' => 'application/json'));
});

$app->post('/api/users/{id}', function(Request $request) use ($app) {

    $data = $request->request->all();

    $id = $data['id'];
    $result = profil($id);

    return new Response(json_encode($result), 200, array('Content-Type' => 'application/json'));
});

$app->post('/api/login', function(Request $request) use ($app) {

    $data = $request->request->all();

    $pseudo = $data['pseudo'];
    $password = $data['password'];
    $result = userConnection($pseudo, $password);

    return new Response(json_encode($result), 200, array('Content-Type' => 'application/json'));

});

$app->post('/api/register', function(Request $request) use ($app) {

    $data = $request->request->all();

    $pseudo = $data['pseudo'];
    $password = $data['password'];
    $HCP = $data['HCP'];
    $result = userRegistration($pseudo, $password, $HCP);

    return new Response(json_encode($result), 200, array('Content-Type' => 'application/json'));

});

$app->put('/api/update/{id}', function(Request $request) use ($app) {

    $data = $request->request->all();

    $id = $data['id'];
    $pseudo = $data['pseudo'];
    $password = $data['password'];
    $HCP = $data['HCP'];
    $result = updateUser($id, $pseudo, $password, $HCP);

    return new Response(json_encode($result), 200, array('Content-Type' => 'application/json'));
});

$app->delete('/api/delete/{id}', function(Request $request) use ($app) {

    $data = $request->request->all();

    $id = $data['id'];
    $result = deleteUser($id);

    return new Response(json_encode($result), 200, array('Content-Type' => 'application/json'));
});

$app->run();

