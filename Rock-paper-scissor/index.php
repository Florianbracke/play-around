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

// Start the game
// As this game is; rather simple, one class should be sufficient





 //var_dump($opponentArray);

require 'view.php';

