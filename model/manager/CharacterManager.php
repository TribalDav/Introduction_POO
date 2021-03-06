<?php 

require 'model\dbconnect.php';

class CharacterManager
{
    public static function getAllCharacters()
    {
        $db = dbconnect();
        $query = $db->query('SELECT * FROM CHARACTERS');
        $results = $query->fetchAll(PDO::FETCH_CLASS, 'Character');
        return $results;
    }

    public static function getCharacterById($id)
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