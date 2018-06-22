<?php

namespace spec;

use SockMerchant;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SockMerchantSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SockMerchant::class);
    }

    public function it_can_pass_first_testcase()
    {
    	$this->solve([10, 20, 20, 10, 10, 30, 50, 10, 20])->shouldReturn(3);
    }

    public function it_can_pass_with_only_one_pair()
    {
    	$this->solve([10, 20, 20])->shouldReturn(1);
    }

    public function it_can_pass_with_one_element()
    {
    	$this->solve([10])->shouldReturn(0);
    }
}
