<?php

class AVeryBigSum
{
    public function solve($numbers)
    {
    	$sum = 0;

    	foreach ($numbers as &$n) {
    		$sum += $n;
    	}

    	return $sum;
    }
}
