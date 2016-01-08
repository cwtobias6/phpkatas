<?php

//Create a program that returns all of the prime numbers for a given number

class PrimeFactors {


	public function generate($number) 
	{

		$primes = [];
		

		for ($candidate = 2; $number > 1; $candidate++)
		{

			while ($number % $candidate == 0) 
			{

				$primes[] = $candidate;

				$number /= $candidate;
			}

		}

		return $primes;

	}


}