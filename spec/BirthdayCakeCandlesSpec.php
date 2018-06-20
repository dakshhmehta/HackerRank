<?php

namespace spec;

use BirthdayCakeCandles;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BirthdayCakeCandlesSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(BirthdayCakeCandles::class);
    }

    public function it_can_blow_two_candles_with_3_height()
    {
    	$this->solve([3,2,1,3])->shouldReturn(2);
    }

    public function it_can_blow_all_candles()
    {
    	$this->solve([2,2,2])->shouldReturn(3);
    }
}
