<?php

class Dice
{
		
	private $sides;
	
	
	/**
	* constructs the Dice class object, which can have any amount of sides
	* 
	* @param $sides integer
	*/
	
	public function __construct( $sides = 6 )
	{
		$this->sides = $sides;
	}	
	
	/**
	* riddles an integer between-including 1 and the amount of sides
	* 
	* @param null
	* @return $result integer 
	*/
			
	public function rollDice()
	{
		$result = rand( 1,$this->sides );
		return $result;
	}
			
}
