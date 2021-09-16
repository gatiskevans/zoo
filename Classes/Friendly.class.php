<?php

    class Friendly implements Outdoors, Animal
    {

        private string $name;

        public function __construct(string $name)
        {
            $this->name = $name;
        }

        public function livesOutdoors(): string
        {
            return "$this->name lives outdoors\n";
        }
    }