<?php

class WhichSection
{
    public function solve($n, $k, $a)
    {
        $sum = 0;
        $ans = 0;

        while ($sum < $k) {
            $sum += $a[$ans];
            $ans++;
        }
        return $ans;
    }
}
