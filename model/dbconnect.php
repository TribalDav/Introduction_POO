<?php

function dbconnect(){
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=introduction_poo', 'root', '');
        return $dbh;
    }catch (PDOException $e){
        print "Erreur !:" . $e->getMessage() . "<br/>";
        die();
    }
}