<?php

class User 
{
    private $name;
    private $pseudo;
    private $email;
    private $password;
    public $id;
    
        /*public function __construct($name, $pseudo, $email, $password) 
        {
            $this->name = $name;
            $this->pseudo = $pseudo;
            $this->email = $email;
            $this->password = $password;
        }*/
        public function getPseudo()
        {
            return $this->pseudo;
        }

        public function setPseudo($newPseudo)
        {
            $this->pseudo = $newPseudo;
        }
}