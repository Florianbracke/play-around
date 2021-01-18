<?php 


class battle{
    
    public $opponentType= "";
    public $chosenType= ""; 
    public $count = 0;
    
    public function __construct($chosenType, $opponentType, $count)
    {
        if (!empty($_POST['type'])){
        $this->chosenType       = $_POST['type'];}
        
        if(!empty($_SESSION['count'])){
        $this->count            = $_SESSION['count'];}

        $this->opponentType     = $opponentType;
    }


    function run()
    { 
        $this->opponent();
        $this->reset();

        if ($this->chosenType == "grass" )
        { 
            switch ($this->opponentType) 
            {
                
                case "grass":
                    echo "player picks <strong>$this->chosenType</strong>, opponent picks <strong>$this->opponentType</strong>. <br><br> It's a tie!<br><br>";
                    $_SESSION['count'] = $this->count;
                    break;

                case "water":
                    echo "player picks <strong>$this->chosenType</strong>, opponent picks <strong> $this->opponentType</strong>. <br><br> It's a win!!<br><br>"; 
                    $_SESSION['count'] = $this->count+ 1;
                    break;

                case "fire":
                    echo "player picks <strong>$this->chosenType</strong>, opponent picks <strong>$this->opponentType</strong>. <br><br> Opponent wins...<br><br>" ;
                    $_SESSION['count'] = $this->count- 1;
                    break;
            }
        
           

        } 

        if ($this->chosenType == "water")
        { 
            switch ($this->opponentType) 
            {
                
                case "grass":
                    echo "player picks <strong>$this->chosenType</strong>, opponent picks <strong>$this->opponentType</strong>. <br><br> Opponent wins...<br><br>" ;
                    $_SESSION['count'] = $this->count- 1;
                    break;

                case "water":
                    echo "player picks <strong>$this->chosenType</strong>, opponent picks <strong>$this->opponentType</strong>. <br><br> It's a tie!<br><br>";
                    $_SESSION['count'] = $this->count;
                    break;

                case "fire":
                    echo "player picks <strong>$this->chosenType</strong>, opponent picks <strong>$this->opponentType</strong>. <br><br> It's a win!!<br><br>"; 
                    $_SESSION['count'] = $this->count+ 1;
                    break;
            }
        } 

        if ($this->chosenType == "fire")
        { 
            switch ($this->opponentType)
            {
                
                case "grass":
                    echo "player picks <strong>$this->chosenType</strong>, opponent picks <strong>$this->opponentType</strong>. <br><br> It's a win!!<br><br>"; 
                    $_SESSION['count'] = $this->count+ 1;
                    break;

                case "water":
                    echo "player picks <strong>$this->chosenType</strong>, opponent picks <strong>$this->opponentType</strong>. <br><br> Opponent wins...<br><br>" ;
                    $_SESSION['count'] = $this->count- 1;
                    break;

                case "fire":
                    echo "player picks <strong>$this->chosenType</strong>, opponent picks <strong>$this->opponentType</strong>. <br><br> It's a tie!<br><br>";
                    $_SESSION['count'] = $this->count;
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


    function reset()
    { 
        if (isset($_POST['reset']))
        {   echo "<strong> Your previous score is no more than dust in the wind... </strong> <br><br>";
            session_destroy();
            $_SESSION['count'] = 0;
        }   
    }
}


?>