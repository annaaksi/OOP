<?php

namespace App;

class PhpDeveloper extends Developer
{
    public string $name;
    public int $age;
    public string $position;

    public function __construct(string $name, int $age, string $position)
    {
        $this->name = $name;
        $this->age = $age;
        $this->position = $position;
    }

    public function taskEvaluation(): int
    {
        return rand(1, 10);
    }
}
