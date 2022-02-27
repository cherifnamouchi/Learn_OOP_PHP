<?php

namespace Class;

use Class\Traits\MailTrait;

class Invoice {

    use MailTrait;

    public function download() : string {
        return 'download from invoice';
    }
}