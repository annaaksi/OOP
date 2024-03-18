<?php

namespace App;

class TaskEvaluation
{
    public static function developerRating(string $programLanguage): ?int
    {
        switch ($programLanguage) {
            case 'Php':
                $phpDeveloper = new PhpDeveloper('Anna', 30, 'Junior');
                return $phpDeveloper->taskEvaluation();
            case 'Java':
                $javaDeveloper = new JavaDeveloper('Anastasia', 25, 'Middle');
                return $javaDeveloper->taskEvaluation();
            case 'Python':
                $pythonDeveloper = new PythonDeveloper();
                return $pythonDeveloper->taskEvaluation();
            case 'C':
                $cDeveloper = new CDeveloper();
                return $cDeveloper->taskEvaluation();
            default:
                return null;
        }
    }

    public static function generateFinalGrade(string $programLanguage): int
    {
        $projectManager = new ProjectManager();

        return $projectManager->taskEvaluation(TaskEvaluation::developerRating($programLanguage));

    }
}
