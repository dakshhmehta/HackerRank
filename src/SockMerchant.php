<?php

class SockMerchant
{
    public function solve($ar)
    {
    	$data = [];
    	foreach ($ar as &$a) {
    		if(! isset($data[$a])){
    			$data[$a] = 0;
    		}

    		$data[$a]++;
    	}

    	$c = 0;
    	foreach ($data as $a => $count) {
    		$c += floor($count/2);
    	}

    	return (int) $c;
    }
}
