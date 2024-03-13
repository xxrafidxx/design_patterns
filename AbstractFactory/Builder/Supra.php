<?php
include_once './Interfaces/Toyota.php';

class Supra implements Toyota {
    public function getDetails(): string {
        return 'Supra';
    }
}