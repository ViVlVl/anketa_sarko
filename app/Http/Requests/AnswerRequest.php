<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnswerRequest extends FormRequest
{

    public function rules(): array
    {
        //dd($this->all());
        return [
            'personal_info' => 'required|array',
            'personal_info.fio' => 'required|string',
            'personal_info.dbirth' => 'required|date',
            'personal_info.gender' => 'required|string',
            'personal_info.adres' => 'required|string',
            'personal_info.telephone' => 'required|string',
            'personal_info.smok' => 'required|string',
            'personal_info.fizactiv' => 'required|string',
            'personal_info.sport' => 'nullable|string',
            'personal_info.sportType' => 'nullable|string',
            'personal_info.sportDuration' => 'nullable|string',
            'personal_info.longlife' => 'required|string',
            'personal_info.eat' => 'required|string',
            'personal_info.travm_5' => 'required|string',
            'personal_info.bezdvich' => 'required|string',
            'personal_info.krov' => 'nullable',
            'personal_info.preparat' => 'nullable|string',
            'personal_info.musklslabost' => 'required',
            'personal_info.utomlaemost' => 'required',

            'vopros1' => 'required|array',
            'vopros1.Сила рук' => 'required|string',
            'vopros1.Сила ног' => 'required|string',
            'vopros1.Мышечная масса' => 'required|string',
            'vopros1.Энергия' => 'required|string',
            'vopros1.Физические возможности' => 'required|string',
            'vopros1.Ловкость' => 'required|string',

            'vopros2' => 'required|array',
            'vopros2.bolmuskl' => 'required|string',

            'vopros3' => 'required|array',
            "vopros3.trudnost" => 'required|string',
            "vopros3.ustalost" => 'required|string',
            "vopros3.bol" => 'required|string',

            "vopros4" => 'required|array',
            "vopros4.ustalost" => 'required|string',
            "vopros4.bol" => 'required|string',
            "vopros4.trudnost" => 'required|string',

            'vopros5' => 'required|array',
            'vopros5.ustalost' => 'required|string',
            'vopros5.bol' => 'required|string',
            'vopros5.trudnost' => 'required|string',

            'vopros6' => 'required|array',
            'vopros6.feel_old' => 'required|string',

            'vopros7' => 'required',

            'vopros8' => 'required',

            'vopros9' => 'required|array',
            'vopros9.Продолжительность' => 'required|string',
            'vopros9.Частота' => 'required|string',
            'vopros9.Расстояние' => 'required|string',
            'vopros9.Скорость' => 'required|string',
            'vopros9.Шаг' => 'required|string',

            'vopros10' => 'required|array',
            'vopros10.Я не могу гулять' => 'required|string',
            'vopros10.Чувствуете ли Вы себя очень уставшим?' => 'required|string',
            'vopros10.Вынуждены ли Вы садиться, чтобы отдохнуть?' => 'required|string',
            'vopros10.Сложно ли Вам достаточно быстро перейти улицу?' => 'required|string',
            'vopros10.Сложно ли Вам ходить по неровной поверхности?' => 'required|string',

            'vopros11' => 'required',

            'vopros12' => 'required',

            'vopros13' => 'required',

            'vopros14' => 'required',

            'vopros15' => 'required',

            'vopros16' => 'required',

            'q17_1' => 'required',
            'q17_2' => 'required',
            'q17_3' => 'required',
            'q17_4' => 'required',
            'q17_5' => 'required',
            'q17_6' => 'required',
            'q17_7' => 'required',
            'q17_8' => 'required',
            'q17_9' => 'required',
            'q17_10' => 'required',
            'q17_11' => 'required',
            'q17_12' => 'required',
            'q17_13' => 'required',
            'q17_14' => 'required',

            'vopros18' => 'required',

            'vopros19' => 'required',

            'vopros20' => 'required',

            'vopros21' => 'required',

            'vopros22' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'personal_info.fio.required' => 'Поле ФИО обязательно для заполнения',
            'personal_info.dbirth.required' => 'Поле Дата рождения обязательно для заполнения',
            'personal_info.gender.required' => 'Поле Пол обязательно для заполнения',
            'personal_info.adres.required' => 'Поле Адрес обязательно для заполнения',
            'personal_info.telephone.required' => 'Поле Телефон обязательно для заполнения',
            'personal_info.smok.required' => 'Поле Курение обязательно для заполнения',
            'personal_info.fizactiv.required' => 'Поле Физическая активность обязательно для заполнения',
            'personal_info.sport.required' => 'Поле Занимаетесь ли спортом? обязательно для заполнения',
            'personal_info.sportType.required' => 'Поле Какой вид спорта? обязательно для заполнения',
            'personal_info.sportDuration.required' => 'Поле Как долго занимаетесь спортом? обязательно для заполнения',
            'personal_info.longlife.required' => 'Поле Долгожитель? обязательно для заполнения',
            'personal_info.eat.required' => 'Поле Какое питание? обязательно для заполнения',
            'personal_info.travm_5.required' => 'Поле Травмы за последние 5 лет? обязательно для заполнения',
            'personal_info.bezdvich.required' => 'Поле Обездвиживание? обязательно для заполнения',
            'personal_info.krov.required' => 'Поле Кровь? обязательно для заполнения',
            'personal_info.preparat.required' => 'Поле Принимаете ли препараты? обязательно для заполнения',
            'personal_info.musklslabost.required' => 'Поле Мышечная слабость? обязательно для заполнения',
            'personal_info.utomlaemost.required' => 'Поле Утомляемость? обязательно для заполнения',

            'vopros1.Сила рук.required' => 'Поле Сила рук обязательно для заполнения',
            'vopros1.Сила ног.required' => 'Поле Сила ног обязательно для заполнения',
            'vopros1.Мышечная масса.required' => 'Поле Мышечная масса обязательно для заполнения',
            'vopros1.Энергия.required' => 'Поле Энергия обязательно для заполнения',
            'vopros1.Физические возможности.required' => 'Поле Физические возможности обязательно для заполнения',
            'vopros1.Ловкость.required' => 'Поле Ловкость обязательно для заполнения',

            'vopros2.bolmuskl.required' => 'Поле Боль в мышцах обязательно для заполнения',

            'vopros3.trudnost.required' => 'Поле Трудоспособность обязательно для заполнения',
            'vopros3.ustalost.required' => 'Поле Усталость обязательно для заполнения',
            'vopros3.bol.required' => 'Поле Боль обязательно для заполнения',

            'vopros4.ustalost.required' => 'Поле Усталость обязательно для заполнения',
            'vopros4.bol.required' => 'Поле Боль обязательно для заполнения',
            'vopros4.trudnost.required' => 'Поле Трудоспособность обязательно для заполнения',

            'vopros5.ustalost.required' => 'Поле Усталость обязательно для заполнения',
            'vopros5.bol.required' => 'Поле Боль обязательно для заполнения',
            'vopros5.trudnost.required' => 'Поле Трудоспособность обязательно для заполнения',

            'vopros6.feel_old.required' => 'Поле Чувствую себя старым обязательно для заполнения',

            'vopros7.required' => 'Поле Вопрос 7 обязательно для заполнения',

            'vopros8.required' => 'Поле Вопрос 8 обязательно для заполнения',

            'vopros9.Продолжительность.required' => 'Поле Продолжительность обязательно для заполнения',
            'vopros9.Частота.required' => 'Поле Частота обязательно для заполнения',
            'vopros9.Расстояние.required' => 'Поле Расстояние обязательно для заполнения',
            'vopros9.Скорость.required' => 'Поле Скорость обязательно для заполнения',
            'vopros9.Шаг.required' => 'Поле Шаг обязательно для заполнения',

            'vopros10.Я не могу гулять.required' => 'Поле Я не могу гулять обязательно для заполнения',
            'vopros10.Чувствуете ли Вы себя очень уставшим?.required' => 'Поле Чувствуете ли Вы себя очень уставшим? обязательно для заполнения',
            'vopros10.Вынуждены ли Вы садиться, чтобы отдохнуть?.required' => 'Поле Вынуждены ли Вы садиться, чтобы отдохнуть? обязательно для заполнения',
            'vopros10.Сложно ли Вам достаточно быстро перейти улицу?.required' => 'Поле Вынуждены ли Вы останавливаться, чтобы отдохнуть? обязательно для заполнения',
            'vopros10.Сложно ли Вам ходить по неровной поверхности?' => 'Поле Вынуждены ли Вы останавливаться, чтобы отдохнуть? обязательно для заполнения',

            'vopros11.required' => 'Поле Вопрос 11 обязательно для заполнения',

            'vopros12.required' => 'Поле Вопрос 12 обязательно для заполнения',

            'vopros13.required' => 'Поле Вопрос 13 обязательно для заполнения',

            'vopros14.required' => 'Поле Вопрос 14 обязательно для заполнения',

            'vopros15.required' => 'Поле Вопрос 15 обязательно для заполнения',

            'vopros16.required' => 'Поле Вопрос 16 обязательно для заполнения',

            'q17_1.required' => 'Поле Вопрос 17_1 обязательно для заполнения',
            'q17_2.required' => 'Поле Вопрос 17 обязательно для заполнения',
            'q17_3.required' => 'Поле Вопрос 17 обязательно для заполнения',
            'q17_4.required' => 'Поле Вопрос 17 обязательно для заполнения',
            'q17_5.required' => 'Поле Вопрос 17 обязательно для заполнения',
            'q17_6.required' => 'Поле Вопрос 17 обязательно для заполнения',
            'q17_7.required' => 'Поле Вопрос 17 обязательно для заполнения',
            'q17_8.required' => 'Поле Вопрос 17 обязательно для заполнения',
            'q17_9.required' => 'Поле Вопрос 17 обязательно для заполнения',
            'q17_10.required' => 'Поле Вопрос 17 обязательно для заполнения',
            'q17_11.required' => 'Поле Вопрос 17 обязательно для заполнения',
            'q17_12.required' => 'Поле Вопрос 17 обязательно для заполнения',
            'q17_13.required' => 'Поле Вопрос 17 обязательно для заполнения',
            'q17_14.required' => 'Поле Вопрос 17 обязательно для заполнения',

            'vopros18.required' => 'Поле Вопрос 18 обязательно для заполнения',

            'vopros19.required' => 'Поле Вопрос 19 обязательно для заполнения',

            'vopros20.required' => 'Поле Вопрос 20 обязательно для заполнения',

            'vopros21.required' => 'Поле Вопрос 21 обязательно для заполнения',

            'vopros22.required' => 'Поле Вопрос 22 обязательно для заполнения',

        ];
    }
}
