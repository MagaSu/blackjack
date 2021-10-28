<?php

class Blackjack {
  private $player = new Player(); // Player
  private $dealer = new Player(); // Player for now
  private $deck; // Deck

  public function getPlayer() { //returns the `player` object

  }
  public function getDealer() { //returns the `dealer` object

  }
  public function getDeck() { //returns the `deck` object

  }

  function __construct($player){
    $this->player = $player;
  }

}