<?php

declare(strict_types=1);

require 'code/Blackjack.php';
require 'code/Card.php';
require 'code/Deck.php';
require 'code/Player.php';
require 'code/Suit.php';
require 'code/Dealer.php';

session_start();

include "code/checkMethod.php";

$game = $player = $dealer = null;
$playerScore = $dealerScore = 0;

if(!isset($_SESSION['Blackjack'])){
  $blackjack = new Blackjack();
  $_SESSION['Blackjack'] = $blackjack;
} else {
  $game = $_SESSION['Blackjack'];
  $player = $game -> getPlayer();
  $dealer = $game -> getDealer();

  $playerScore = $player -> getScore();
  $dealerScore = $dealer -> getScore();
}

if($_SERVER['REQUEST_METHOD']=='POST'){
  checkMethod($game, $player, $dealer, $playerScore, $dealerScore);
}

if(($player -> hasLost())){
  echo 'Player have lost!';
  echo 'Destroy Blackjack variable';
}

if(($dealer -> hasLost())){
  echo 'Dealer have lost!';
  echo 'Destroy Blackjack variable';

  unset($_SESSION['Blackjack']);
}

echo $playerScore;
$player -> displayCards();
echo $dealerScore;
$dealer -> displayCards();

require 'indexTemplate.php';