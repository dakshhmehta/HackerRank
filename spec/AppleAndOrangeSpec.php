<?php

namespace spec;

use AppleAndOrange;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AppleAndOrangeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(AppleAndOrange::class);
    }
}
