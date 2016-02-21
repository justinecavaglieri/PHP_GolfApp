<?php
//nécessaire pour l'utilisation/modification/suppression des sessions
session_start();
//on nettoie la session
session_unset();
//on détruit la session
session_destroy();
//on redirige sur l'index
header('Location: login.php');