<?php

namespace spec;

use MinuteToWinIt;
use PhpSpec\ObjectBehavior;

class MinuteToWinItSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(MinuteToWinIt::class);
    }

    public function it_can_pass_first_testcase()
    {
        $this->solve([1, 2, 5, 7, 9, 85], 2)
            ->shouldReturn(2);
    }

    public function it_can_pass_all_correct_testcase()
    {
        $this->solve([1, 3, 5, 7, 9, 11], 2)
            ->shouldReturn(0);
    }

    public function it_can_corner_testcase()
    {
        $this->solve([64, 100, 83, 108, 17], 4)
            ->shouldReturn(3);
    }

    public function it_can_pass_another()
    {
        $this->solve([1, 11, 13, 15, 17], 2)
            ->shouldReturn(1);
    }

    // public function it_can_pass_with_array_rand_generator()
    // {
    //     $ar = [];
    //     $n = rand(2,5);
    //     for($i = 0; $i < 5; $i++){
    //         $ar[] = rand(2, 100);
    //     }

    //     var_dump($ar);
    //     var_dump($n);

    //     $this->solve($ar, $n)->shouldReturn(1);
    // }
}
