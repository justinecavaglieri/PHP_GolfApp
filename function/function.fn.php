<?php

function allProfil()
{
    $bdd = new PDO('mysql:host=localhost;dbname=GolfApp', 'root', 'root');
    $sql = "SELECT * FROM golf_users";

    $req = $bdd->prepare($sql);
    $req->execute();

    //$result = $req->fetchAll(PDO::FETCH_ASSOC);
    $response = [];
    while($rows = $req->fetch(PDO::FETCH_ASSOC))
    {
        $response['pseudo'] = $rows['pseudo'];
        $response['password'] = $rows['password'];
        $response['pseudo'] = $rows['pseudo'];
        $response['pseudo'] = $rows['pseudo'];
        $response['pseudo'] = $rows['pseudo'];
        $response['pseudo'] = $rows['pseudo'];
    }

    return $response;
}

function profil($id){
    $bdd = new PDO('mysql:host=localhost;dbname=GolfApp', 'root', 'root');
    $sql = "SELECT * FROM golf_users WHERE id = :id";

    $req = $bdd->prepare($sql);
    $req->execute(array(
        ':id' => $id
    ));

    $result = $req->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function userConnection($pseudo, $password){
    $bdd = new PDO('mysql:host=localhost;dbname=GolfApp', 'root', 'root');

    $sql = " SELECT * FROM golf_users WHERE pseudo = :pseudo AND password = :password ";
    $req = $bdd->prepare($sql);
    $req->execute(array(
        ':pseudo' => $pseudo,
        ':password' => $password
    ));
    $result = $req->fetch(PDO::FETCH_ASSOC);
    if($result == true){     
        $_SESSION['id'] = $result['id'];
        $_SESSION['pseudo'] = $result['pseudo'];
        $_SESSION['password'] = $result['password'];
        return true;

    }
    else{
        return false;
    }
}


function userRegistration($pseudo, $password, $HCP){
    $bdd = new PDO('mysql:host=localhost;dbname=GolfApp', 'root', 'root');

    $verifPseudo = isPseudoAvailable($pseudo);

    if($verifPseudo == true){
        $sql = "INSERT INTO golf_users SET pseudo = :psd, password = :pass, HCP = :HCP";

        $req = $bdd->prepare($sql);
        $req->execute(array(
            ':psd' => $pseudo,
            ':pass' => $password,
            ':HCP' => $HCP
            ));
        return true;
    } else{
        return false;
    }
}

function isPseudoAvailable($pseudo){

    $bdd = new PDO('mysql:host=localhost;dbname=GolfApp', 'root', 'root');

    $sql = "SELECT COUNT(*) AS count FROM golf_users WHERE pseudo = :psd";
    $req = $bdd->prepare($sql);
    $req->execute(array(
            ':psd' => $pseudo
        ));
    $result = $req->fetch();
    if($result['count'] > 0){
        return false;
    }else{
        return true;
    }
}

function updateUser($id, $pseudo, $password, $HCP){

    $bdd = new PDO('mysql:host=localhost;dbname=GolfApp', 'root', 'root');

    $sql = "UPDATE golf_users SET pseudo = :pseudo, password= :pass, HCP = :HCP WHERE id = :id ";

    $req = $bdd->prepare($sql);
    $req->execute(array(
        ':pass' => $password,
        ':pseudo' => $pseudo,
        ':HCP' => $HCP,
        ':id' => $id
    ));
    return true;

}

function deleteUser ($id){

    $bdd = new PDO('mysql:host=localhost;dbname=GolfApp', 'root', 'root');

    $sql = "DELETE FROM golf_users WHERE id = :id";

    $req = $bdd->prepare($sql);
    $req->execute(array(
        ':id' => $id
    ));
    return true;


}