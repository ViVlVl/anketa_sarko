<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\AnswerOption;


class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Вопрос 1
        $question1_1 = Question::create([
            'question_text' => 'Чувствуете ли Вы в настоящее время, что у Вас есть снижение силы Рук?'
        ]);

        // Добавляем варианты ответов для первого вопроса
        AnswerOption::create([
            'question_id' => $question1_1->id,
            'option_text' => 'Выраженное',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question1_1->id,
            'option_text' => 'Некоторое',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question1_1->id,
            'option_text' => 'Незначительное',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question1_1->id,
            'option_text' => 'Нет снижения',
            'points' => 3,
        ]);

        $question1_2 = Question::create([
            'question_text' => 'Чувствуете ли Вы в настоящее время, что у Вас есть снижение силы Ног?'
        ]);

        AnswerOption::create([
            'question_id' => $question1_2->id,
            'option_text' => 'Выраженное',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question1_2->id,
            'option_text' => 'Некоторое',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question1_2->id,
            'option_text' => 'Незначительное',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question1_2->id,
            'option_text' => 'Нет снижения',
            'points' => 3,
        ]);

        $question1_3 = Question::create([
            'question_text' => 'Чувствуете ли Вы в настоящее время, что у Вас есть снижение Мышечной массы?'
        ]);

        AnswerOption::create([
            'question_id' => $question1_3->id,
            'option_text' => 'Выраженное',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question1_3->id,
            'option_text' => 'Некоторое',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question1_3->id,
            'option_text' => 'Незначительное',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question1_3->id,
            'option_text' => 'Нет снижения',
            'points' => 3,
        ]);

        $question1_4 = Question::create([
            'question_text' => 'Чувствуете ли Вы в настоящее время, что у Вас есть снижение Энергии?'
        ]);

        AnswerOption::create([
            'question_id' => $question1_4->id,
            'option_text' => 'Выраженное',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question1_4->id,
            'option_text' => 'Некоторое',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question1_4->id,
            'option_text' => 'Незначительное',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question1_4->id,
            'option_text' => 'Нет снижения',
            'points' => 3,
        ]);

        $question1_5 = Question::create([
            'question_text' => 'Чувствуете ли Вы в настоящее время, что у Вас есть снижение Физической Возможности?'
        ]);

        AnswerOption::create([
            'question_id' => $question1_5->id,
            'option_text' => 'Выраженное',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question1_5->id,
            'option_text' => 'Некоторое',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question1_5->id,
            'option_text' => 'Незначительное',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question1_5->id,
            'option_text' => 'Нет снижения',
            'points' => 3,
        ]);

        $question1_6 = Question::create([
            'question_text' => 'Чувствуете ли Вы в настоящее время, что у Вас есть снижение Ловкости?'
        ]);

        AnswerOption::create([
            'question_id' => $question1_6->id,
            'option_text' => 'Выраженное',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question1_6->id,
            'option_text' => 'Некоторое',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question1_6->id,
            'option_text' => 'Незначительное',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question1_6->id,
            'option_text' => 'Нет снижения',
            'points' => 3,
        ]);

        // Вопрос 2
        $question2 = Question::create([
            'question_text' => 'Ощущаете ли Вы боль в мышцах?'
        ]);

        // Добавляем варианты ответов для второго вопроса
        AnswerOption::create([
            'question_id' => $question2->id,
            'option_text' => 'Часто',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question2->id,
            'option_text' => 'Иногда',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question2->id,
            'option_text' => 'Редко',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question2->id,
            'option_text' => 'Никогда',
            'points' => 3,
        ]);

        // Вопрос 3
        $question3_1 = Question::create([
            'question_text' => 'При легкой физической нагрузке (медленно ходить, гладить белье, вытирать пыль, мыть посуду, выполнять мелкий ремонт по дому – починить кран, подклеить обои; поливать в огороде и др.) испытываете ли Вы Трудности?'
        ]);

        // Добавляем варианты ответов для третьего вопроса
        AnswerOption::create([
            'question_id' => $question3_1->id,
            'option_text' => 'Часто',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question3_1->id,
            'option_text' => 'Иногда',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question3_1->id,
            'option_text' => 'Редко',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question3_1->id,
            'option_text' => 'Никогда',
            'points' => 3,
        ]);

        $question3_2 = Question::create([
            'question_text' => 'При легкой физической нагрузке (медленно ходить, гладить белье, вытирать пыль, мыть посуду, выполнять мелкий ремонт по дому – починить кран, подклеить обои; поливать в огороде и др.) испытываете ли Вы Усталость?'
        ]);

        // Добавляем варианты ответов для третьего вопроса
        AnswerOption::create([
            'question_id' => $question3_2->id,
            'option_text' => 'Часто',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question3_2->id,
            'option_text' => 'Иногда',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question3_2->id,
            'option_text' => 'Редко',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question3_2->id,
            'option_text' => 'Никогда',
            'points' => 3,
        ]);


        $question3_3 = Question::create([
            'question_text' => 'При легкой физической нагрузке (медленно ходить, гладить белье, вытирать пыль, мыть посуду, выполнять мелкий ремонт по дому – починить кран, подклеить обои; поливать в огороде и др.) испытываете ли Вы Чувствуете боль?'
        ]);

        // Добавляем варианты ответов для третьего вопроса
        AnswerOption::create([
            'question_id' => $question3_3->id,
            'option_text' => 'Часто',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question3_3->id,
            'option_text' => 'Иногда',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question3_3->id,
            'option_text' => 'Редко',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question3_3->id,
            'option_text' => 'Никогда',
            'points' => 3,
        ]);
        // Вопрос 4
        $question4_1 = Question::create([
            'question_text' => 'При умеренной физической нагрузке (быстро ходить, мыть окна, пылесосить, мыть машину, полоть сорняки в огороде и др.), испытываете ли Вы Трудности?'
        ]);

        // Добавляем варианты ответов для четвертого вопроса
        AnswerOption::create([
            'question_id' => $question4_1->id,
            'option_text' => 'Часто',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question4_1->id,
            'option_text' => 'Иногда',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question4_1->id,
            'option_text' => 'Редко',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question4_1->id,
            'option_text' => 'Никогда',
            'points' => 3,
        ]);


        $question4_2 = Question::create([
            'question_text' => 'При умеренной физической нагрузке (быстро ходить, мыть окна, пылесосить, мыть машину, полоть сорняки в огороде и др.), испытываете ли Вы Усталость?'
        ]);
        // Добавляем варианты ответов для четвертого вопроса
        AnswerOption::create([
            'question_id' => $question4_2->id,
            'option_text' => 'Часто',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question4_2->id,
            'option_text' => 'Иногда',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question4_2->id,
            'option_text' => 'Редко',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question4_2->id,
            'option_text' => 'Никогда',
            'points' => 3,
        ]);

        $question4_3 = Question::create([
            'question_text' => 'При умеренной физической нагрузке (быстро ходить, мыть окна, пылесосить, мыть машину, полоть сорняки в огороде и др.), испытываете ли Вы Чувствуете боль?'
        ]);
        // Добавляем варианты ответов для четвертого вопроса
        AnswerOption::create([
            'question_id' => $question4_3->id,
            'option_text' => 'Часто',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question4_3->id,
            'option_text' => 'Иногда',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question4_3->id,
            'option_text' => 'Редко',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question4_3->id,
            'option_text' => 'Никогда',
            'points' => 3,
        ]);

        $question5_1 = Question::create([
            'question_text' => 'При интенсивной физической нагрузке (быстро ходить, мыть окна, пылесосить, мыть машину, полоть сорняки в огороде и др.), испытываете ли Вы Трудности?'
        ]);
        // Добавляем варианты ответов для пятого вопроса
        AnswerOption::create([
            'question_id' => $question5_1->id,
            'option_text' => 'Часто',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question5_1->id,
            'option_text' => 'Иногда',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question5_1->id,
            'option_text' => 'Редко',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question5_1->id,
            'option_text' => 'Никогда',
            'points' => 3,
        ]);

        $question5_2 = Question::create([
            'question_text' => 'При интенсивной физической нагрузке (быстро ходить, мыть окна, пылесосить, мыть машину, полоть сорняки в огороде и др.), испытываете ли Вы Усталость?'
        ]);
        // Добавляем варианты ответов для пятого вопроса
        AnswerOption::create([
            'question_id' => $question5_2->id,
            'option_text' => 'Часто',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question5_2->id,
            'option_text' => 'Иногда',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question5_2->id,
            'option_text' => 'Редко',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question5_2->id,
            'option_text' => 'Никогда',
            'points' => 3,
        ]);

        $question5_3 = Question::create([
            'question_text' => 'При интенсивной физической нагрузке (быстро ходить, мыть окна, пылесосить, мыть машину, полоть сорняки в огороде и др.), испытываете ли Вы Чувствуете боль?'
        ]);
        // Добавляем варианты ответов для пятого вопроса
        AnswerOption::create([
            'question_id' => $question5_3->id,
            'option_text' => 'Часто',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question5_3->id,
            'option_text' => 'Иногда',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question5_3->id,
            'option_text' => 'Редко',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question5_3->id,
            'option_text' => 'Никогда',
            'points' => 3,
        ]);

        $question6 = Question::create([
            'question_text' => 'Чувствуете ли Вы себя старым (старой)?'
        ]);
        // Добавляем варианты ответов для пятого вопроса
        AnswerOption::create([
            'question_id' => $question6->id,
            'option_text' => 'Да, очень',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question6->id,
            'option_text' => 'Да, в какой-то степени',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question6->id,
            'option_text' => 'Да, немного',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question6->id,
            'option_text' => 'Нет, совсем нет',
            'points' => 3,
        ]);

        $question7 = Question::create([
            'question_text' => 'Если в вопросе 6 Вы ответили «Да», что заставило Вас так думать? (Выберите любое количество ответов)'
        ]);
        // Добавляем варианты ответов для пятого вопроса
        AnswerOption::create([
            'question_id' => $question7->id,
            'option_text' => 'Мое самочувствие легко меняется в худшую сторону',
        ]);
        AnswerOption::create([
            'question_id' => $question7->id,
            'option_text' => 'Я чувствую слабость в мышцах',
        ]);
        AnswerOption::create([
            'question_id' => $question7->id,
            'option_text' => 'Мне пришлось столкнуться со смертью близких',
        ]);
        AnswerOption::create([
            'question_id' => $question7->id,
            'option_text' => 'У меня плохое зрение',
        ]);
        AnswerOption::create([
            'question_id' => $question7->id,
            'option_text' => 'Я принимаю много лекарств',
        ]);
        AnswerOption::create([
            'question_id' => $question7->id,
            'option_text' => 'У меня проблемы с памятью',
        ]);
        AnswerOption::create([
            'question_id' => $question7->id,
            'option_text' => 'У меня мало сил, я быстро устаю',
        ]);
        AnswerOption::create([
            'question_id' => $question7->id,
            'option_text' => 'Другое',
        ]);

        $question8 = Question::create([
            'question_text' => 'Чувствуете ли Вы себя физически слабым (слабой)?'
        ]);
        // Добавляем варианты ответов для пятого вопроса
        AnswerOption::create([
            'question_id' => $question8->id,
            'option_text' => 'Да, очень',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question8->id,
            'option_text' => 'Да, в какой-то степени',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question8->id,
            'option_text' => 'Да, немного',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question8->id,
            'option_text' => 'Нет, совсем нет',
            'points' => 3,
        ]);

        $question9_1 = Question::create([
            'question_text' => 'Чувствуете ли Вы ограничения в следующем Продолжительности пеших прогулок?',
        ]);
        AnswerOption::create([
            'question_id' => $question9_1->id,
            'option_text' => 'Значительные',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question9_1->id,
            'option_text' => 'Некоторые',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question9_1->id,
            'option_text' => 'Незначительные',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question9_1->id,
            'option_text' => 'Нет',
            'points' => 3,
        ]);

        $question9_2 = Question::create([
            'question_text' => 'Чувствуете ли Вы ограничения в следующем Частоте пеших прогулок?',
        ]);
        AnswerOption::create([
            'question_id' => $question9_2->id,
            'option_text' => 'Значительные',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question9_2->id,
            'option_text' => 'Некоторые',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question9_2->id,
            'option_text' => 'Незначительные',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question9_2->id,
            'option_text' => 'Нет',
            'points' => 3,
        ]);

        $question9_3 = Question::create([
            'question_text' => 'Чувствуете ли Вы ограничения в следующем Расстоянии, которое Вы можете пройти?',
        ]);
        AnswerOption::create([
            'question_id' => $question9_3->id,
            'option_text' => 'Значительные',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question9_3->id,
            'option_text' => 'Некоторые',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question9_3->id,
            'option_text' => 'Незначительные',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question9_3->id,
            'option_text' => 'Нет',
            'points' => 3,
        ]);

        $question9_4 = Question::create([
            'question_text' => 'Чувствуете ли Вы ограничения в следующем Скорости, с которой Вы можете ходить?',
        ]);
        AnswerOption::create([
            'question_id' => $question9_4->id,
            'option_text' => 'Значительные',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question9_4->id,
            'option_text' => 'Некоторые',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question9_4->id,
            'option_text' => 'Незначительные',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question9_4->id,
            'option_text' => 'Нет',
            'points' => 3,
        ]);

        $question9_5 = Question::create([
            'question_text' => 'Чувствуете ли Вы ограничения в следующем Длине Вашего шага?',
        ]);
        AnswerOption::create([
            'question_id' => $question9_5->id,
            'option_text' => 'Значительные',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question9_5->id,
            'option_text' => 'Некоторые',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question9_5->id,
            'option_text' => 'Незначительные',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question9_5->id,
            'option_text' => 'Нет',
            'points' => 3,
        ]);

        $question10_1 = Question::create([
            'question_text' => 'При ходьбе Я не могу гулять?',
        ]);
        AnswerOption::create([
            'question_id' => $question10_1->id,
            'option_text' => 'Часто',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question10_1->id,
            'option_text' => 'Временами',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question10_1->id,
            'option_text' => 'Редко',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question10_1->id,
            'option_text' => 'Никогда',
            'points' => 3,
        ]);

        $question10_2 = Question::create([
            'question_text' => 'При ходьбе Чувствуете ли Вы себя очень уставшим?',
        ]);
        AnswerOption::create([
            'question_id' => $question10_2->id,
            'option_text' => 'Часто',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question10_2->id,
            'option_text' => 'Временами',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question10_2->id,
            'option_text' => 'Редко',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question10_2->id,
            'option_text' => 'Никогда',
            'points' => 3,
        ]);

        $question10_3 = Question::create([
            'question_text' => 'При ходьбе Вынуждены ли Вы садиться, чтобы отдохнуть?',
        ]);
        AnswerOption::create([
            'question_id' => $question10_3->id,
            'option_text' => 'Часто',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question10_3->id,
            'option_text' => 'Временами',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question10_3->id,
            'option_text' => 'Редко',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question10_3->id,
            'option_text' => 'Никогда',
            'points' => 3,
        ]);

        $question10_4 = Question::create([
            'question_text' => 'При ходьбе Сложно ли Вам достаточно быстро перейти улицу?',
        ]);
        AnswerOption::create([
            'question_id' => $question10_4->id,
            'option_text' => 'Часто',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question10_4->id,
            'option_text' => 'Временами',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question10_4->id,
            'option_text' => 'Редко',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question10_4->id,
            'option_text' => 'Никогда',
            'points' => 3,
        ]);

        $question10_5 = Question::create([
            'question_text' => 'При ходьбе Сложно ли Вам ходить по неровной поверхности?',
        ]);
        AnswerOption::create([
            'question_id' => $question10_5->id,
            'option_text' => 'Часто',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question10_5->id,
            'option_text' => 'Временами',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question10_5->id,
            'option_text' => 'Редко',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question10_5->id,
            'option_text' => 'Никогда',
            'points' => 3,
        ]);

        $question11 = Question::create([
            'question_text' => 'Сложно ли Вам удержать равновесие?',
        ]);
        AnswerOption::create([
            'question_id' => $question11->id,
            'option_text' => 'Часто',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question11->id,
            'option_text' => 'Временами',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question11->id,
            'option_text' => 'Редко',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question11->id,
            'option_text' => 'Никогда',
            'points' => 3,
        ]);

        $question12 = Question::create([
            'question_text' => 'Как часто Вы падаете?',
        ]);
        AnswerOption::create([
            'question_id' => $question12->id,
            'option_text' => 'Очень часто',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question12->id,
            'option_text' => 'Временами',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question12->id,
            'option_text' => 'Редко',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question12->id,
            'option_text' => 'Никогда',
            'points' => 3,
        ]);

        $question13 = Question::create([
            'question_text' => 'Как Вы думаете, изменилась ли Ваша внешность?',
        ]);
        AnswerOption::create([
            'question_id' => $question13->id,
            'option_text' => 'Да, очень',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question13->id,
            'option_text' => 'Да, в какой-то степени',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question13->id,
            'option_text' => 'Да, немного',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question13->id,
            'option_text' => 'Нет, совсем нет',
            'points' => 3,
        ]);

        $question14 = Question::create([
            'question_text' => 'Если на вопрос 13 Вы ответили «Да», то в чем это проявляется? (Выберите любое количество ответов)'
        ]);
        // Добавляем варианты ответов для пятого вопроса
        AnswerOption::create([
            'question_id' => $question14->id,
            'option_text' => 'Изменился вес (Вы прибавили или потеряли в весе)',
        ]);
        AnswerOption::create([
            'question_id' => $question14->id,
            'option_text' => 'Снизился рост',
        ]);
        AnswerOption::create([
            'question_id' => $question14->id,
            'option_text' => 'Стали выпадать волосы',
        ]);
        AnswerOption::create([
            'question_id' => $question14->id,
            'option_text' => 'Появились морщины',
        ]);
        AnswerOption::create([
            'question_id' => $question14->id,
            'option_text' => 'Уменьшилась мышечная масса',
        ]);
        AnswerOption::create([
            'question_id' => $question14->id,
            'option_text' => 'Волосы стали седыми',
        ]);
        AnswerOption::create([
            'question_id' => $question14->id,
            'option_text' => 'Другое',
        ]);

        $question15 = Question::create([
            'question_text' => 'Если на вопрос 13 Вы ответили «Да», расстроены ли Вы этими изменениями?',
        ]);
        AnswerOption::create([
            'question_id' => $question15->id,
            'option_text' => 'Да, очень',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question15->id,
            'option_text' => 'Да, в какой-то степени',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question15->id,
            'option_text' => 'Да, немного',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question13->id,
            'option_text' => 'Нет, совсем нет',
            'points' => 3,
        ]);

        $question16 = Question::create([
            'question_text' => 'Чувствуете ли Вы себя немощным?',
        ]);
        AnswerOption::create([
            'question_id' => $question16->id,
            'option_text' => 'Да, очень',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question16->id,
            'option_text' => 'Да, в какой-то степени',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question16->id,
            'option_text' => 'Да, немного',
            'points' => 2,
        ]);

        $question17_1 = Question::create([
            'question_text' => 'Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Подняться на один пролет лестницы?',
        ]);
        AnswerOption::create([
            'question_id' => $question17_1->id,
            'option_text' => 'Не в состоянии выполнить',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question17_1->id,
            'option_text' => 'Выполняю с большим трудом',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question17_1->id,
            'option_text' => 'Выполняю с большими затруднениями',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question17_1->id,
            'option_text' => 'Выполняю без затруднений',
            'points' => 3,
        ]);
        AnswerOption::create([
            'question_id' => $question17_1->id,
            'option_text' => 'Затрудняюсь ответить',
            'points' => 4,
        ]);

        $question17_2 = Question::create([
            'question_text' => 'Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Подняться на несколько пролетов лестницы?',
        ]);
        AnswerOption::create([
            'question_id' => $question17_2->id,
            'option_text' => 'Не в состоянии выполнить',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question17_2->id,
            'option_text' => 'Выполняю с большим трудом',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question17_2->id,
            'option_text' => 'Выполняю с большими затруднениями',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question17_2->id,
            'option_text' => 'Выполняю без затруднений',
            'points' => 3,
        ]);
        AnswerOption::create([
            'question_id' => $question17_2->id,
            'option_text' => 'Затрудняюсь ответить',
            'points' => 4,
        ]);

        $question17_3 = Question::create([
            'question_text' => 'Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Подняться на одну или несколько ступеней, не держась за перила?',
        ]);
        AnswerOption::create([
            'question_id' => $question17_3->id,
            'option_text' => 'Не в состоянии выполнить',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question17_3->id,
            'option_text' => 'Выполняю с большим трудом',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question17_3->id,
            'option_text' => 'Выполняю с большими затруднениями',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question17_3->id,
            'option_text' => 'Выполняю без затруднений',
            'points' => 3,
        ]);
        AnswerOption::create([
            'question_id' => $question17_3->id,
            'option_text' => 'Затрудняюсь ответить',
            'points' => 4,
        ]);
        $question17_4 = Question::create([
            'question_text' => 'Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Присесть на корточки или встать на колени?',
        ]);
        AnswerOption::create([
            'question_id' => $question17_4->id,
            'option_text' => 'Не в состоянии выполнить',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question17_4->id,
            'option_text' => 'Выполняю с большим трудом',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question17_4->id,
            'option_text' => 'Выполняю с большими затруднениями',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question17_4->id,
            'option_text' => 'Выполняю без затруднений',
            'points' => 3,
        ]);
        AnswerOption::create([
            'question_id' => $question17_4->id,
            'option_text' => 'Затрудняюсь ответить',
            'points' => 4,
        ]);

        $question17_5 = Question::create([
            'question_text' => 'Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Согнуться или наклониться, чтобы поднять с пола какой-либо предмет?',
        ]);
        AnswerOption::create([
            'question_id' => $question17_5->id,
            'option_text' => 'Не в состоянии выполнить',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question17_5->id,
            'option_text' => 'Выполняю с большим трудом',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question17_5->id,
            'option_text' => 'Выполняю с большими затруднениями',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question17_5->id,
            'option_text' => 'Выполняю без затруднений',
            'points' => 3,
        ]);
        AnswerOption::create([
            'question_id' => $question17_5->id,
            'option_text' => 'Затрудняюсь ответить',
            'points' => 4,
        ]);

        $question17_6 = Question::create([
            'question_text' => 'Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Подняться с пола, при этом ни за что не держась?',
        ]);
        AnswerOption::create([
            'question_id' => $question17_6->id,
            'option_text' => 'Не в состоянии выполнить',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question17_6->id,
            'option_text' => 'Выполняю с большим трудом',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question17_6->id,
            'option_text' => 'Выполняю с большими затруднениями',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question17_6->id,
            'option_text' => 'Выполняю без затруднений',
            'points' => 3,
        ]);
        AnswerOption::create([
            'question_id' => $question17_6->id,
            'option_text' => 'Затрудняюсь ответить',
            'points' => 4,
        ]);

        $question17_7 = Question::create([
            'question_text' => 'Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Подняться с низкого стула не имеющего подлокотников?',
        ]);
        AnswerOption::create([
            'question_id' => $question17_7->id,
            'option_text' => 'Не в состоянии выполнить',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question17_7->id,
            'option_text' => 'Выполняю с большим трудом',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question17_7->id,
            'option_text' => 'Выполняю с большими затруднениями',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question17_7->id,
            'option_text' => 'Выполняю без затруднений',
            'points' => 3,
        ]);
        AnswerOption::create([
            'question_id' => $question17_7->id,
            'option_text' => 'Затрудняюсь ответить',
            'points' => 4,
        ]);

        $question17_8 = Question::create([
            'question_text' => 'Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Перейти из положения сидя в положение стоя?',
        ]);
        AnswerOption::create([
            'question_id' => $question17_8->id,
            'option_text' => 'Не в состоянии выполнить',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question17_8->id,
            'option_text' => 'Выполняю с большим трудом',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question17_8->id,
            'option_text' => 'Выполняю с большими затруднениями',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question17_8->id,
            'option_text' => 'Выполняю без затруднений',
            'points' => 3,
        ]);
        AnswerOption::create([
            'question_id' => $question17_8->id,
            'option_text' => 'Затрудняюсь ответить',
            'points' => 4,
        ]);

        $question17_9 = Question::create([
            'question_text' => 'Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Переносить тяжелые предметы (большие пакеты с покупками, кастрюлю, наполненную водой, и т. д.)?',
        ]);
        AnswerOption::create([
            'question_id' => $question17_9->id,
            'option_text' => 'Не в состоянии выполнить',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question17_9->id,
            'option_text' => 'Выполняю с большим трудом',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question17_9->id,
            'option_text' => 'Выполняю с большими затруднениями',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question17_9->id,
            'option_text' => 'Выполняю без затруднений',
            'points' => 3,
        ]);
        AnswerOption::create([
            'question_id' => $question17_9->id,
            'option_text' => 'Затрудняюсь ответить',
            'points' => 4,
        ]);

        $question17_10 = Question::create([
            'question_text' => 'Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Открыть бутылку или банку?',
        ]);
        AnswerOption::create([
            'question_id' => $question17_10->id,
            'option_text' => 'Не в состоянии выполнить',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question17_10->id,
            'option_text' => 'Выполняю с большим трудом',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question17_10->id,
            'option_text' => 'Выполняю с большими затруднениями',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question17_10->id,
            'option_text' => 'Выполняю без затруднений',
            'points' => 3,
        ]);
        AnswerOption::create([
            'question_id' => $question17_10->id,
            'option_text' => 'Затрудняюсь ответить',
            'points' => 4,
        ]);

        $question17_11 = Question::create([
            'question_text' => 'Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Ездить в общественном транспорте?',
        ]);
        AnswerOption::create([
            'question_id' => $question17_11->id,
            'option_text' => 'Не в состоянии выполнить',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question17_11->id,
            'option_text' => 'Выполняю с большим трудом',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question17_11->id,
            'option_text' => 'Выполняю с большими затруднениями',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question17_11->id,
            'option_text' => 'Выполняю без затруднений',
            'points' => 3,
        ]);
        AnswerOption::create([
            'question_id' => $question17_11->id,
            'option_text' => 'Затрудняюсь ответить',
            'points' => 4,
        ]);

        $question17_12 = Question::create([
            'question_text' => 'Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Садиться или выходить из автомобиля?',
        ]);
        AnswerOption::create([
            'question_id' => $question17_12->id,
            'option_text' => 'Не в состоянии выполнить',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question17_12->id,
            'option_text' => 'Выполняю с большим трудом',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question17_12->id,
            'option_text' => 'Выполняю с большими затруднениями',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question17_12->id,
            'option_text' => 'Выполняю без затруднений',
            'points' => 3,
        ]);
        AnswerOption::create([
            'question_id' => $question17_12->id,
            'option_text' => 'Затрудняюсь ответить',
            'points' => 4,
        ]);

        $question17_13 = Question::create([
            'question_text' => 'Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Ходить по магазинам?',
        ]);
        AnswerOption::create([
            'question_id' => $question17_13->id,
            'option_text' => 'Не в состоянии выполнить',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question17_13->id,
            'option_text' => 'Выполняю с большим трудом',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question17_13->id,
            'option_text' => 'Выполняю с большими затруднениями',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question17_13->id,
            'option_text' => 'Выполняю без затруднений',
            'points' => 3,
        ]);
        AnswerOption::create([
            'question_id' => $question17_13->id,
            'option_text' => 'Затрудняюсь ответить',
            'points' => 4,
        ]);

        $question17_14 = Question::create([
            'question_text' => 'Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Выполнять домашнюю работу (заправлять постель, пылесосить, гладить, мыть посуду и т. д.)?',
        ]);
        AnswerOption::create([
            'question_id' => $question17_14->id,
            'option_text' => 'Не в состоянии выполнить',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question17_14->id,
            'option_text' => 'Выполняю с большим трудом',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question17_14->id,
            'option_text' => 'Выполняю с большими затруднениями',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question17_14->id,
            'option_text' => 'Выполняю без затруднений',
            'points' => 3,
        ]);
        AnswerOption::create([
            'question_id' => $question17_14->id,
            'option_text' => 'Затрудняюсь ответить',
            'points' => 4,
        ]);

        $question18 = Question::create([
            'question_text' => 'Ограничивает ли слабость в мышцах Ваши движения?',
        ]);
        AnswerOption::create([
            'question_id' => $question18->id,
            'option_text' => 'Да, очень',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question18->id,
            'option_text' => 'Да, в какой-то степени',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question17_14->id,
            'option_text' => 'Да, немного',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question17_14->id,
            'option_text' => 'Нет, совсем нет',
            'points' => 3,
        ]);

        $question19 = Question::create([
            'question_text' => 'Если на вопрос 18 вы ответили «Да», то назовите причины (выберите любое количество ответов)',
        ]);
        AnswerOption::create([
            'question_id' => $question19->id,
            'option_text' => 'Страх боли',
        ]);
        AnswerOption::create([
            'question_id' => $question19->id,
            'option_text' => 'Страх устать после выполнения этих движений',
        ]);
        AnswerOption::create([
            'question_id' => $question19->id,
            'option_text' => 'Страх того, что Вы не сможете выполнить эти движения',
        ]);
        AnswerOption::create([
            'question_id' => $question19->id,
            'option_text' => 'Страх падения',
        ]);
        AnswerOption::create([
            'question_id' => $question19->id,
            'option_text' => 'Другое',
        ]);

        $question20 = Question::create([
            'question_text' => 'Ограничивает ли мышечная слабость Вашу сексуальную активность?',
        ]);
        AnswerOption::create([
            'question_id' => $question20->id,
            'option_text' => 'Я сексуально не активен(не активна)',
            'points' => 0,
        ]);
        AnswerOption::create([
            'question_id' => $question20->id,
            'option_text' => 'Да, полностью ограничивает',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question20->id,
            'option_text' => 'Да, в какой-то степени',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question20->id,
            'option_text' => 'Да, немного',
            'points' => 3,
        ]);
        AnswerOption::create([
            'question_id' => $question20->id,
            'option_text' => 'Нет, совсем нет',
            'points' => 4,
        ]);

        $question21 = Question::create([
            'question_text' => 'Как изменилось выполнение Вами физических упражнений / участие в спортивных мероприятиях?',
        ]);
        AnswerOption::create([
            'question_id' => $question21->id,
            'option_text' => 'Увеличилось',
            'points' => 3,
        ]);
        AnswerOption::create([
            'question_id' => $question21->id,
            'option_text' => 'Снизилось',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question21->id,
            'option_text' => 'Не изменилось',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question21->id,
            'option_text' => 'Я никогда не выполнял(а) физических упражнений и не участвовал(а) в спортивных мероприятиях',
            'points' => 0,
        ]);

        $question22 = Question::create([
            'question_text' => 'Как изменился Ваш досуг (поход в гости, садоводство, мелкий ремонт по дому – починить кран, подклеить обои, творчество, охота/рыбалка, общение по интересам, игры в карты, прогулки и т. д.)?',
        ]);
        AnswerOption::create([
            'question_id' => $question22->id,
            'option_text' => 'Увеличилось',
            'points' => 3,
        ]);
        AnswerOption::create([
            'question_id' => $question22->id,
            'option_text' => 'Снизилось',
            'points' => 2,
        ]);
        AnswerOption::create([
            'question_id' => $question22->id,
            'option_text' => 'Не изменилось',
            'points' => 1,
        ]);
        AnswerOption::create([
            'question_id' => $question22->id,
            'option_text' => 'Я никогда не занимался (не занималась) активным досугом',
            'points' => 0,
        ]);
    }
}
