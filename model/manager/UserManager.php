<?php

require 'model\dbconnect.php';

class UserManager
{
    // affichage d'un utilisateur par son pseudo
    public static function getUserInfosByPseudo($pseudo)
    {
        $db = dbconnect();
        $query = $db->query("SELECT * FROM USERS WHERE pseudo = '$pseudo'");
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
// enregistrement nouvel utilisateur
    public static function register($name, $pseudo, $mail, $password)
    {
        $db = dbconnect();
        $query = $db->prepare("INSERT INTO USERS (name, pseudo, mail, password) VALUES (:name, :pseudo, :mail, :password)");
        $query->execute([
            'name' => $name,
            'pseudo' => $pseudo,
            'mail' => $mail,
            'password' => $password
            ]);
    }

    // ajout d'entités par utilisateur connecté
    public static function addCharacterByUser($name, $hp, $atk, $userId)
    {
        $db = dbconnect();
        $query = $db->prepare('INSERT INTO CHARACTERS VALUES (null, :name, :hp, :atk, :user_id)');
        $query->bindParam(':name', $name);
        $query->bindParam(':hp', $hp);
        $query->bindParam(':atk', $atk);
        $query->bindParam(':user_id', $userId);
        $query->execute();

    }
    
    // suppression d'entités par utilisateur connecté
    public static function deleteCharacterById($id)
    {
        $db = dbconnect();
        $query = $db->prepare('DELETE FROM CHARACTERS WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();
    }
}