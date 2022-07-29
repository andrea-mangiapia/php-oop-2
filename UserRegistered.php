<?php
require_once __DIR__ . '/User.php';

class UserRegistered extends User {

    public $registrazioneUtente = 'registered';

    // Override
    public $sconto = 20;
}


?>