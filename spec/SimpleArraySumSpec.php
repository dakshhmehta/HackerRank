<?php

namespace spec;

use SimpleArraySum;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SimpleArraySumSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SimpleArraySum::class);
    }

    public function it_can_result_correct_sum()
    {
    	$this->solve([1,2,3,4,10,11])->shouldReturn(31);
    }
}
