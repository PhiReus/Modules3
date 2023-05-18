<?php

class TennisGame1
{
    public string $score = '';

    public function getScore($player1Name, $player2Name, $player1_score, $player2_score)
    {
        $tempScore = 0;
        //   diem bang nhau
        if ($player1_score == $player2_score) {
            switch ($player1_score) {
                case 0:
                    $this->score = "Love-All";
                    break;
                case 1:
                    $this->score = "Fifteen-All";
                    break;
                case 2:
                    $this->score = "Thirty-All";
                    break;
                case 3:
                    $this->score = "Forty-All";
                    break;
                default:
                    $this->score = "Deuce";
                    break;
            }
            //   2 nguoi co diem lon hon 4



        } //1 nguoi co diem hon hon = 4 so sanh hieu so
        else if ($player1_score >= 4 || $player2_score >= 4) {
            $minusResult = $player1_score - $player2_score;
            if ($minusResult == 1) $this->score = "Advantage player1";
            else if ($minusResult == -1) $this->score = "Advantage player2";
            else if ($minusResult >= 2) $this->score = "Win for player1";
            else $this->score = "Win for player2";
        } else {
            // 2 nguoi co diem nho hon 3
            for ($i = 1; $i < 3; $i++) {     // lap 1-2
                if ($i == 1) $tempScore = $player1_score; //   i=1diem tam thoi= diem player1
                else {
                    $this->score .= "-"; //    i=2:  + dierm tam thoi + chuoi"-"
                    $tempScore = $player2_score; //   + diem tam thoi= diem player 2
                }
                switch ($tempScore) {
                    case 0:
                        $this->score .= "Love";
                        break;
                    case 1:
                        $this->score .= "Fifteen";
                        break;
                    case 2:
                        $this->score .= "Thirty";
                        break;
                    case 3:
                        $this->score .= "Forty";
                        break;
                }
            }
        }
    }
    //ham in chuoi
    public function __toString(): string
    {
        return $this->score;
    }
}