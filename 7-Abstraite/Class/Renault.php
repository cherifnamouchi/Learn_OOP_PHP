<?php

namespace Class;

class Renault extends Vehicule {

    public function marque() : string {
        return 'Je roule en ' . $this->marque;
    }
}