<?php 
function userConnection(PDO $db, $pseudo, $password){
    $sql = " SELECT * FROM golf_users WHERE pseudo = :pseudo AND password = :password ";
    $req = $db->prepare($sql);
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


function userRegistration(PDO $db, $pseudo, $password, $HCP){
    $verifPseudo = isPseudoAvailable($db, $pseudo);
    if($verifPseudo == true){
        $sql = "INSERT INTO golf_users SET pseudo = :psd, password = :pass, HCP = :HCP";
        $req = $db->prepare($sql);
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

function isPseudoAvailable(PDO $db, $pseudo){
    $sql = "SELECT COUNT(*) AS count FROM golf_users WHERE pseudo = :psd";
    $req = $db->prepare($sql);
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
