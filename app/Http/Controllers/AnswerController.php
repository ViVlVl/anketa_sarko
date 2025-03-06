<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Answer;
use App\Models\Patient;

class AnswerController extends Controller
{
    public function index()
    {
        $patients = Patient::with([
            'answers.question',
            'answers.answerOption'
        ])->get();


        return Inertia::render('Answers/Index', compact('patients'));
    }
}
