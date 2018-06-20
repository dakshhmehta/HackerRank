<?php

namespace spec;

use AVeryBigSum;
use PhpSpec\ObjectBehavior;

class AVeryBigSumSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(AVeryBigSum::class);
    }

    public function it_can_add_large_5_sum()
    {
        $this->solve(["1000000001", 
        	"1000000002", 
        	"1000000003", 
        	"1000000004", 
        	"1000000005"
        ])->shouldReturn(5000000015);
    }
}
