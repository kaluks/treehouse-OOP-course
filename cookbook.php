<?php
include "classes/recipe.php";
include "classes/render.php";

$recipe1 = new Recipe("cannoli");
$recipe1 ->setSource = "Grandma";

$recipe1->addIngredient("flour", 1, "cup");
$recipe1->addIngredient("cream", .5, "cup");

$recipe2 = new Recipe("Gharam masala");

$recipe2->setSource = "Mama Khiani";

$recipe1->addInstruction("Make the cannoli. ");
$recipe1->addInstruction("Eat and enjoy! ");

$recipe1->addTag("Breakfast");
$recipe1->addTag("Dessert");

$recipe1->setYield("6 servings");

echo Render::displayRecipe($recipe1);
 ?>
