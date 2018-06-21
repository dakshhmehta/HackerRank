<?php

class TimeConversation
{
    public function solve($time)
    {
        $_time = str_split($time);

        $n = ($_time[0] . $_time[1]);
        if (strpos($time, 'PM') !== false) {
            if ($n != 12) {
                $n += 12;
            }
        } elseif ($n == 12) {
            $n = '00';
        }

        return $n . implode('', array_splice($_time, 2, count($_time) - 4));
    }
}
