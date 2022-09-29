<?php

require 'model\dbconnect.php';

class UserManager
{
    public static function getUserInfosByPseudo($pseudo)
    {
        $db = dbconnect();
        $query = $db->query("SELECT * FROM USERS WHERE pseudo = '$pseudo'");
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

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
    public static function addCharacterByUser($name, $hp, $atk, $picture, $userId)
    {
        $db = dbconnect();
        $query = $db->prepare('UPDATE CHARACTERS SET name = :name, hp = :hp, atk = :atk, picture = :picture WHERE user_id = :user_id');
        $query->bindParam(':name', $name);
        $query->bindParam(':hp', $hp);
        $query->bindParam(':atk', $atk);
        $query->bindParam(':picture', $picture);
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