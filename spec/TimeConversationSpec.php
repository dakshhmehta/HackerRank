<?php

namespace spec;

use TimeConversation;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TimeConversationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(TimeConversation::class);
    }

    public function it_can_solve_PM_correct_testcase()
    {
    	$this->solve("07:05:45PM")->shouldReturn("19:05:45");
    }

    public function it_can_solve_AM_correct_testcase()
    {
    	$this->solve("07:05:45AM")->shouldReturn("07:05:45");
    }

    public function it_can_validate_noon()
    {
    	$this->solve("12:00:00PM")->shouldReturn("12:00:00");
    }

    public function it_can_validate_midnight()
    {
    	$this->solve("12:00:00AM")->shouldReturn("00:00:00");
    }
}
