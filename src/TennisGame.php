<?php

class TennisGame
{
    protected $player1;
    protected $player2;

    public function __Construct(Player $player1, Player $player2){
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function score() {
        if ($this->empatats()){
            $diferencia = $this->player1->score() - $this->player2->score();
            if ( $diferencia > 0) {
                // Avantatge player I
                return "Avantatge" . $this->player1->name();
            }
        }
    }

    /**
     * @return bool
     */
    public function empatats()
    {
        return $this->player1->score() > 3 || $this->player2->score() > 3;
    }
}
