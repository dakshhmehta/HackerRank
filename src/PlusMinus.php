<?php

class PlusMinus
{
    public function solve($arr)
    {
    	$positive = 0;
    	$negetive = 0;
    	$zero = 0;
    	$total = count($arr);

    	foreach ($arr as &$n) {
    		if($n == 0){
    			$zero++;
    			continue;
    		}

    		if($n > 0){
    			$positive++;
    			continue;
    		}

    		if($n < 0){
    			$negetive++;
    			continue;
    		}
    	}

    	return sprintf("%.6f %.6f %.6f", ($positive/$total), ($negetive/$total), ($zero/$total));
    }
}
