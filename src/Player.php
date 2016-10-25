<?php

class Player
{
    protected $score = [
        0=> '0',
        1=> '15',
        2=> '30',
        3=> '40',
        4=>
    ]

    protected $name;

    public function __construct($score, $name){

        $this ->score = $score;
        $this ->name = $name;

}

public function winpoint(){
    $this->score = '15';

}

public function score(){
    return $this->score()
}
}