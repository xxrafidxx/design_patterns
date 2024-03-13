<?php

interface Toyota {
    public function getDetails();
}

interface ToyotaFactory {
    public function make(string $name): Toyota;
}

class Supra implements Toyota {
    public function getDetails(): string {
        return 'Supra';
    }
}

class Prado implements Toyota {
    public function getDetails(): string {
        return 'Prado';
    }
}

class Corola implements Toyota {
    public function getDetails(): string {
        return 'Corola';
    }
}

class CarBuilder implements ToyotaFactory {
    public function make(string $name): Toyota {
        return match($name) {
            Supra::class => new Supra(),
            Prado::class => new Prado(),
            Corola::class => new Corola(),
            default => throw new \Exception("Unknown product: $name"),
        };
    }
}