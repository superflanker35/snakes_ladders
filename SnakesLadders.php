<?php

require_once('Dice.php');

class SnakesLadders
{
	private $dice;
	
	/**
	* constructs the SnakesLadders class object
	* 
	* @params null
	*/
	
	public function __construct()
	{
		
	}
	
    /**
    * Runs the snakes and ladders game iterations, outputting each in command line format
    *
    * @params null
    * @return true
    */
    
	public function run()
	{
		$this->dice = new Dice();
		$i = 0;
		while( $i!=100 ){
			$steps = $this->dice->rollDice();
			if(!($i > 96 && $i <= 99 && $i + $steps != 100) && !($i > 94 && $i <= 99 && $i + $steps > 100))
			{
				$i = $i + $steps;
			}
			
			if($i % 9 == 0)
			{
				$i = $i - 3;
				$positionVerdict = "snake".$i;
								
			}else if($i == 25 || $i == 55){
				$i = $i + 10;
				$positionVerdict = "ladder".$i;
			}else{
				$positionVerdict = $i;
				
			}
			print $steps."-".$positionVerdict."\n";
		}
		return true;
	}
}
