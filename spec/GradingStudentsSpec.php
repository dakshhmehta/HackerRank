<?php

namespace spec;

use GradingStudents;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GradingStudentsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(GradingStudents::class);
    }

    public function it_can_return_multiple_of_33()
    {
    	$this->getNextMultiple(33)->shouldReturn(35);
    }

    public function it_can_return_multiple_of_40()
    {
    	$this->getNextMultiple(40)->shouldReturn(45);
    }

    public function it_can_return_multiple_of_71()
    {
    	$this->getNextMultiple(71)->shouldReturn(75);
    }

    public function it_can_pass_first_testcase()
    {
    	$this->solve([73, 67, 38, 33])->shouldReturn([75, 67, 40, 33]);
    }

}
