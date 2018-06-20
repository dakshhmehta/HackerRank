<?php

class MiniMaxSum
{
    public function solve($numbers)
    {
        $min = -1;
        $max = -1;

        for ($i=0; $i < count($numbers); $i++) { 
        	$sum = 0;
        	for ($j=0; $j < count($numbers); $j++) { 
        		if($j == $i) continue;

        		$sum += $numbers[$j];
        	}

        	if($min == -1 and $max == -1){
        		$min = $sum;
        		$max = $sum;
        	}

        	if($sum < $min){
        		$min = $sum;
        	}
        	if($sum > $max){
        		$max = $sum;
        	}
        }

        return $min.' '.$max;
    }
}
