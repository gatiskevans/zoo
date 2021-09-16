<?php

    class Dangerous implements Caged, Animal
    {

        private string $name;

        public function __construct(string $name)
        {
            $this->name = $name;
        }

        public function livesInCage(): string
        {
            return "$this->name lives in a cage\n";
        }
    }