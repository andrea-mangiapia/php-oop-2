<?php
require_once __DIR__ . '/User.php';

class UserNoRegistered extends User {
    public $registrazioneUtente = 'anonymous';
}

?>