<?php

declare(strict_types=1);

class Dealer extends Player
{
  private const MIN_DEALER = 15;

  public function hit(Deck $deck) : void {
    if( $this -> getScore() < self::MIN_DEALER)  parent::hit($deck);
  }
}