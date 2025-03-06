<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function answerOptions()
    {
        return $this->hasMany(AnswerOption::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
