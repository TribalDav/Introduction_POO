<?php 

require 'model\dbconnect.php';

class CharacterManager
{
    public static function getAllCharacters()   // affichage de tous les personnages
  
    {
        $db = dbconnect();
        $query = $db->query('SELECT * FROM CHARACTERS');
        $results = $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Character');
        return $results;
    }

    public static function getCharacterById($id)    // affichage d'un personnage par son id 
    {
        $db = dbconnect();
        $prepare = $db->prepare('SELECT * FROM CHARACTERS WHERE id = :id');
        $prepare->execute(
            ['id'=> $id]
        );
        $prepare->setFetchMode(PDO::FETCH_CLASS, 'Character');
        $result = $prepare->fetch();
        return $result;
    }

    
}