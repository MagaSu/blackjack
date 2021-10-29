<?php

declare(strict_types=1);

class Blackjack {
  private Player $player; // Player
  private Dealer $dealer; // Player for now
  private Deck $deck; // Deck

  public function __construct(){
    $this->deck = new Deck();
    $this->deck->shuffle();
    $this->player = new Player($this->deck);
    $this->dealer = new Dealer($this->deck);
  }

  public function getPlayer() : Player
  {
    return $this -> player;
  }
  public function getDealer() : Dealer
  {
    return $this -> dealer;
  }
  public function getDeck() : Deck
  {
    return $this -> deck;
  }

}