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
	"Fire Roasted Pizza Sauce is spread on refrigerated biscuit dough and topped with mozzarella cheese for a delicious and quick dinner.",
	"1 (15 oz.) can Dei Fratelli Fire Roasted Pizza Sauce,1 (16.3 oz.) tube Refrigerated Biscuit Dough,2 (8 oz.) Mozzarella Balls, thinly sliced",
	"Oven, Nonstick baking sheet, Dei Fratelli Fire Roasted Pizza Sauce",
);

$three=new Recipe(
	"food/Air_Fryer_Eggs.png",
	"Air Fryer Eggs",
	"description",
	"ingredients",
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