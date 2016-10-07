<?php

class Recipe
{
  public $ingredients = array();
  public $source = "Kat";
  private $title;
  public $instructions = array();
  public $yield;
  public $tag = array();
  private $measurements = array(
    "tsp",
    "tbsp",
    "cup",
    "oz",
    "lb",
    "fl oz",
    "pint",
    "quart",
    "gallon"
  );

  public function __construct($title=null){
    $this->setTitle($title);
  }

  public function setTitle($title){
      if (empty($title)){
        $this->title = null;
      }else
      $this->title= ucwords($title);
  }
  public function getTitle(){
    return $this->title;
  }

  public function addIngredient($item, $amount = null, $measure = null){
    if ($amount != null && !is_float($amount) && !is_int($amount)) {
      exit("The amount must be a float: " .
      gettype($amount) . " $amount given");
    }
    if ($measure !=null && !in_array(strtolower($measure), $this->measurements)){
      exit("Please use valid measurement: " . implode(",", $this->measurements));

    }
      $this->ingredients[] = array(
        'item' => ucwords($item),
        'amount' => $amount,
        'measure' => strtolower($measure)
     );
  }

  public function getIngredients(){
    return $this->ingredients;
  }

  public static function listIngredients(){
   $output = "";
   foreach ($ingredients as $i) {
       $output .= $i["amount"] . " " . $i["measure"] . " " . $i["item"];
       $output .= "\n";
   }
   return $output;
}

  public function addInstruction($string){
    $this->instructions[] = $string;
  }
  public function getInstructions(){
    return $this->instructions;
  }

  public function addTag($tag){
    $this->tags[] = strtolower($tag);
  }
  public function getTags(){
    return $this->tags;
  }

  public function setYield($yield){
    $this->yield = $yield;
  }
  public function getYield(){
    return $this->yield;
  }
  public function setSource($source){
    $this->source = ucwords($source);
  }
  public function getSource(){
    return $this->source;
  }
  public function displayRecipe(){
    return $this->title . " by " . $this->source . "</br>";
  }

}


 ?>
