<?php
//les valeurs prisent du formulaire
//$nom = $_POST["nom"];
//$email = $_POST["email"];
//$telephone = $_POST["telephone"];

function connectDB()
{
    //à modifier par rapport à sa BDD
    $username = 'root';
    $mdp = '';
    $host = 'localhost';
    $dbname = 'contacts_db';
    try{
        //Création de la connexion PDO
        $base = new PDO('mysql:host='.$host.';dbname=' . $dbname, $username, $mdp);
        return $base;
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
        return false;
    }
}
