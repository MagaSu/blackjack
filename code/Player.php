<?php

class Player {
  private $cards = [];
  private $lost = false;

  private const BJ = 21;
  private const START_CARDS = 2;

  public function __construct(Deck $deck){
    for ($i = 0; $i < 2; $i++){
      $this->cards[] = $deck->drawCard();
    }
  }

  public function hit(Deck $deck) : void {
    $this -> cards[] = $deck -> drawCard();

    if ($this -> getScore() > self::BJ) $this -> lost = true;
    else $this -> lost = false;
  }

  public function surrender(){
    return $this -> lost = true;
  }

  public function getScore() : int {
    $cards = $this -> cards;
    $cardsValue = [];

    foreach ($cards as $key) {
      array_push($cardsValue, $key->getValue());
    }

    $score = array_reduce($cardsValue, function($carry, $value){
      $carry += $value;
      return $carry;
    });

    return $score;
  }
  public function hasLost() : bool {
    return $this -> lost;
  }

  public function displayCards() {
    foreach($this -> cards as $card) {
        echo $card->getUnicodeCharacter(true);
    }
}
}


