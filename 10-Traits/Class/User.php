<?php

namespace Class;

use Class\Traits\MailTrait;


class User {

    use MailTrait;

    public function authenticated() : string {
        return 'authentification from inuser';
    }

  
}