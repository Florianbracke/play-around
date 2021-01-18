<?php

// Require the correct variable type to be used (no auto-converting)
declare(strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();
// Load you classes
require_once 'classes/rock-paper-scissorGame.php';

function whatIsHappening() {
    
    echo '<h2>$_POST</h2>';
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
   
    echo '<h2>$_SESSION</h2>';
    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";   
}

// Start the game
// As this game is; rather simple, one class should be sufficient
$game = new battle("","",0);
$game->run();

 //var_dump($opponentArray);

require 'view.php';

