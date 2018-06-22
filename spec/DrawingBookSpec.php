<?php

namespace spec;

use DrawingBook;
use PhpSpec\ObjectBehavior;

class DrawingBookSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(DrawingBook::class);
    }

    public function it_can_pass_0_testcase()
    {
        $this->solve(6, 2)->shouldReturn(1);
        $this->solve(6, 3)->shouldReturn(1);
    }

    public function it_can_pass_27th_testcase()
    {
        $this->solve(6, 5)->shouldReturn(1);
    }

    public function it_can_pass_flip_testcase()
    {
        $this->solve(6, 1)->shouldReturn(0);
    }

    public function it_can_go_to_4th_page()
    {
        $this->solve(10, 4)->shouldReturn(2);
    }

    public function it_can_open_1_page_book()
    {
        $this->solve(1, 1)->shouldReturn(0);
    }

    public function it_can_open_two_page_with_first_page()
    {
        $this->solve(2, 1)->shouldReturn(0);
    }

    public function it_can_pass_when_wanted_to_go_to_last_page()
    {
        $this->solve(5, 4)->shouldReturn(0);
        $this->solve(6, 4)->shouldReturn(1);
    }

    public function it_can_go_to_94th_page_in_100_pages_book()
    {
        $this->solve(100, 94)->shouldReturn(3);
    }

    public function it_can_open_mid_of_book()
    {
        $this->solve(100, 50)->shouldReturn(24);
    }
}
