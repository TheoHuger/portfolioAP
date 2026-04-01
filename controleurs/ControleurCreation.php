<?php
if(!isset($_REQUEST['action'])){
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action){
    case "creation":
        include 'includes/v-creation.php';
        break;
    case "valid_compte":
        $login = htmlspecialchars($_POST["login"]);
        $mdp = htmlspecialchars(hash('sha512',$_POST["mdp"]));
        $mdp_clair = htmlspecialchars($_POST["mdp"]);
        $verif = htmlspecialchars($_POST["verif"]);

        if($mdp_clair != $verif){
            echo "<script type='text/javascript'>alert('Erreur : Les mots de passe sont différents !');</script>";
            include 'includes/v-creation.php';
            break;
        }
        $existe = PdoUtilisateur::loginExiste($login);
        if($existe == true){
            echo "<script type='text/javascript'>alert('Erreur : Ce login est déjà pris !');</script>";
            include 'includes/v-creation.php';
            break;
        }else{
            PdoUtilisateur::creerUtilisateur($login, $mdp);
            echo "<script type='text/javascript'>alert('Compte créé avec succès !');</script>";
            header('Location: index.php');
        }break;
}?>