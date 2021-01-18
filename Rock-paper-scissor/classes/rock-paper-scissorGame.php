<?php 


class battle{
    //public $opponentArray= array("grass", "water", "fire");
    //public $chosenType;
    public $opponentType;
    public $chosenType; 
    

    
    //public $opponentType = $opponentArray[rand(1,3)];
    
    public function __construct($chosenType, $opponentType)
    {
        
        
        if (!empty($_POST['type'])) {
        $this->chosenType = $_POST['type'];
        } 
        $this->opponentType = $opponentType;
    }

    function battleSwitch()
    {                                                           echo $this->chosenType;
        if ($this->chosenType == "grass")
        { echo "is altijd groener aan den overkant";
            switch ($this->opponentType) {
                
                case "grass":
                    echo "tie"; 
                    break;

                case "water":
                    echo "win"; 
                    break;

                case "fire":
                    echo "lose"; 
                    break;
            }
        } 

        if ($this->chosenType == "water")
        { echo " is voor de vissen";
            switch ($this->opponentType) {
                
                case "grass":
                    echo "lose"; 
                    break;

                case "water":
                    echo "tie"; 
                    break;

                case "fire":
                    echo "win"; 
                    break;
            }
        } 

        if ($this->chosenType == "fire")
        { echo " en vlam";
            switch ($this->opponentType) {
                
                case "grass":
                    echo "win"; 
                    break;

                case "water":
                    echo "lose"; 
                    break;

                case "fire":
                    echo "tie"; 
                    break;
            }
        } 
    }

    

}

    $game = new battle($opponentType, $chosenType);

    $game->battleSwitch();

?>