<?php

namespace spec;

use MiniMaxSum;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MiniMaxSumSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MiniMaxSum::class);
    }

    public function it_can_add_5_numbers()
    {
        $this->solve([1,2,3,4,5])->shouldReturn("10 14");
    }

    public function it_can_add_3_numbers()
    {
        $this->solve([1,5,7])->shouldReturn("6 12");
    }
}
