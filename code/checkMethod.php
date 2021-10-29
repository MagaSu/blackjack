<?php 
declare(strict_types=1);

function checkMethod(&$game, &$player, &$dealer, &$playerScore, &$dealerScore) {
    if (isset($_POST['hit'])) {
        $player -> hit($game -> getDeck());
        $playerScore = $player -> getScore();
    }

    if (isset($_POST['stand'])) {
        $dealer -> hit($game -> getDeck());
        $dealerScore = $dealer -> getScore();
    }

    if (isset($_POST['surrender'])) {
        $player -> surrender();
        echo "You have lost!";
    }
}