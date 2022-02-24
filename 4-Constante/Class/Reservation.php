<?php

namespace Class;

use \Class\Enums\OfficeStatus;
use \Class\Enums\OfficestatusEnums;

class Reservation {

    public const APPROVAL_PENDING = 'en attente';
    public const APPROVAL_APPROVED = 'approuvée';
    public const APPROVAL_REJECTED = 'rejetée';

    public string $status;
    public OfficeStatusEnums $nom;

    public function __construct() {
        $this->status = self::APPROVAL_PENDING;
        $this->nom = OfficeStatusEnums::PRENOM;
    }
}