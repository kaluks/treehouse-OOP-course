<?php

class Render{

    public static function listRecipes($titles){
      asort($titles);
      return implode("\n",$titles);
    }

    public static function listShopping($ingredient_list){
      ksort($ingredient_list);
      return implode("</br>", array_keys($ingredient_list));
    }

    public static function listIngredients($ingredients){
      $output = "";
      foreach ($ingredients as $i) {
          $output .= $i["amount"] . " " . $i["measure"] . " " . $i["item"];
          $output .= "</br>";
      }
      return $output;

    }
  //static makes it accessible outside the class
    public static function displayRecipe($recipe){
        $output = "";
        $output .= $recipe->getTitle() . " by " . $recipe->getSource();
        $output .= "</br>";
        $output .= implode(", ",$recipe->getTags());
        $output .= "</br>";
        $output .= self::listIngredients($recipe->getIngredients());
        $output .= "</br>";
        $output .= implode("</br>", $recipe->getInstructions());
        $output .= "</br>";
        $output .= $recipe->getYield();
        return $output;
    }
}

 ?>
