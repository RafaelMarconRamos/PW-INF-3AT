<?php

namespace source\Models\Game;

class Character
{
    private string $name;
    private int $life;
    private float $mana;
    private float $strenght;

    public function __construct(string $name, int $life, float $mana, float $strenght)
    {
        $this->name = $name;
        $this->life = $life;
        $this->mana = $mana;
        $this->strenght = $strenght;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
    public function getLife(): ?int
    {
        return $this->life;
    }
    public function getMana(): ?string
    {
        return $this->mana;
    }
    public function getStrenght(): ?float
    {
        return $this->strenght;
    }
    public function setName(string $name): void 
    {
        $this->name = $name;
    }
    public function setLife(int $life): void
    {
        $this->life = $life;
    }
    public function setMana(float $mana): void
    {
        $this->mana = $mana;
    }
    public function setStrenght(float $strenght): void
    {
         $this->strenght = $strenght;
    }

    public function describe(): ?string 
    {
        return "Name: {$this->name} - Life: {$this->life} - Mana: {$this->mana} - Strenght: {$this->strenght} <br>";
    }
}