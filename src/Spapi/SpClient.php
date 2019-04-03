<?php

namespace Spapi;
use InvalidArgumentException;

/**
 * 
 */
class SpClient implements SpClientInterface
{
	private $spService = [
	];

	private $key;
	
	public function __construct($apiKey)
	{
		
	}

	//throw new InvalidArgumentException('Unexpected $directory value:' . gettype($directory));


}