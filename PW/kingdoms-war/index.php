<?php

require __DIR__ . "/../source/autoload.php";

use source\Models\Game\Character;
use source\Models\Game\Thief;
use source\Models\Game\Warrior;
use source\Models\Game\Wizard;

$person1 = new Character("Rafael", 1, 2, 3);
$person2 = new Thief("Pedro", 10 ,20, 30, 40);
$person3 = new Warrior("Lucas", 12, 02, 03, 13);
$person4 = new Wizard("Murilo", 19, 39, 04, 10);


echo $person1->describe();
echo $person2->describe();
echo $person3->describe();
echo $person4->describe();