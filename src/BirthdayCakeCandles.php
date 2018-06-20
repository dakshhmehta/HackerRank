<?php

class BirthdayCakeCandles
{
    public function solve($ar)
    {
    	$max = max($ar);

    	$count = 0;
    	foreach ($ar as &$n) {
    		if($n == $max)
    			$count++;
    	}

    	return $count;
    }
}
