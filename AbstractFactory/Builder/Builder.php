<?php
include_once dirname(__FILE__).'/Supra.php';
include_once './Interfaces/Toyota.php';

class Builder {
    public function make(string $name): Toyota {
        return match($name) {
            Supra::class => new Supra(),
            // Prado::class => new Prado(),
            // Corolla::class => new Corolla(),
            default => throw new \Exception("Unknown product: $name"),
        };
    }
}
