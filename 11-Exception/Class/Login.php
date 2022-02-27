<?php
namespace Class;

use Class\Exceptions\UserNotVerifiedException;
use Class\Exceptions\UserIsBanException;
use Class\Exceptions\UserException;

class Login {

    public function __construct(protected User $user) {}

    public function login() : bool {
        if(!$this->user->isVerified()) {
            #throw new \Exception('Utilisateur non verifie');
            #echo 'Utilisateur non verifie';
            #throw new UserNotVerifiedException();
            throw UserException::notVerified();
        } 
        
        if($this->user->isBan()) {
            throw new UserIsBanException();
        }
        return true;
    }
}   
