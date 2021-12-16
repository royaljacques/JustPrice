<?php
class Main{
    private int $price;
    public function initProgram(){
        echo "rentre le prix minimum avec lequel tu souhaite jouer\n";
        $min = readline();
        echo "rentre le prix maximum avec lequel tu souhaite jouer\n";
        $max = readline();
        $this->setPrice(mt_rand($min, $max));
        $this->updateGame();
    }

    public function updateGame(){
        echo "suggère ton prix\n";
        $send = readline();
        if ($this->getPrice() != $send){
            $this->updateGame();
        }else{
            echo "Bravo !! Tu as gagné ... Le drois de rejouer\n";
        }
    }
    /**
     * @return int
     */
    public function getPrice (): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice (int $price): void
    {
        $this->price = $price;
    }
}
$loader = new Main();
$loader->initProgram();