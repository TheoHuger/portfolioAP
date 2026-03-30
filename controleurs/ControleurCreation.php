<?php
if(!isset($_REQUEST['action'])){
    $_REQUEST['action'] = 'accueil';
}
$action = htmlspecialchars($_REQUEST["action"]);

switch ($action){
    case "creation":
        include 'includes/v-creation.php';
        break;
    case "valid_connexion":
        $login = htmlspecialchars($_POST["login"]);
        $mdp = htmlspecialchars(hash('sha512',$_POST["mdp"]));
        
        $result = PdoUtilisateur::getUtilisateur($login, $mdp);
        if($result){
            $_SESSION['login']=$result[0]["login"];
            header('Location: index.php');
        }else{
            echo "<script type='text/javascript'>
            alert('Login ou mot de passe incorrect!');
            </script>";
            session_destroy();
            include 'includes/v-connexion.php';
        }break;
    case "se_deconnecter":
        session_destroy();
        header('Location: index.php');
        break;
}?>