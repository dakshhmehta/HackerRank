<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use PlusMinus;

class PlusMinusSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(PlusMinus::class);
    }

    public function it_can_pass_first_testcase()
    {
        $this->solve([-4, 3, -9, 0, 4, 1])->shouldReturn("0.500000 0.333333 0.166667");
    }

    public function it_can_pass_all_zeros()
    {
        $this->solve([0,0,0])->shouldReturn("0.000000 0.000000 1.000000");
    }
}
