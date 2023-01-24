<?php



/* Creating the objects*/
$one=new Recipe(
	"assets/food/pizza_sticks.png",
	"Pizza Sticks",
	"These Cheesy Stuffed Pizza Sticks with just 3-ingredients come together so quickly and easily without any fuss. They’re a super fun snack and perfect for your next tailgating party, happy hour, or after school snack.",
	"6 slices soft fresh white bread,Shredded mozzarella,Pizza Sauce (homemade preferred)",
	"Oven, parchment paper or silpat lined cookie sheet"
);

$two=new Recipe(
	"assets/food/Fire_Roasted_Pizza_Biscuit_Bites.png",
	"Pizza Biscuit Bites",
	"Fire Roasted Pizza Sauce is spread on refrigerated biscuit dough and topped with mozzarella cheese for a delicious and quick dinner.",
	"1 (15 oz.) can Dei Fratelli Fire Roasted Pizza Sauce,1 (16.3 oz.) tube Refrigerated Biscuit Dough,2 (8 oz.) Mozzarella Balls, thinly sliced",
	"Oven, Nonstick baking sheet, Dei Fratelli Fire Roasted Pizza Sauce",
);

$three=new Recipe(
	"assets/food/Air_Fryer_Eggs.png",
	"Air Fryer Eggs",
	"Delicious Air Fryed Eggs for Breakfast",
	"Eggs, Garlic, Rosemary",
	"Air Fryer or Boiling Pan"
	);

$four=new Recipe(
	"assets/food/pizza.webp",
	"Chicken Pizza",
	"Whether you’re eating victory pizza after a sports game or scarfing down slices on movie night–pizza is one of life’s greatest pleasures that no one should be without. It’s a crying shame the number of people going pizza-less these days, all in an effort to cut down on carbs. Because the truth is, you don’t have to. We have options.",
	"1 Lb Chicken Thighs (boneless + skinless),2 Eggs,1 Teaspoon Kosher Salt,2 Cloves Garlic,1 Teaspoon Onion Powder,2 Teaspoon Oregano,1/4 Teaspoon Pepper,Low Carb Pizza Sauce,2 Cups Mozzarella",
	"Rimmed baking sheet, Oven, Meat thermometer"
);

$five=new Recipe(
	"assets/food/recipe-1.jpeg",
	"Grilled Beef",
	"The beef has a lot to offer: Iron for blood formation, protein for strong muscles and important B vitamins for energy metabolism. In addition, compared to typical grilled foods such as sausages, it has significantly less fat and in return, the fat it contains consists partly of omega-3 fatty acids. The proportion of these anti-inflammatory fatty acids is higher in free-range farming and organic meat because the animals are fed on grass.",
	"3 tablespoons soy sauce,1/4 cup dark brown sugar,2 tablespoons olive oil,3 teaspoons garlic paste,1 teaspoon ginger paste,2 Certified Angus Beef® brand strip steaks (about 1 pound 8 ounces total)",
	"Grill,aluminum foil"
);

$six=new Recipe(
	"assets/food/recipe-2.jpeg",
	"Greek Ribs",
	"The ribs have a lot to offer: Iron for blood formation, protein for strong muscles and important B vitamins for energy metabolism.",
	"3 pounds baby back ribs, membranes removed,½ cup finely chopped onion,¼ cup olive oil,¼ cup fresh lemon juice,¼ cup chopped fresh oregano,1 tablespoon liquid honey,5 cloves garlic",
	"resealable plastic bag,refrigerator,oven, baking sheet"
);


$seven=new Recipe(
	"assets/food/recipe-3.jpeg",
	"Vegetable Soup",
	"Delicious beef soup",
	"onions, potatoes, tomatoes,Olive oil or butter,Salt and pepper,thyme, rosemary, beef",
	"Cutting board,Knife,Pot or large saucepan,Stove or hot plate"
);

$eight=new Recipe(
	"assets/food/recipe-4.jpeg",
	"Banana Pancakes",
	"pancakes that include mashed ripe bananas as one of the main ingredients. They are often considered a healthier alternative to traditional pancakes as they use less sugar and butter",
	"1 cup all-purpose flour,1 teaspoon baking powder,1/4 teaspoon baking soda,1/4 teaspoon salt,1/4 cup sugar,1 cup milk,1 egg,1 teaspoon vanilla extract,1 ripe banana, mashed",
	"Mixing bowls,Whisk or fork,Griddle or non-stick pan,Spatula"
);

$nine=new Recipe(
	"assets/food/ugali.webp",
	"Ugali",
	"Delicious Dish made from cornmeal or maize flour and is often served with a variety of stews, soups, or vegetables. ",
	"Flour, Water",
	"Sufuria, Cooking Stick"
);

$ten=new Recipe(
	"assets/food/ham_cheese.png",
	"Ham and Cheese",
	"A classic sandwich combination that can be prepared in a variety of ways",
	"2 slices of bread (white, wheat, or your preference),2-3 slices of deli ham,2-3 slices of cheese (cheddar, Swiss, or your preference),Butter or mayonnaise,Lettuce and tomato",
    "A cutting board,A knife,A skillet or griddle"
);



$one->addItem($one);
$two->addItem($two);
$three->addItem($three);
$four->addItem($four);
$five->addItem($five);
$six->addItem($six);
$seven->addItem($seven);
$eight->addItem($eight);
$nine->addItem($nine);
$ten->addItem($ten);

?>