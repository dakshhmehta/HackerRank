<?php

class Kangaroo
{
	/**
	 * Whatever the kangaroo will meet or not.
	 * @param  int $x1 Start position of Kangaroo 1
	 * @param  int $v1 Jump size of Kangaroo 1
	 * @param  int $x2 Start position of Kangaroo 2
	 * @param  int $v2 Jump size of Kangaroo 2
	 * @return string     YES/NO
	 */
    public function solve($x1, $v1, $x2, $v2)
    {
    	if(($x1 - $x2) % ($v2 - $v1) == 0 and $v1 >= $v2)
    		return 'YES';

        return 'NO';
    }
}
