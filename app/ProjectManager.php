<?php

namespace App;

class ProjectManager implements Manager
{
    public const TC = 3;
    public function taskEvaluation(int $hours): int
    {
        return $hours * self::TC;
    }
}
