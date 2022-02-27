<?php

namespace Class;

# final class CoffeeMachine { ==> Interdire d'etendre cette classe en utilisant le mot cle FINAL, de meme sur les methodes aussi
class CoffeeMachine {

  protected int $cups;

  public function __construct(int $cups) {
      $this->cups = $cups;
  }

    public function select(string $selection) {
        $result = match($selection) {
            'espresso' => $this->makeEspresso(),
             default   => 'Erreur'
        };
        return $result;
    }

    protected function makeEspresso() {
        for($i = 0; $i < $this->cups; $i++) {
            echo 'Coffee Espresso n° ' . $i+1 . ' servi.<br />';
        }
    }
}