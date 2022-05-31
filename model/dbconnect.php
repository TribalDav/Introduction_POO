<?php

function dbconnect(){
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=introduction_POO', 'root', '');
        return $dbh;
    }catch (PDOException $e){
        print "Erreur !:" . $e->getMessage() . "<br/>";
        die();
    }
}