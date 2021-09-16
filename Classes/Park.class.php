<?php

    class Park
    {
        private array $animals = [];

        public function addAnimal(Animal $animal): void
        {
            $this->animals[] = $animal;
        }

        public function getAnimals(): array
        {
            return $this->animals;
        }
    }