<?php

interface Toyota {
    public function getDetails();
}

interface ToyotaFactory {
    public function make(string $name): Toyota;
}

// class Prado implements Toyota {
//     public function getDetails(): string {
//         return 'Prado';
//     }
// }

// class Corola implements Toyota {
//     public function getDetails(): string {
//         return 'Corola';
//     }
// }
