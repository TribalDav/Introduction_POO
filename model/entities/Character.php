<?php
//Un objet = une classe, il s'agit du modèle de l'objet (son moule en quelque sorte)
class Character {
    private $name;
    protected $hp;
    protected $atk;
    public $id;


//Pour faciliter la création des objets, on peut définir un constructeur

    /*public function __construct($name, $hp, $atk)//on déclare les paramètres qui devront être fourni à l'instanciation
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->atk = $atk;
    }*/




    //pour accéder à nos propriétés lorsqu'elles sont privés on a besoin de fonctions dédiées appelées getter et setter
    
    public function getName()
    {
        //le getter est là pour récupérer la donnée privée
        return $this->name;
    }
    public function setName($newName)
    {
        //le setter est là pour attribuer une nouvelle valeur (celle qu'on lui envoie) à une propriété 
        $this->name = $newName;
    }
    public function autoAttack($target)
    {
        $target->hp -= $this->atk;
    }
    public function __toString()
    {
        return $this->name;
    }
}