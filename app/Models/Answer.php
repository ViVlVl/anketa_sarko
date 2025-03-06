<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answerOption()
    {
        return $this->belongsTo(AnswerOption::class);
    }
}
