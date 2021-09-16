<?php

    class Moody implements Caged, Outdoors, Animal
    {

        private string $name;

        public function __construct(string $name)
        {
            $this->name = $name;
        }

        public function livesInCage(): string
        {
            return "$this->name sometimes lives in a cage\n";
        }

        public function livesOutdoors(): string
        {
            return "$this->name sometimes lives outdoors\n";
        }
    }