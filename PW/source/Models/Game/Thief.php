<?php

namespace source\Models\Game;
class Thief extends Character
{

    private float $agility;

    public function __construct(string $name, int $life, float $mana, float $strenght, int $agility){
        parent::__construct( $name,  $life,  $mana, $strenght);
        $this->agility = $agility;
    }
    public function getAgility()
    {
        return $this->agility;
    }
    public function setAgility(float $agility)
    {
        $this->agility = $agility;
    }
        public function describe(): ?string 
    {
        return "<br>Name: {$this->getName()} - Life: {$this->getLife()} - Mana: {$this->getMana()} - Strenght: {$this->getStrenght()}<br> Atributo adicional: {$this->agility}<br> ";
    }
}