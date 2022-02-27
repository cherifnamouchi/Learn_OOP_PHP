<?php

namespace Class;


class PremiumCoffeeMachine extends CoffeeMachine{

    public function __construct(int $cups) {
        parent::__construct($cups);
    }

    public function select(string $selection) {
        $result = match($selection) {
            'espresso' => $this->makeEspresso(),
            'vanilla' => $this->makeVanilla(),
             default   => 'Erreur'
        };
        return $result;
    }

    protected function makeVanilla() {
        for($i = 0; $i < $this->cups; $i++) {
            echo 'Coffee Vanilla n° ' . $i+1 . ' servi.<br />';
        }
    }
}