<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function answers()
    {
        return $this->hasMany(Answer::class, 'patient_id');
    }

    public function calculateTotalPoints()
    {
        $this->load('answers.answerOption'); // Загружаем связи с ответами и их вариантами

        $totalPoints = 0;
        foreach ($this->answers as $answer) {
            $totalPoints += (int) ($answer->answerOption->points ?? 0); // Суммируем очки
        }

        // Сохраняем результат в базе
        $this->update(['total_points' => $totalPoints]);

        return $totalPoints; // Возвращаем сумму очков

    }
}
