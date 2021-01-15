<?php

class GuessingGame
{
    public $maxGuesses;
    public $secretNumber;
    public $count;
    
    // TODO: set a default amount of max guesses
    public function __construct(int $maxGuesses)
    {
        // We ask for the max guesses when someone creates a game
        // Allowing your settings to be chosen like this, will bring a lot of flexibility
        $this->maxGuesses = $maxGuesses;
            if (!empty($_SESSION['count'])){
                $this->count = $_SESSION['count'];
            }
            if (!empty($_SESSION['secretNumber'])){
                $this->secretNumber = $_SESSION['secretNumber'];
            }
    }

    public function run()
    {
        // This function functions as your game "engine"
        // It will run every time, check what needs to happen and run the according functions (or even create other classes)

        // TODO: check if a secret number has been generated yet    
        // TODO: check if the player has submitted a guess
        // --> if not, generate one and store it in the session (so it can be kept when the user submits the form)

        if(empty($this->secretNumber))
        {

            $this->secretNumber = rand(1,10);

            $_SESSION['secretNumber'] = $this->secretNumber;
}
            //$_SESSION["maxguesses"] = $this->maxGuesses = $maxGuesses;

            if (empty($_POST['guess'])) 
            {
                echo "make a guess between 1 and 10";
            } 
            else if (!empty($_POST['guess'])) 
            {
                if ($_POST['guess'] == $this->secretNumber)
                {
                    $this->playerWins(); 
                } 
                else if ($_POST['guess'] != $this->secretNumber)
                {
                    $this->playerLoses();
                }
            }
        
    }
        // --> if so, check if the player won (run the related function) or not (give a hint if the number was higher/lower or run playerLoses if all guesses are used).
        // TODO as an extra: if a reset button was clicked, use the reset function to set up a new game
    

    public function playerWins()
    {// TODO: show a winner message (mention how many tries were needed)

        
        echo "<br> you won!";
        echo "the secret number was $this->secretNumber";
        echo "<br> <br>";
        session_destroy();
    }

    public function playerLoses()
    {// TODO: show a lost message (mention the secret number)
        
        $_SESSION['count'] = $this->count+ 1;

            echo $this->count;
                if ($this->count == 2) {
                  session_destroy();
                }
            

        echo "<br> you lose!";
        echo "the secret number was $this->secretNumber";
        echo "<br> <br>";
     
    }

    public function reset()
    {// TODO: Generate a new secret number and overwrite the previous one
       
    }
}
