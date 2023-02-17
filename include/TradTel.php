<?php

class TradTel {
    protected $inp;
    protected $convertTab = array('a' => 2, 'b' => 2, 'c' => 2, 'd' => 3, 'e' => 3, 'f' => 3, 'g' => 4, 'h' => 4, 'i' => 4, 'j' => 5, 'k' => 5, 'l' => 5, 'm' => 6, 'n' => 6, 'o' => 6, 'p' => 7, 'q' => 7, 'r' => 7, 's' => 7, 't' => 8, 'u' => 8, 'v' => 8, 'w' => 9, 'x' => 9, 'y' => 9, 'z' => 9, ' ' => 0);
    public function __construct($inp) { 
        $this->inp = strtolower($inp);
    }
    public function traduction(){
        $resultat = '';
        foreach (str_split($this->inp) as $char) {
            $resultat = $resultat . $this->convertTab[$char];
        }
        return $resultat;
    }
}