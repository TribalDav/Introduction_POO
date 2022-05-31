<?php

class Wizard extends Character
{
    private $mana = 250;

    public function getMana()
    {
        return $this->mana;

    }

    public function setMana($newMana)
    {
        $this->mana = $newMana;

    }
}