<?php

namespace source\Models\Game;
class Warrior extends Character
{

    private float $defense;

    public function __construct(string $name, int $life, float $mana, float $strenght, int $defense){
        parent::__construct( $name,  $life,  $mana, $strenght);
        $this->defense = $defense;
    }
    public function getDefense()
    {
        return $this->defense;
    }
    public function setDefense(float $defense)
    {
        $this->defense = $defense;
    }

    public function describe(): ?string 
    {
        return "<br>Name: {$this->getName()} - Life: {$this->getLife()} - Mana: {$this->getMana()} - Strenght: {$this->getStrenght()}<br> Atributo adicional: {$this->defense}<br> ";
    }
}