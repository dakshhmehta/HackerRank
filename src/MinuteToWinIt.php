<?php

class MinuteToWinIt
{
    public function solve($a, $k)
    {
        $min = count($a);
        for ($i = 0; $i < count($a); $i++) {
            $bad     = 0;
            $correct = $a[$i];
            $x       = ($i) * $k;

            $correct -= $x;
            for ($j = 0; $j < count($a); $j++) {
                if ($a[$j] != $correct) {
                    $bad++;
                }
                $correct += $k;
                if($bad >= $min){
                    break;
                }
            }

            if ($bad < $min) {
                $min = $bad;
            }
        }

        return $min;
    }
}
