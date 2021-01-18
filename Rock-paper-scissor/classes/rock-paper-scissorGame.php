<?php 

    

class battle{
    
    public $opponentType;
    public $chosenType; 
    
    public function __construct($chosenType, $opponentType)
    {
        if (!empty($_POST['type'])) {
        $this->chosenType = $_POST['type'];}
        $this->opponentType = $opponentType;
    }

    function run()
    { 
        
        //functions
        $this->opponent();

        if ($this->chosenType == "grass")
        { 
            switch ($this->opponentType) {
                
                case "grass":
                    echo "player picks $this->chosenType, opponent picks $this->opponentType. <br><br> It's a tie!<br><br>"; 
                    break;

                case "water":
                    echo "player picks $this->chosenType, opponent picks $this->opponentType. <br><br> It's a win!!<br><br>"; 
                    break;

                case "fire":
                    echo "player picks $this->chosenType, opponent picks $this->opponentType. <br><br> Opponent wins...<br><br>" ; 
                    break;
            }
        } 

        if ($this->chosenType == "water")
        { 
            switch ($this->opponentType) {
                
                case "grass":
                    echo "player picks $this->chosenType, opponent picks $this->opponentType. <br><br> Opponent wins...<br><br>" ;  
                    break;

                case "water":
                    echo "player picks $this->chosenType, opponent picks $this->opponentType. <br><br> It's a tie!<br><br>";  
                    break;

                case "fire":
                    echo "player picks $this->chosenType, opponent picks $this->opponentType. <br><br> It's a win!!<br><br>"; 
                    break;
            }
        } 

        if ($this->chosenType == "fire")
        { 
            switch ($this->opponentType) {
                
                case "grass":
                    echo "player picks $this->chosenType, opponent picks $this->opponentType. <br><br> It's a win!!<br><br>"; 
                    break;

                case "water":
                    echo "player picks $this->chosenType, opponent picks $this->opponentType. <br><br> Opponent wins...<br><br>" ;  
                    break;

                case "fire":
                    echo "player picks $this->chosenType, opponent picks $this->opponentType. <br><br> It's a tie!<br><br>";  
                    break;
            }
        } 
    }

    function opponent()
    {
        $randomNumber = rand(1,3);
        
        switch ($randomNumber)
        {
            case 1: 
                $this->opponentType = "grass";
                break;

            case 2: 
                $this->opponentType = "water";
                break;

            case 3: 
                $this->opponentType = "fire";
                break;
        }
    }
    
    function playerPick()
    {
        echo "teietjes";
    }

}




?>