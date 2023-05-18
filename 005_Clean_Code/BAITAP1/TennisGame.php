<?php
const ONE = 1;
const TWO = 2;
const THREE = 3;
const FOUR = 4;
const ZERO = 0;
class TennisGame
{
    public string $score = '';

    public function __construct($playerOneName, $playerTwoName, $playerOneScore, $playerTwoScore)
    {
        $this->playerOneName = $playerOneName;
        $this->playerTwoName = $playerTwoName;
        $this->playerOneScore = $playerOneScore;
        $this->playerTwoScore = $playerTwoScore;
        $this->one = ONE;
        $this->zero = ZERO;
        $this->two = TWO;
        $this->three = THREE;
        $this->four = FOUR;
    }
    public function crossingScore()
    {
        switch ($this->playerOneScore) {
            case ONE:
                $this->score = "Love-All";
                break;
            case TWO:
                $this->score = "Fifteen-All";
                break;
            case THREE:
                $this->score = "Thirty-All";
                break;
            case 3:
                $this->score = "Forty-All";
                break;
            default:
                $this->score = "Deuce";
                break;
        }
        return $this->score;
    }
    public function scoreMoreThanFour()
    {
        $minusResult = $this->player1_score - $this->player2_score;
        if ($minusResult == 1) $this->score = "Advantage player1";
        else if ($minusResult == -1) $this->score = "Advantage player2";
        else if ($minusResult >= 2) $this->score = "Win for player1";
        else $this->score = "Win for player2";

        return $this->score;
    }
    public function lessThanFour()
    {
        for ($i = 1; $i < 3; $i++) {
            if ($i == 1) {
                $tempScore = $this->playerOneScore;
            } else {
                $this->score .= "-";
                $tempScore = $this->playerTwoScore;
            }
            switch ($tempScore) {
                case ZERO:
                    $this->score .= "Love";
                    break;
                case ONE:
                    $this->score .= "Fifteen";
                    break;
                case TWO:
                    $this->score .= "Thirty";
                    break;
                case THREE:
                    $this->score .= "Forty";
                    break;
            }
        }
        return $this->score;
    }
    function getScore()
    {
        if ($this->playerOneScore == $this->playerTwoScore) {
           return $this->crossingScore();
        } else if ($this->playerOneScore >= 4 || $this->playerTwoScore >= 4) {
          return  $this->scoreMoreThanFour();
        } else {
         return   $this->lessThanFour();
        }
    }
}