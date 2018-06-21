<?php

namespace spec;

use WhichSection;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class WhichSectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(WhichSection::class);
    }

    public function it_can_pass_first_testcase()
    {
    	$this->solve(470, 143, [11, 24, 420, 6, 9])->shouldReturn(3);
    }

    public function it_can_pass_first_student_testcase()
    {
    	$this->solve(470, 1, [11, 24, 420, 6, 9])->shouldReturn(1);
    	$this->solve(470, 7, [11, 24, 420, 6, 9])->shouldReturn(1);
    	$this->solve(470, 11, [11, 24, 420, 6, 9])->shouldReturn(1);
    }

    public function it_can_pass_as_last_student_testcase()
    {
    	$this->solve(470, 470, [11, 24, 420, 6, 9])->shouldReturn(5);
    }
}
