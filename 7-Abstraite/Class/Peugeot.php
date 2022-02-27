<?php

namespace Class;

class Peugeot extends Vehicule {

    public function marque($test = 'Cherif') : string {
        return 'Je roule en ' . $this->marque . ' et je peux etre rajouter comme parametre ' .$test;
    }
}