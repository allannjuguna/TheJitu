<?php



/* Creating the objects*/
$one=new Recipe(
	"food/pizza_sticks.png",
	"Pizza Sticks",
	"description",
	"ingredients",
	"cooking equipment"
);

$two=new Recipe(
	"food/Fire_Roasted_Pizza_Biscuit_Bites.png",
	"Pizza Biscuit Bites",
	"description",
	"ingredients",
	"cooking equipment"
);

$three=new Recipe(
	"food/Air_Fryer_Eggs.png",
	"Air Fryer Eggs",
	"description","ingredients",
	"cooking equipment"
	);

$four=new Recipe(
	"food/Air_Fryer_Eggs.png",
	"four_title",
	"description",
	"ingredients",
	"cooking equipment"
);


$one->addItem($one);
$two->addItem($two);
$three->addItem($three);
$four->addItem($four);

?>