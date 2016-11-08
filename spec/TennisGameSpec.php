<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Player;
use TennisGame;

class TennisGameSpec extends ObjectBehavior
{
    public function let()
    {
        $this->player1 = new Player(0, 'Maria');
        $this->player2 = new Player(0, 'Pepe');
        $this->beConstructedWith($this->player1, $this->player2);
    }

    public function it_is_initalizable()
    {
        $this->ShouldHaveType(TennisGame::class);
    }

    public function it_score_0_iguals()
    {
        $this->player->winpoint();
        $this->score()->shouldReturn('0', 'Equals');
    }

    public function it_score_15_0()
    {
        $this->player->winpoint();
        $this->score()->shouldReturn('15 - 0');
    }

    public function it_score_0_15()
    {
        $this->player->winpoint();
        $this->score()->shouldReturn('0 - 15');
    }

    public function it_score_30_0()
    {
        $this->player->winpoint();
        $this->score()->shouldReturn('30 - 0');
    }

    public function it_score_0_30()
    {
        $this->player->winpoint();
        $this->score()->shouldReturn('0 - 30');
    }

    public function it_score_40_0()
    {
        $this->player->winpoint();
        $this->score()->shouldReturn('40 - 0');
    }

    public function it_score_0_40()
    {
        $this->player->winpoint();
        $this->score()->shouldReturn('0 - 40');
    }

    public function it_score_15_15()
    {
        $this->player->winpoint();
        $this->score()->shouldReturn('15', 'Equals');
    }

    public function it_score_30_30()
    {
        $this->player->winpoint();
        $this->score()->shouldReturn('30', 'Equals');
    }

    public function it_score_40_40()
    {
        $this->player->winpoint();
        $this->score()->shouldReturn('40', 'Equals');
    }

    public function it_score_30_15()
    {
        $this->player->winpoint();
        $this->score()->shouldReturn('30 - 15');
    }

    public function it_score_15_30()
    {
        $this->player->winpint();
        $this->score()->shouldReturn('15 - 30');
    }

    public function it_score_40_15()
    {
        $this->player->winpint();
        $this->score()->shouldReturn('40 - 15');
    }

    public function it_score_15_40()
    {
        $this->player->winpint();
        $this->score()->shouldReturn('15 - 40');
    }
}
