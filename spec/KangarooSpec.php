<?php

namespace spec;

use Kangaroo;
use PhpSpec\ObjectBehavior;

class KangarooSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Kangaroo::class);
    }

    public function it_can_solve_with_YES()
    {
        $this->solve(0, 3, 4, 2)->shouldReturn('YES');
    }

    public function it_can_solve_with_NO()
    {
        $this->solve(0, 2, 5, 3)->shouldReturn('NO');
    }

    public function it_can_solve_with_smallpath()
    {
    	$this->solve(21,6,47,3)->shouldReturn('NO');
    }

    public function it_can_pass_odd_testcase()
    {
    	$this->solve(1817,9931,8417,190)->shouldReturn('NO');
    }
}
