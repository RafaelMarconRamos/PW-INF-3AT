<?php

namespace source\Models\Game;
class Wizard extends Character
{

    private float $intelligence;

    public function __construct(string $name, int $life, float $mana, float $strenght, int $intelligence){
        parent::__construct( $name,  $life,  $mana, $strenght);
        $this->intelligence = $intelligence;
    }
    public function getIntelligence()
    {
        return $this->intelligence;
    }
    public function setIntelligence(float $intelligence)
    {
        $this->intelligence = $intelligence;
    }

    public function describe(): ?string 
    {
        return "<br>Name: {$this->getName()} - Life: {$this->getLife()} - Mana: {$this->getMana()} - Strenght: {$this->getStrenght()}<br> Atributo adicional: {$this->intelligence}<br> ";
    }

}