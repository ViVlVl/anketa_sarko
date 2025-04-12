<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnswerRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Patient;
use App\Models\Question;
use App\Models\Answer;
use App\Models\AnswerOption;


class ArticleController extends Controller
{
    public function index()
    {
        return Inertia::render('Articles/Index');
    }

    public function submit(AnswerRequest $request)
    {

        $patient = Patient::create([
            'ФИО' => $request->input('personal_info.fio'),
            'Дата рождения' => $request->input('personal_info.dbirth'),
            'Пол' => $request->input('personal_info.gender'),
            'Адрес' => $request->input('personal_info.adres'),
            'Телефон' => $request->input('personal_info.telephone'),
            'Курение' => $request->input('personal_info.smok'),
            'Физическая активность' => $request->input('personal_info.fizactiv'),
            'Занимаетесь ли спортом?' => $request->input('personal_info.sport') === 'sport-da' ? 'Да' : 'Нет',
            'Каким спортом?' => $request->input('personal_info.sportType'),
            'Как давно?' => $request->input('personal_info.sportDuration'),
            'Сколько лет проживаете в Тюмень?' => $request->input('personal_info.longlife'),
            'Особенности питания' => $request->input('personal_info.eat'),
            'Перенесенные заболевания,операции,травмы за последниее 5 лет' => $request->input('personal_info.travm_5'),
            'Был ли за последние 5 лет период обездвиживания' => $request->input('personal_info.bezdvich'),
            'Болезни системы кровообращения' => $request->input('personal_info.krov') == 1 ? 'Да' : 'Нет',
            'Какие лекарственные препараты принимаете в настоящее время' => $request->input('personal_info.preparat'),
            'Жалобы на Мышечная слабость' => $request->input('personal_info.musklslabost'),
            'Быстрая утомляемость при физической нагрузке' => $request->input('personal_info.utomlaemost'),
            'Условия проживания:' => $request->input('personal_info.uslovia'),
            'Другое' => $request->input('personal_info.drugoe') == 1 ? 'Да' : 'Нет',
            'Онкологические заболевания' => $request->input('personal_info.onkologia') == 1 ? 'Да' : 'Нет',
            'Болезни эндокринной системы' => $request->input('personal_info.endokrin') == 1 ? 'Да' : 'Нет',
            'Болезни органов дыхания' => $request->input('personal_info.dihania') == 1 ? 'Да' : 'Нет',
            'Если приехал с другой территории то когда и откуда?' => $request->input('personal_info.howareyou'),
            'Есть ли долгожители по семейной линии?' => $request->input('personal_info.longlife'),
        ]);

        // Маппинг вопросов для vopros1
        $questionMap1 = [
            "Сила рук" => "Чувствуете ли Вы в настоящее время, что у Вас есть снижение силы Рук?",
            "Сила ног" => "Чувствуете ли Вы в настоящее время, что у Вас есть снижение силы Ног?",
            "Мышечная масса" => "Чувствуете ли Вы в настоящее время, что у Вас есть снижение Мышечной массы?",
            "Энергия" => "Чувствуете ли Вы в настоящее время, что у Вас есть снижение Энергии?",
            "Физические возможности" => "Чувствуете ли Вы в настоящее время, что у Вас есть снижение Физической Возможности?",
            "Ловкость" => "Чувствуете ли Вы в настоящее время, что у Вас есть снижение Ловкости?",
        ];

        // Записываем ответы для первого вопроса
        foreach ($request->input('vopros1') as $shortName => $score) {
            if (!isset($questionMap1[$shortName])) {
                continue; // Пропускаем, если нет соответствия
            }

            $questionText = $questionMap1[$shortName];
            $question = Question::where('question_text', $questionText)->first();

            if (!$question) {
                continue; // Если вопрос не найден, пропускаем
            }

            // Преобразуем баллы в текст ответа
            $answerTextMap = [
                "0" => "Выраженное",
                "1" => "Некоторое",
                "2" => "Незначительное",
                "3" => "Нет снижения",
            ];

            $answerText = $answerTextMap[$score] ?? null;

            if (!$answerText) {
                continue; // Если ответ некорректный, пропускаем
            }

            // Находим вариант ответа
            $answerOption = AnswerOption::where('option_text', $answerText)
                ->where('question_id', $question->id)
                ->first();

            if (!$answerOption) {
                continue; // Если варианта ответа нет, пропускаем
            }

            // Записываем ответ в базу
            $patient->answers()->create([
                'patient_id' => $patient->id,
                'question_id' => $question->id,
                'answer_option_id' => $answerOption->id,
            ]);
        }
        // Маппинг для второго вопроса
        $questionMap2 = [
            "bolmuskl" => "Ощущаете ли Вы боль в мышцах?",
        ];

        // Записываем ответы для второго вопроса
        foreach ($request->input('vopros2') as $shortName => $score) {
            if (!isset($questionMap2[$shortName])) {
                continue; // Пропускаем, если нет соответствия
            }

            $questionText = $questionMap2[$shortName];
            $question = Question::where('question_text', $questionText)->first();

            if (!$question) {
                continue; // Если вопрос не найден, пропускаем
            }

            // Преобразуем баллы в текст ответа
            $answerTextMap = [
                "0" => "Часто",
                "1" => "Иногда",
                "2" => "Редко",
                "3" => "Никогда",
            ];
            $answerText = $answerTextMap[$score] ?? null;

            if (!$answerText) {
                continue; // Если ответ некорректный, пропускаем
            }

            // Находим вариант ответа
            $answerOption = AnswerOption::where('option_text', $answerText)
                ->where('question_id', $question->id)
                ->first();

            if (!$answerOption) {
                continue; // Если варианта ответа нет, пропускаем
            }

            //3 вопрос
            // Маппинг для третьего вопроса
            $questionMap3 = [
                "trudnost" => "При легкой физической нагрузке (медленно ходить, гладить белье, вытирать пыль, мыть посуду, выполнять мелкий ремонт по дому – починить кран, подклеить обои; поливать в огороде и др.) испытываете ли Вы Трудности?",
                "ustalost" => "При легкой физической нагрузке (медленно ходить, гладить белье, вытирать пыль, мыть посуду, выполнять мелкий ремонт по дому – починить кран, подклеить обои; поливать в огороде и др.) испытываете ли Вы Усталость?",
                "bol" => "При легкой физической нагрузке (медленно ходить, гладить белье, вытирать пыль, мыть посуду, выполнять мелкий ремонт по дому – починить кран, подклеить обои; поливать в огороде и др.) испытываете ли Вы Чувствуете боль?",
            ];
            foreach ($request->input('vopros3') as $shortName => $score) {
                if (!isset($questionMap3[$shortName])) {
                    continue; // Пропускаем, если нет соответствия
                }
                $questionText = $questionMap3[$shortName];
                $question = Question::where('question_text', $questionText)->first();
                if (!$question) {
                    continue; // Если вопрос не найден, пропускаем
                }
                // Преобразуем баллы в текст ответа
                $answerTextMap = [
                    "0" => "Часто",
                    "1" => "Временами",
                    "2" => "Редко",
                    "3" => "Никогда",
                ];
                $answerText = $answerTextMap[$score] ?? null;
                if (!$answerText) {
                    continue; // Если ответ некорректный, пропускаем
                }

                // Находим вариант ответа
                $answerOption = AnswerOption::where('option_text', $answerText)
                    ->where('question_id', $question->id)
                    ->first();

                if (!$answerOption) {
                    continue; // Если варианта ответа нет, пропускаем
                }

                // Записываем ответ в базу
                $patient->answers()->create([
                    'patient_id' => $patient->id,
                    'question_id' => $question->id,
                    'answer_option_id' => $answerOption->id,
                ]);
            }
            //4 вопрос
            // Маппинг для третьего вопроса
            $questionMap4 = [
                "trudnost" => "При умеренной физической нагрузке (быстро ходить, мыть окна, пылесосить, мыть машину, полоть сорняки в огороде и др.), испытываете ли Вы Трудности?",
                "ustalost" => "При умеренной физической нагрузке (быстро ходить, мыть окна, пылесосить, мыть машину, полоть сорняки в огороде и др.), испытываете ли Вы Усталость?",
                "bol" => "При умеренной физической нагрузке (быстро ходить, мыть окна, пылесосить, мыть машину, полоть сорняки в огороде и др.), испытываете ли Вы Чувствуете боль?",
            ];
            foreach ($request->input('vopros4') as $shortName => $score) {
                if (!isset($questionMap4[$shortName])) {
                    continue; // Пропускаем, если нет соответствия
                }
                $questionText = $questionMap4[$shortName];
                $question = Question::where('question_text', $questionText)->first();
                if (!$question) {
                    continue; // Если вопрос не найден, пропускаем
                }
                // Преобразуем баллы в текст ответа
                $answerTextMap = [
                    "0" => "Часто",
                    "1" => "Временами",
                    "2" => "Редко",
                    "3" => "Никогда",
                ];

                $answerText = $answerTextMap[$score] ?? null;
                if (!$answerText) {
                    continue; // Если ответ некорректный, пропускаем
                }

                // Находим вариант ответа
                $answerOption = AnswerOption::where('option_text', $answerText)
                    ->where('question_id', $question->id)
                    ->first();

                if (!$answerOption) {
                    continue; // Если варианта ответа нет, пропускаем
                }

                // Записываем ответ в базу
                $patient->answers()->create([
                    'patient_id' => $patient->id,
                    'question_id' => $question->id,
                    'answer_option_id' => $answerOption->id,
                ]);
            }
            //5 вопрос
            // Маппинг для третьего вопроса
            $questionMap5 = [
                "trudnost" => "При интенсивной физической нагрузке (быстро ходить, мыть окна, пылесосить, мыть машину, полоть сорняки в огороде и др.), испытываете ли Вы Трудности?",
                "ustalost" => "При интенсивной физической нагрузке (быстро ходить, мыть окна, пылесосить, мыть машину, полоть сорняки в огороде и др.), испытываете ли Вы Усталость?",
                "bol" => "При интенсивной физической нагрузке (быстро ходить, мыть окна, пылесосить, мыть машину, полоть сорняки в огороде и др.), испытываете ли Вы Чувствуете боль?",
            ];
            foreach ($request->input('vopros5') as $shortName => $score) {
                if (!isset($questionMap5[$shortName])) {
                    continue; // Пропускаем, если нет соответствия
                }
                $questionText = $questionMap5[$shortName];
                $question = Question::where('question_text', $questionText)->first();
                if (!$question) {
                    continue; // Если вопрос не найден, пропускаем
                }
                // Преобразуем баллы в текст ответа
                $answerTextMap = [
                    "0" => "Часто",
                    "1" => "Временами",
                    "2" => "Редко",
                    "3" => "Никогда",
                ];
                // Получаем текст ответа на основе балла
                $answerText = $answerTextMap[$score] ?? null;

                if (!$answerText) {
                    continue; // Если ответ некорректный, пропускаем
                }

                // Находим вариант ответа
                $answerOption = AnswerOption::where('option_text', $answerText)
                    ->where('question_id', $question->id)
                    ->first();

                if (!$answerOption) {
                    continue; // Если варианта ответа нет, пропускаем
                }

                // Записываем ответ в базу
                $patient->answers()->create([
                    'patient_id' => $patient->id,
                    'question_id' => $question->id,
                    'answer_option_id' => $answerOption->id,
                ]);
            }
            //6 вопрос
            $questionMap6 = [
                "feel_old" => "Чувствуете ли Вы себя старым (старой)?"
            ];
            foreach ($request->input('vopros6') as $shortName => $score) {
                if (!isset($questionMap6[$shortName])) {
                    continue; // Пропускаем, если нет соответствия
                }
                $questionText = $questionMap6[$shortName];
                $question = Question::where('question_text', $questionText)->first();
                if (!$question) {
                    continue; // Если вопрос не найден, пропускаем
                }

                $answerTextMap = [
                    "0" => "Да, очень",
                    "1" => "Да, в какой-то степени",
                    "2" => "Да, немного",
                    "3" => "Нет, совсем нет",
                ];
                // Получаем текст ответа на основе балла
                $answerText = $answerTextMap[$score] ?? null;

                if (!$answerText) {
                    continue; // Если ответ некорректный, пропускаем
                }

                // Находим вариант ответа
                $answerOption = AnswerOption::where('option_text', $answerText)
                    ->where('question_id', $question->id)
                    ->first();

                if (!$answerOption) {
                    continue; // Если варианта ответа нет, пропускаем
                }
                // Записываем ответ в базу
                $patient->answers()->create([
                    'patient_id' => $patient->id,
                    'question_id' => $question->id,
                    'answer_option_id' => $answerOption->id,
                ]);
            }
            //7 вопрос
            $questionText7 = "Если в вопросе 6 Вы ответили «Да», что заставило Вас так думать? (Выберите любое количество ответов)";

            // Находим вопрос 7 в базе
            $question7 = Question::where('question_text', $questionText7)->first();
            if ($question7) {
                foreach ($request->input('vopros7', []) as $answerText7) {
                    // Находим вариант ответа
                    $answerOption7 = AnswerOption::where('option_text', $answerText7)
                        ->where('question_id', $question7->id)
                        ->first();

                    if (!$answerOption7) {
                        continue; // Пропускаем, если варианта ответа нет
                    }

                    // Записываем ответ в базу
                    $patient->answers()->create([
                        'patient_id' => $patient->id,
                        'question_id' => $question7->id,
                        'answer_option_id' => $answerOption7->id,
                    ]);
                }
            }
            //8 вопрос
            $questionText8 = "Чувствуете ли Вы себя физически слабым (слабой)?";
            $question8 = Question::where('question_text', $questionText8)->first();

            if ($question8) {
                $answerText8 = $request->input('vopros8');

                $answerOption8 = AnswerOption::where('option_text', $answerText8)
                    ->where('question_id', $question8->id)
                    ->first();

                if ($answerOption8) {
                    // Записываем ответ в базу
                    $patient->answers()->create([
                        'patient_id' => $patient->id,
                        'question_id' => $question8->id,
                        'answer_option_id' => $answerOption8->id,
                    ]);
                }
            }
            // 9 вопрос
            $questionMap9 = [
                "Продолжительность" => "Чувствуете ли Вы ограничения в следующем Продолжительности пеших прогулок?",
                "Частота" => "Чувствуете ли Вы ограничения в следующем Частоте пеших прогулок?",
                "Расстояние" => "Чувствуете ли Вы ограничения в следующем Расстоянии, которое Вы можете пройти?",
                "Скорость" => "Чувствуете ли Вы ограничения в следующем Скорости, с которой Вы можете ходить?",
                "Шаг" => "Чувствуете ли Вы ограничения в следующем Длине Вашего шага?",
            ];

            foreach ($request->input('vopros9', []) as $shortName => $answerText) {
                if (!isset($questionMap9[$shortName])) {
                    continue; // Пропускаем, если нет соответствия
                }

                $questionText = $questionMap9[$shortName];

                // Находим вопрос в базе
                $question = Question::where('question_text', $questionText)->first();
                if (!$question) {
                    continue; // Если вопрос не найден, пропускаем
                }

                // Находим вариант ответа в базе
                $answerOption = AnswerOption::where('option_text', $answerText)
                    ->where('question_id', $question->id)
                    ->first();

                if (!$answerOption) {
                    continue; // Если варианта ответа нет, пропускаем
                }

                // Записываем ответ в базу
                $patient->answers()->create([
                    'patient_id' => $patient->id,
                    'question_id' => $question->id,
                    'answer_option_id' => $answerOption->id,
                ]);
            }
            // 10 вопрос
            //dd($request->input('vopros10'));
            $questionMap10 = [
                "Я не могу гулять" => "При ходьбе Я не могу гулять?",
                "Чувствуете ли Вы себя очень уставшим?" => "При ходьбе Чувствуете ли Вы себя очень уставшим?",
                "Вынуждены ли Вы садиться, чтобы отдохнуть?" => "При ходьбе Вынуждены ли Вы садиться, чтобы отдохнуть?",
                "Сложно ли Вам достаточно быстро перейти улицу?" => "При ходьбе Сложно ли Вам достаточно быстро перейти улицу?",
                "Сложно ли Вам ходить по неровной поверхности?" => "При ходьбе Сложно ли Вам ходить по неровной поверхности?",
            ];

            foreach ($request->input('vopros10', []) as $shortName => $answerText) {
                if (!isset($questionMap10[$shortName])) {
                    continue; // Пропускаем, если нет соответствия
                }

                $questionText = $questionMap10[$shortName];

                // Находим вопрос в базе
                $question = Question::where('question_text', $questionText)->first();
                if (!$question) {
                    continue; // Если вопрос не найден, пропускаем
                }

                // Находим вариант ответа в базе
                $answerOption = AnswerOption::where('option_text', $answerText)
                    ->where('question_id', $question->id)
                    ->first();

                if (!$answerOption) {
                    continue; // Если варианта ответа нет, пропускаем
                }

                // Записываем ответ в базу
                $patient->answers()->create([
                    'patient_id' => $patient->id,
                    'question_id' => $question->id,
                    'answer_option_id' => $answerOption->id,
                ]);
            }
            // 11 вопрос
            $questionText11 = "Сложно ли Вам удержать равновесие?";

            // Всегда получаем массив (если пришла строка — превращаем в массив)
            $vopros11 = (array) $request->input('vopros11');

            // Находим вопрос 11 в базе
            $question11 = Question::where('question_text', $questionText11)->first();
            if ($question11) {
                foreach ($vopros11 as $answerText11) {
                    // Находим вариант ответа
                    $answerOption11 = AnswerOption::where('option_text', $answerText11)
                        ->where('question_id', $question11->id)
                        ->first();

                    if (!$answerOption11) {
                        continue;
                    }

                    // Записываем ответ в базу
                    $patient->answers()->create([
                        'patient_id' => $patient->id,
                        'question_id' => $question11->id,
                        'answer_option_id' => $answerOption11->id,
                    ]);
                }
                // 12 вопрос

                $questionText12 = "Как часто Вы падаете?";

                $vopros12 = (array) $request->input('vopros12');

                // Находим вопрос 12 в базе
                $question12 = Question::where('question_text', $questionText12)->first();

                if ($question12) {
                    foreach ($vopros12 as $answerText12) {
                        // Находим вариант ответа
                        $answerOption12 = AnswerOption::where('option_text', $answerText12)
                            ->where('question_id', $question12->id)
                            ->first();

                        if (!$answerOption12) {
                            continue;
                        }

                        // Записываем ответ в базу
                        $patient->answers()->create([
                            'patient_id' => $patient->id,
                            'question_id' => $question12->id,
                            'answer_option_id' => $answerOption12->id,
                        ]);
                    }
                }
                // 13 вопрос
                $questionText13 = "Как Вы думаете, изменилась ли Ваша внешность?";

                $vopros13 = (array) $request->input('vopros13');

                $question13 = Question::where('question_text', $questionText13)->first();
                if ($question13) {
                    foreach ($vopros13 as $answerText13) {
                        // Находим вариант ответа
                        $answerOption13 = AnswerOption::where('option_text', $answerText13)
                            ->where('question_id', $question13->id)
                            ->first();

                        if (!$answerOption13) {
                            continue;
                        }

                        // Записываем ответ в базу
                        $patient->answers()->create([
                            'patient_id' => $patient->id,
                            'question_id' => $question13->id,
                            'answer_option_id' => $answerOption13->id,
                        ]);
                    }
                }
                //14 вопрос
                $questionText14 = "Если на вопрос 13 Вы ответили «Да», то в чем это проявляется? (Выберите любое количество ответов)";

                // Находим вопрос
                $question14 = Question::where('question_text', $questionText14)->first();
                if ($question14) {
                    foreach ($request->input('vopros14', []) as $answerText14) {
                        // Находим вариант ответа
                        $answerOption14 = AnswerOption::where('option_text', $answerText14)
                            ->where('question_id', $question14->id)
                            ->first();

                        if (!$answerOption14) {
                            continue; // Пропускаем, если варианта ответа нет
                        }

                        // Записываем ответ в базу
                        $patient->answers()->create([
                            'patient_id' => $patient->id,
                            'question_id' => $question14->id,
                            'answer_option_id' => $answerOption14->id,
                        ]);
                    }
                }
                // 15 вопрос
                $questionText15 = "Если на вопрос 13 Вы ответили «Да», расстроены ли Вы этими изменениями?";

                $vopros15 = (array) $request->input('vopros15');

                $question15 = Question::where('question_text', $questionText15)->first();
                if ($question15) {
                    foreach ($vopros15 as $answerText15) {
                        // Находим вариант ответа
                        $answerOption15 = AnswerOption::where('option_text', $answerText15)
                            ->where('question_id', $question15->id)
                            ->first();

                        if (!$answerOption15) {
                            continue;
                        }

                        // Записываем ответ в базу
                        $patient->answers()->create([
                            'patient_id' => $patient->id,
                            'question_id' => $question15->id,
                            'answer_option_id' => $answerOption15->id,
                        ]);
                    }
                }
                // 16 вопрос
                $questionText16 = "Чувствуете ли Вы себя немощным?";

                $vopros16 = (array) $request->input('vopros16');

                $question16 = Question::where('question_text', $questionText16)->first();
                if ($question16) {
                    foreach ($vopros16 as $answerText16) {
                        // Находим вариант ответа
                        $answerOption16 = AnswerOption::where('option_text', $answerText16)
                            ->where('question_id', $question16->id)
                            ->first();

                        if (!$answerOption16) {
                            continue;
                        }

                        // Записываем ответ в базу
                        $patient->answers()->create([
                            'patient_id' => $patient->id,
                            'question_id' => $question16->id,
                            'answer_option_id' => $answerOption16->id,
                        ]);
                    }
                }
                // Получаем данные из запроса
                $q17_1 = $request->input('q17_1');
                $q17_2 = $request->input('q17_2');
                $q17_3 = $request->input('q17_3');
                $q17_4 = $request->input('q17_4');
                $q17_5 = $request->input('q17_5');
                $q17_6 = $request->input('q17_6');
                $q17_7 = $request->input('q17_7');
                $q17_8 = $request->input('q17_8');
                $q17_9 = $request->input('q17_9');
                $q17_10 = $request->input('q17_10');
                $q17_11 = $request->input('q17_11');
                $q17_12 = $request->input('q17_12');
                $q17_13 = $request->input('q17_13');
                $q17_14 = $request->input('q17_14');

                // Тексты вопросов
                $questionTexts = [
                    'q17_1' => "Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Подняться на один пролет лестницы?",
                    'q17_2' => "Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Подняться на несколько пролетов лестницы?",
                    'q17_3' => "Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Подняться на одну или несколько ступеней, не держась за перила?",
                    'q17_4' => "Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Присесть на корточки или встать на колени?",
                    'q17_5' => "Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Согнуться или наклониться, чтобы поднять с пола какой-либо предмет?",
                    'q17_6' => "Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Подняться с пола, при этом ни за что не держась?",
                    'q17_7' => "Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Подняться с низкого стула не имеющего подлокотников?",
                    'q17_8' => "Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Перейти из положения сидя в положение стоя?",
                    'q17_9' => "Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Переносить тяжелые предметы (большие пакеты с покупками, кастрюлю, наполненную водой, и т. д.)?",
                    'q17_10' => "Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Открыть бутылку или банку?",
                    'q17_11' => "Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Ездить в общественном транспорте?",
                    'q17_12' => "Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Садиться или выходить из автомобиля?",
                    'q17_13' => "Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Ходить по магазинам?",
                    'q17_14' => "Испытываете ли Вы в настоящее время затруднения при выполнении следующих действий Выполнять домашнюю работу (заправлять постель, пылесосить, гладить, мыть посуду и т. д.)?",
                ];

                // Обрабатываем каждый вопрос
                foreach ($questionTexts as $key => $questionText) {
                    // Получаем ответ на текущий вопрос
                    $answerText = $request->input($key);

                    // Находим вопрос в базе данных
                    $question = Question::where('question_text', $questionText)->first();

                    if ($question && $answerText) {
                        // Находим вариант ответа
                        $answerOption = AnswerOption::where('option_text', $answerText)
                            ->where('question_id', $question->id)
                            ->first();

                        if ($answerOption) {
                            // Записываем ответ в базу
                            $patient->answers()->create([
                                'patient_id' => $patient->id,
                                'question_id' => $question->id,
                                'answer_option_id' => $answerOption->id,
                            ]);
                        }
                    }
                }
                //Вопрос 18
                $questionText18 = "Ограничивает ли слабость в мышцах Ваши движения?";

                $vopros18 = (array) $request->input('vopros18');

                $question18 = Question::where('question_text', $questionText18)->first();
                if ($question18) {
                    foreach ($vopros18 as $answerText18) {
                        // Находим вариант ответа
                        $answerOption18 = AnswerOption::where('option_text', $answerText18)
                            ->where('question_id', $question18->id)
                            ->first();

                        if (!$answerOption18) {
                            continue;
                        }

                        // Записываем ответ в базу
                        $patient->answers()->create([
                            'patient_id' => $patient->id,
                            'question_id' => $question18->id,
                            'answer_option_id' => $answerOption18->id,
                        ]);
                    }
                }
                //Вопрос 19
                $questionText19 = "Если на вопрос 18 вы ответили «Да», то назовите причины (выберите любое количество ответов)";

                // Находим вопрос
                $question19 = Question::where('question_text', $questionText19)->first();
                if ($question19) {
                    foreach ($request->input('vopros19', []) as $answerText19) {
                        // Находим вариант ответа
                        $answerOption19 = AnswerOption::where('option_text', $answerText19)
                            ->where('question_id', $question19->id)
                            ->first();

                        if (!$answerOption19) {
                            continue; // Пропускаем, если варианта ответа нет
                        }

                        // Записываем ответ в базу
                        $patient->answers()->create([
                            'patient_id' => $patient->id,
                            'question_id' => $question19->id,
                            'answer_option_id' => $answerOption19->id,
                        ]);
                    }
                }
                //Вопрос 20
                $questionText20 = "Ограничивает ли мышечная слабость Вашу сексуальную активность?";

                $vopros20 = (array) $request->input('vopros20');

                $question20 = Question::where('question_text', $questionText20)->first();
                if ($question20) {
                    foreach ($vopros20 as $answerText20) {
                        // Находим вариант ответа
                        $answerOption20 = AnswerOption::where('option_text', $answerText20)
                            ->where('question_id', $question20->id)
                            ->first();

                        if (!$answerOption20) {
                            continue;
                        }

                        // Записываем ответ в базу
                        $patient->answers()->create([
                            'patient_id' => $patient->id,
                            'question_id' => $question20->id,
                            'answer_option_id' => $answerOption20->id,
                        ]);
                    }
                }

                //Вопрос 21
                $questionText21 = "Как изменилось выполнение Вами физических упражнений / участие в спортивных мероприятиях?";

                $vopros21 = (array) $request->input('vopros21');

                $question21 = Question::where('question_text', $questionText21)->first();
                if ($question21) {
                    foreach ($vopros21 as $answerText21) {
                        // Находим вариант ответа
                        $answerOption21 = AnswerOption::where('option_text', $answerText21)
                            ->where('question_id', $question21->id)
                            ->first();

                        if (!$answerOption21) {
                            continue;
                        }

                        // Записываем ответ в базу
                        $patient->answers()->create([
                            'patient_id' => $patient->id,
                            'question_id' => $question21->id,
                            'answer_option_id' => $answerOption21->id,
                        ]);
                    }
                }
                //Вопрос 22
                $questionText22 = "Как изменился Ваш досуг (поход в гости, садоводство, мелкий ремонт по дому – починить кран, подклеить обои, творчество, охота/рыбалка, общение по интересам, игры в карты, прогулки и т. д.)?";

                $vopros22 = (array) $request->input('vopros22');

                $question22 = Question::where('question_text', $questionText22)->first();
                if ($question22) {
                    foreach ($vopros22 as $answerText22) {
                        // Находим вариант ответа
                        $answerOption22 = AnswerOption::where('option_text', $answerText22)
                            ->where('question_id', $question22->id)
                            ->first();

                        if (!$answerOption22) {
                            continue;
                        }

                        // Записываем ответ в базу
                        $patient->answers()->create([
                            'patient_id' => $patient->id,
                            'question_id' => $question22->id,
                            'answer_option_id' => $answerOption22->id,
                        ]);
                    }
                }
                $patient->calculateTotalPoints();
                $totalPoints = $patient->total_points;
                $message = 'Данные успешно сохранены.';
            }
        }

        return Inertia::render('Articles/Index', compact('message', 'totalPoints'));
    }
}
