<?php

class GradingStudents
{
    public function solve($grades)
    {
    	$_grades = [];
    	foreach ($grades as &$g) {
    		$_g = $this->getNextMultiple($g);
    		if($g >= 38 and $_g - $g < 3){
    			$_grades[] = $_g;
    			continue;
    		}

    		$_grades[] = $g;
    	}

    	return $_grades;
    }

    public function getNextMultiple($n)
    {
    	$r = $n%5;

    	if($r < 3){
    		$n += 5;
    	}

    	while(($n + $r) % 5 > 0){
    		$r--;
    	}

    	return $n+$r;
    }
}
