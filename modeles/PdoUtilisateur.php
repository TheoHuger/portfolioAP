<?php

class PdoUtilisateur{
        public static function getUtilisateur($login, $mdp){
            //on récupère une instance de la classe Pdo_Connexion_bdexemple qui établit une connexion à la base de données
            $objPdo = PdoConnexion::getPdoConnexion();
            //Définition de la requête SQL à exec
            $req = "SELECT login FROM utilisateur where login = '$login' and mdp = '$mdp' ";

            //demande lexec de la requete
            $res = $objPdo->query($req);

            //on recupere le resultat de la requete
            $utilisateur = $res->fetchAll();

            //ferme le curseur
            $res->closeCursor();

            //retourne un tableau contenant toutes les lignes du jeu denregistrement ou rien
            return $utilisateur;
        }
}