<template>
    <div class="p-6">
        <!-- Личные данные-->
        <div class="space-y-4">
            <!-- Информация -->
            <p
                class="font-semibold text-lg mb-4 before:content-['•'] before:mr-1"
            >
                Заполнение согласия на участие в исследовании.
            </p>
            <p
                class="font-semibold text-lg mb-4 before:content-['•'] before:mr-1"
            >
                Анкетирование.
            </p>
        </div>
        <!-- Таблица с данными пользователя -->
        <div class="grid grid-cols-4 gap-4 mb-4 ml-20">
            <div class="border border-gray-400 p-4 bg-blue-100">
                <p>Пациент №</p>
                <p>(лица старше 45 лет)</p>

                <div class="grid grid-cols-[65px_1fr] items-center gap-2 mt-2">
                    <label
                        for="fio"
                        class="text-sm font-medium text-gray-700 text-right"
                        >ФИО:</label
                    >
                    <input
                        type="text"
                        id="fio"
                        v-model="personal_info.fio"
                        required
                        class="border border-gray-300 rounded-md p-2 w-full text-sm"
                        placeholder="Фамилия Имя Отчество"
                    />

                    <label
                        for="dbirth"
                        class="text-sm font-medium text-gray-700 text-right"
                        >Дата рождения:</label
                    >
                    <input
                        type="date"
                        id="dbirth"
                        v-model="personal_info.dbirth"
                        required
                        class="border border-gray-300 rounded-md p-2 w-full text-sm"
                    />

                    <label
                        for="gender"
                        class="text-sm font-medium text-gray-700 text-right"
                        >Пол:</label
                    >
                    <select
                        id="gender"
                        v-model="personal_info.gender"
                        required
                        class="border border-gray-300 rounded-md p-2 w-full text-sm"
                    >
                        <option>Мужской</option>
                        <option>Женский</option>
                    </select>

                    <label
                        for="adres"
                        class="text-sm font-medium text-gray-700 text-right"
                        >Адрес:</label
                    >
                    <input
                        type="text"
                        id="adres"
                        v-model="personal_info.adres"
                        required
                        class="border border-gray-300 rounded-md p-2 w-full text-sm"
                        placeholder="Адрес"
                    />

                    <label
                        for="telephone"
                        class="text-sm font-medium text-gray-700 text-right"
                        >Телефон:</label
                    >
                    <input
                        type="text"
                        @input="formatPhone"
                        id="telephone"
                        v-model="personal_info.telephone"
                        required
                        class="border border-gray-300 rounded-md p-2 w-full text-sm"
                        placeholder="Телефон"
                    />

                    <label
                        for="smok"
                        class="text-sm font-medium text-gray-700 text-right"
                        >Курение:</label
                    >
                    <select
                        id="smok"
                        v-model="personal_info.smok"
                        required
                        class="border border-gray-300 rounded-md p-2 w-full text-sm"
                    >
                        <option>Да</option>
                        <option>Нет</option>
                    </select>
                </div>
            </div>

            <!-- Физическая активность -->
            <div class="border border-gray-400 p-4 bg-green-100">
                <label
                    for="fizactiv"
                    class="text-l font-medium text-gray-700 text-right"
                    >Физическая активность:</label
                >
                <select
                    id="fizactiv"
                    v-model="personal_info.fizactiv"
                    required
                    class="border border-gray-300 rounded-md p-2 w-full text-sm"
                >
                    <option>Физически неактивные(менее 30 минут в день)</option>
                    <option>Низкая(30-60 минут в день)</option>
                    <option>Средняя(60-90 минут в день)</option>
                    <option>Высокая(более 90 минут в день)</option>
                </select>
                <label
                    for="sport"
                    class="text-l font-medium text-gray-700 text-right"
                    >Занимаетесь ли спортом?</label
                >
                <select
                    id="sport"
                    v-model="personal_info.sport"
                    required
                    class="border border-gray-300 rounded-md p-2 w-full text-sm"
                >
                    <option value="sport-da">Да</option>
                    <option value="sport-net">Нет</option>
                </select>
                <!-- Поле "Каким спортом?" -->
                <label
                    v-if="personal_info.sport === 'sport-da'"
                    for="sport-type"
                    class="text-l font-medium text-gray-700 text-right"
                    >Каким спортом?</label
                >
                <input
                    v-if="personal_info.sport === 'sport-da'"
                    type="text"
                    id="sport-type"
                    v-model="personal_info.sportType"
                    class="border border-gray-300 rounded-md p-2 w-full text-sm"
                    placeholder="Например, бег, плавание"
                />

                <!-- Поле "Как давно?" -->
                <label
                    v-if="personal_info.sport === 'sport-da'"
                    for="sport-duration"
                    class="text-l font-medium text-gray-700 text-right"
                    >Как давно?</label
                >
                <input
                    v-if="personal_info.sport === 'sport-da'"
                    type="text"
                    id="sport-duration"
                    v-model="personal_info.sportDuration"
                    class="border border-gray-300 rounded-md p-2 w-full text-sm"
                    placeholder="Например, 2 года"
                />

                <label
                    for="how-long"
                    class="text-sm font-medium text-gray-700 text-right"
                    >Сколько лет проживаете в г.Тюмень?
                </label>
                <input
                    type="text"
                    id="how-long"
                    v-model="personal_info.howlong"
                    class="border border-gray-300 rounded-md p-2 w-full text-sm"
                    placeholder="Например, 2 года"
                />

                <label
                    for="how-what"
                    class="text-sm font-medium text-gray-700 text-right"
                    >Если приехал с другой территории то когда и откуда?
                </label>
                <input
                    type="text"
                    id="how-long"
                    v-model="personal_info.howareyou"
                    class="border border-gray-300 rounded-md p-2 w-full text-sm"
                    placeholder="Например, из г.Тобольск в 1978"
                />

                <label
                    for="uslovia"
                    class="text-sm font-medium text-gray-700 text-right"
                    >Условия проживания:</label
                >
                <select
                    id="uslovia"
                    v-model="personal_info.uslovia"
                    required
                    class="border border-gray-300 rounded-md p-2 w-full text-sm"
                >
                    <option>с мужем/женой/детьми/внуками</option>
                    <option>Проживаю один</option>
                </select>
            </div>

            <!-- Долгожители -->
            <div class="border border-gray-400 p-4 bg-red-100">
                <label
                    for="longlife"
                    class="text-sm font-medium text-gray-700 text-right"
                    >Есть ли долгожители по семейной линии?</label
                >
                <select
                    id="longlife"
                    v-model="personal_info.longlife"
                    required
                    class="border border-gray-300 rounded-md p-2 w-full text-sm"
                >
                    <option>Да</option>
                    <option>Нет</option>
                </select>
                <label
                    for="eat"
                    class="text-sm font-medium text-gray-700 text-right"
                    >Особенности питания:</label
                >
                <select
                    id="eat"
                    v-model="personal_info.eat"
                    required
                    class="border border-gray-300 rounded-md p-2 w-full text-sm"
                >
                    <option>Традиционное смешанное питание</option>
                    <option>Раздельное питание</option>
                    <option>Сыроединие</option>
                    <option>Вегетарианское питание</option>
                    <option>Фрукторианское питание</option>
                    <option>Другое</option>
                </select>
                <label
                    for="history-bolezn"
                    class="text-sm font-medium text-gray-700 text-right"
                    >Перенесенные заболевания,операции,травмы за последниее 5
                    лет:</label
                >
                <input
                    type="text"
                    id="history-bolezn"
                    v-model="personal_info.travm_5"
                    class="border border-gray-300 rounded-md p-2 w-full text-sm"
                    placeholder="Например, сломал ногу, болел короновирусом"
                />
                <label
                    for="bezdvich"
                    class="text-sm font-medium text-gray-700 text-right"
                    >Был ли за последние 5 лет период обездвиживания:</label
                >
                <select
                    id="bezdvich"
                    v-model="personal_info.bezdvich"
                    required
                    class="border border-gray-300 rounded-md p-2 w-full text-sm"
                >
                    <option>Да</option>
                    <option>Нет</option>
                </select>
            </div>

            <!-- Хронические болезни -->

            <div class="border border-gray-400 p-4 bg-yellow-100">
                <p class="text-sm font-medium text-gray-700">
                    Хронические болезни:
                </p>

                <div class="flex items-center gap-2">
                    <input
                        type="checkbox"
                        id="krov"
                        v-model="personal_info.krov"
                        class="w-4 h-4"
                    />
                    <label for="krov" class="text-sm text-gray-700"
                        >Болезни системы кровообращения</label
                    >
                </div>

                <div class="flex items-center gap-2">
                    <input
                        type="checkbox"
                        id="dihania"
                        v-model="personal_info.dihania"
                        class="w-4 h-4"
                    />
                    <label for="dihania" class="text-sm text-gray-700"
                        >Болезни органов дыхания</label
                    >
                </div>

                <div class="flex items-center gap-2">
                    <input
                        type="checkbox"
                        id="endokrin"
                        v-model="personal_info.endokrin"
                        class="w-4 h-4"
                    />
                    <label for="endokrin" class="text-sm text-gray-700"
                        >Болезни эндокринной системы</label
                    >
                </div>

                <div class="flex items-center gap-2">
                    <input
                        type="checkbox"
                        id="onkologia"
                        v-model="personal_info.onkologia"
                        class="w-4 h-4"
                    />
                    <label for="onkologia" class="text-sm text-gray-700"
                        >Онкологические заболевания</label
                    >
                </div>

                <div class="flex items-center gap-2">
                    <input
                        type="checkbox"
                        id="drugoe"
                        v-model="personal_info.drugoe"
                        class="w-4 h-4"
                    />
                    <label for="drugoe" class="text-sm text-gray-700"
                        >Другое</label
                    >
                </div>

                <label
                    for="preparat"
                    class="text-sm font-medium text-gray-700 text-right"
                    >Какие лекарственные препараты принимаете в настоящее
                    время:</label
                >
                <input
                    type="text"
                    id="preparat"
                    v-model="personal_info.preparat"
                    class="border border-gray-300 rounded-md p-2 w-full text-sm"
                    placeholder="Например, аспирин, мелдронат"
                />
                <p class="text-sm font-medium text-gray-700">Жалобы на:</p>
                <label
                    for="muskl-slabost"
                    class="text-sm font-medium text-gray-700 text-right"
                    >Мышечная слабость</label
                >
                <select
                    id="muskl-slabost"
                    v-model="personal_info.musklslabost"
                    required
                    class="border border-gray-300 rounded-md p-2 w-full text-sm"
                >
                    <option>Да</option>
                    <option>Нет</option>
                </select>
                <label
                    for="muskl-slabost"
                    class="text-sm font-medium text-gray-700 text-right"
                    >Быстрая утомляемость при физической нагрузке</label
                >
                <select
                    id="utomlaemost"
                    v-model="personal_info.utomlaemost"
                    required
                    class="border border-gray-300 rounded-md p-2 w-full text-sm"
                >
                    <option>Да</option>
                    <option>Нет</option>
                </select>
            </div>
        </div>
    </div>
    <div class="max-w-3xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-6">
        <h1 class="text-3xl font-semibold text-center text-gray-800 mb-8">
            Опросник Сарко-скрин
        </h1>

        <p class="text-lg text-gray-700 mb-6 first-line:indent-5">
            Этот опросник задает вопросы о саркопении – мышечной слабости,
            появляющейся с возрастом. Саркопения может оказывать влияние на Вашу
            повседневную жизнь.
        </p>
        <p class="text-lg text-gray-700 mb-6">
            Это исследование позволит нам выявить, как состояние Ваших мышц
            влияет на качество Вашей жизни.
        </p>

        <p class="text-lg text-gray-700 mb-8">
            Пожалуйста, выберите наиболее подходящий ответ на каждый вопрос.
            Заполнение опросника займет у Вас примерно 10 минут.
        </p>

        <div class="bg-blue-100 text-blue-800 p-4 rounded-lg mt-8">
            <p class="font-semibold mb-2">Важная информация:</p>
            <p>
                Пожалуйста, не спешите и отвечайте на вопросы внимательно, чтобы
                мы могли предоставить наиболее точные рекомендации.
            </p>
        </div>
    </div>
    <div class="p-6">
        <!-- Вопрос 1 -->
        <div class="space-y-4">
            <p class="font-semibold text-lg mb-4">
                1. Чувствуете ли Вы в настоящее время, что у Вас есть снижение:
            </p>
            <div class="grid grid-cols-5 grid-rows-7 gap-2 mb-4 ml-20">
                <!-- Заголовки категорий -->
                <div
                    v-for="(label, index) in categories"
                    :key="'cat-' + index"
                    class="text-left"
                    :style="{ gridRowStart: index + 2, gridColumnStart: 1 }"
                >
                    <p class="font-semibold text-md">{{ label }}</p>
                </div>

                <!-- Заголовки колонок (варианты ответов) -->
                <div
                    v-for="(option, colIndex) in options"
                    :key="'opt-' + colIndex"
                    class="text-center"
                    :style="{ gridRowStart: 1, gridColumnStart: colIndex + 2 }"
                >
                    <p class="font-semibold text-md">{{ option.label }}</p>
                </div>

                <!-- Радиокнопки -->
                <template v-for="(label, rowIndex) in categories">
                    <div
                        v-for="(option, colIndex) in options"
                        :key="'input-' + rowIndex + '-' + colIndex"
                        class="text-center"
                        :style="{
                            gridRowStart: rowIndex + 2,
                            gridColumnStart: colIndex + 2,
                        }"
                    >
                        <input
                            type="radio"
                            :name="label"
                            :id="`${label}-${option.value}`"
                            :value="option.value"
                            v-model="vopros1[label]"
                        />
                    </div>
                </template>
            </div>
        </div>

        <div class="space-y-4 mt-4">
            <!-- Вопрос 2 -->
            <p class="font-semibold text-lg mb-4">
                2. Ощущаете ли Вы боль в мышцах?
            </p>
            <div class="grid grid-cols-4 grid-rows-1 gap-2 mb-4 ml-20">
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="bol-muskl-0"
                        name="bolmuskl"
                        value="0"
                        v-model="vopros2.bolmuskl"
                    />
                    <label for="bol-muskl-0" class="text-lm text-gray-700"
                        >Часто</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="bol-muskl-1"
                        name="bolmuskl"
                        value="1"
                        v-model="vopros2.bolmuskl"
                    />
                    <label for="bol-muskl-1" class="text-lm text-gray-700"
                        >Иногда</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="bol-muskl-2"
                        name="bolmuskl"
                        value="2"
                        v-model="vopros2.bolmuskl"
                    />
                    <label for="bol-muskl-2" class="text-lm text-gray-700"
                        >Редко</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="bol-muskl-3"
                        name="bolmuskl"
                        value="3"
                        v-model="vopros2.bolmuskl"
                    />
                    <label for="bol-muskl-3" class="text-lm text-gray-700"
                        >Никогда</label
                    >
                </div>
            </div>
        </div>

        <div class="space-y-4 mt-4">
            <!-- Вопрос 3 -->
            <p class="font-semibold text-lg mb-4">
                3. При легкой физической нагрузке (медленно ходить, гладить
                белье, вытирать пыль, мыть посуду, выполнять мелкий ремонт по
                дому – починить кран, подклеить обои; поливать в огороде и др.)
                испытываете ли Вы:
            </p>
            <!-- Таблица -->
            <div class="grid grid-cols-6 grid-rows-4 gap-2 mb-4 ml-20">
                <!-- Варианты ответов вынесены наверх с сдвигом -->
                <div class="text-left row-start-2 col-start-1">
                    <p class="font-semibold text-md">Трудности?</p>
                </div>
                <div class="text-left row-start-3 col-start-1">
                    <p class="font-semibold text-md">Устаете?</p>
                </div>
                <div class="text-left row-start-4 col-start-1">
                    <p class="font-semibold text-md">Чувствуете боль?</p>
                </div>

                <!-- Часто (0) -->
                <div class="text-center row-start-1 col-start-2">
                    <p class="font-semibold text-md">Часто</p>
                </div>

                <div class="text-center row-start-2 col-start-2">
                    <input
                        type="radio"
                        id="tr_um_nagruzka-0"
                        name="tr_um_nagruzka"
                        value="0"
                        v-model="vopros3.trudnost"
                    />
                </div>

                <div class="text-center row-start-3 col-start-2">
                    <input
                        type="radio"
                        id="ust_um_nagruzka-0"
                        name="ust_um_nagruzka"
                        value="0"
                        v-model="vopros3.ustalost"
                    />
                </div>

                <div class="text-center row-start-4 col-start-2">
                    <input
                        type="radio"
                        id="muskl-0"
                        name="muskl"
                        value="0"
                        v-model="vopros3.bol"
                    />
                </div>

                <!-- Временами (1) -->
                <div class="text-center row-start-1 col-start-3">
                    <p class="font-semibold text-md">Временами</p>
                </div>

                <div class="text-center row-start-2 col-start-3">
                    <input
                        type="radio"
                        id="tr_um_nagruzka-1"
                        name="tr_um_nagruzka"
                        value="1"
                        v-model="vopros3.trudnost"
                    />
                </div>

                <div class="text-center row-start-3 col-start-3">
                    <input
                        type="radio"
                        id="ust_um_nagruzka-1"
                        name="ust_um_nagruzka"
                        value="1"
                        v-model="vopros3.ustalost"
                    />
                </div>

                <div class="text-center row-start-4 col-start-3">
                    <input
                        type="radio"
                        id="muskl-1"
                        name="muskl"
                        value="1"
                        v-model="vopros3.bol"
                    />
                </div>

                <!-- Редко (2) -->
                <div class="text-center row-start-1 col-start-4">
                    <p class="font-semibold text-md">Редко</p>
                </div>

                <div class="text-center row-start-2 col-start-4">
                    <input
                        type="radio"
                        id="tr_um_nagruzka-2"
                        name="tr_um_nagruzka"
                        value="2"
                        v-model="vopros3.trudnost"
                    />
                </div>

                <div class="text-center row-start-3 col-start-4">
                    <input
                        type="radio"
                        id="ust_um_nagruzka-2"
                        name="ust_um_nagruzka"
                        value="2"
                        v-model="vopros3.ustalost"
                    />
                </div>

                <div class="text-center row-start-4 col-start-4">
                    <input
                        type="radio"
                        id="muskl-2"
                        name="muskl"
                        value="2"
                        v-model="vopros3.bol"
                    />
                </div>

                <!-- Никогда (3) -->
                <div class="text-center row-start-1 col-start-5">
                    <p class="font-semibold text-md">Никогда</p>
                </div>

                <div class="text-center row-start-2 col-start-5">
                    <input
                        type="radio"
                        id="tr_um_nagruzka-3"
                        name="tr_um_nagruzka"
                        value="3"
                        v-model="vopros3.trudnost"
                    />
                </div>

                <div class="text-center row-start-3 col-start-5">
                    <input
                        type="radio"
                        id="ust_um_nagruzka-3"
                        name="ust_um_nagruzka"
                        value="3"
                        v-model="vopros3.ustalost"
                    />
                </div>

                <div class="text-center row-start-4 col-start-5">
                    <input
                        type="radio"
                        id="muskl-3"
                        name="muskl"
                        value="3"
                        v-model="vopros3.bol"
                    />
                </div>

                <!-- Никогда (4) -->
                <div class="text-center row-start-1 col-start-6">
                    <p class="font-semibold text-md">
                        Я не выполняю эти типы физической активности
                    </p>
                </div>

                <div class="text-center row-start-2 col-start-6">
                    <input
                        type="radio"
                        id="tr_um_nagruzka-4"
                        name="tr_um_nagruzka"
                        value="4"
                        v-model="vopros3.trudnost"
                    />
                </div>

                <div class="text-center row-start-3 col-start-6">
                    <input
                        type="radio"
                        id="ust_um_nagruzka-4"
                        name="ust_um_nagruzka"
                        value="4"
                        v-model="vopros3.ustalost"
                    />
                </div>

                <div class="text-center row-start-4 col-start-6">
                    <input
                        type="radio"
                        id="muskl-4"
                        name="muskl"
                        value="4"
                        v-model="vopros3.bol"
                    />
                </div>
            </div>
        </div>

        <div class="space-y-4 mp-4">
            <!-- Вопрос 4 -->
            <p class="font-semibold text-lg mb-4">
                4. При умеренной физической нагрузке (быстро ходить, мыть окна,
                пылесосить, мыть машину, полоть сорняки в огороде и др.),
                испытываете ли Вы:
            </p>
            <!-- Таблица -->
            <div class="grid grid-cols-6 grid-rows-4 gap-2 mb-4 ml-20">
                <!-- Варианты ответов вынесены наверх с сдвигом -->
                <div class="text-left row-start-2 col-start-1">
                    <p class="font-semibold text-md">Трудности?</p>
                </div>
                <div class="text-left row-start-3 col-start-1">
                    <p class="font-semibold text-md">Устаете?</p>
                </div>
                <div class="text-left row-start-4 col-start-1">
                    <p class="font-semibold text-md">Чувствуете боль?</p>
                </div>

                <!-- Часто (0) -->
                <div class="text-center row-start-1 col-start-2">
                    <p class="font-semibold text-md">Часто</p>
                </div>

                <div class="text-center row-start-2 col-start-2">
                    <input
                        type="radio"
                        id="tr_um_nagruzka-0"
                        name="um_nagruzka-0"
                        value="0"
                        v-model="vopros4.trudnost"
                    />
                </div>

                <div class="text-center row-start-3 col-start-2">
                    <input
                        type="radio"
                        id="ust_um_nagruzka-0"
                        name="ust_um_nagruzka"
                        value="0"
                        v-model="vopros4.ustalost"
                    />
                </div>

                <div class="text-center row-start-4 col-start-2">
                    <input
                        type="radio"
                        id="muskl-0"
                        name="muskl"
                        value="0"
                        v-model="vopros4.bol"
                    />
                </div>

                <!-- Временами (1) -->
                <div class="text-center row-start-1 col-start-3">
                    <p class="font-semibold text-md">Временами</p>
                </div>

                <div class="text-center row-start-2 col-start-3">
                    <input
                        type="radio"
                        id="strength-hands-1"
                        name="strength-arms-0"
                        value="1"
                        v-model="vopros4.trudnost"
                    />
                </div>

                <div class="text-center row-start-3 col-start-3">
                    <input
                        type="radio"
                        id="strength-hands-1"
                        name="strength-arms-1"
                        value="1"
                        v-model="vopros4.ustalost"
                    />
                </div>

                <div class="text-center row-start-4 col-start-3">
                    <input
                        type="radio"
                        id="muskl-1"
                        name="muskl-1"
                        value="1"
                        v-model="vopros4.bol"
                    />
                </div>

                <!-- Редко (2) -->
                <div class="text-center row-start-1 col-start-4">
                    <p class="font-semibold text-md">Редко</p>
                </div>

                <div class="text-center row-start-2 col-start-4">
                    <input
                        type="radio"
                        id="strength-hands-2"
                        name="strength-arms-2"
                        value="2"
                        v-model="vopros4.trudnost"
                    />
                </div>

                <div class="text-center row-start-3 col-start-4">
                    <input
                        type="radio"
                        id="strength-hands-2"
                        name="strength-arms-3"
                        value="2"
                        v-model="vopros4.ustalost"
                    />
                </div>

                <div class="text-center row-start-4 col-start-4">
                    <input
                        type="radio"
                        id="muskl-2"
                        name="muskl-2"
                        value="2"
                        v-model="vopros4.bol"
                    />
                </div>

                <!-- Никогда (3) -->
                <div class="text-center row-start-1 col-start-5">
                    <p class="font-semibold text-md">Никогда</p>
                </div>

                <div class="text-center row-start-2 col-start-5">
                    <input
                        type="radio"
                        id="strength-hands-3"
                        name="strength-arms-4"
                        value="3"
                        v-model="vopros4.trudnost"
                    />
                </div>

                <div class="text-center row-start-3 col-start-5">
                    <input
                        type="radio"
                        id="strength-hands-3"
                        name="strength-arms-5"
                        value="3"
                        v-model="vopros4.ustalost"
                    />
                </div>

                <div class="text-center row-start-4 col-start-5">
                    <input
                        type="radio"
                        id="muskl-3"
                        name="muskl-3"
                        value="3"
                        v-model="vopros4.bol"
                    />
                </div>

                <!-- Никогда (4) -->
                <div class="text-center row-start-1 col-start-6">
                    <p class="font-semibold text-md">
                        Я не выполняю эти типы физической активности
                    </p>
                </div>

                <div class="text-center row-start-2 col-start-6">
                    <input
                        type="radio"
                        id="strength-hands-4"
                        name="strength-arms-6"
                        value="4"
                        v-model="vopros4.trudnost"
                    />
                </div>

                <div class="text-center row-start-3 col-start-6">
                    <input
                        type="radio"
                        id="strength-hands-4"
                        name="strength-arms-7"
                        value="4"
                        v-model="vopros4.ustalost"
                    />
                </div>

                <div class="text-center row-start-4 col-start-6">
                    <input
                        type="radio"
                        id="muskl-4"
                        name="muskl-4"
                        value="4"
                        v-model="vopros4.bol"
                    />
                </div>
            </div>
        </div>

        <div class="space-y-4 mt-4">
            <!-- Вопрос 5 -->
            <p class="font-semibold text-lg mb-4">
                5. При интенсивной физической нагрузке (бег, поход на экскурсию,
                подъем тяжелых предметов, передвижение мебели, вскапывание в
                огороде и др.), испытываете ли Вы:
            </p>
            <!-- Таблица -->
            <div class="grid grid-cols-6 grid-rows-4 gap-2 mb-4 ml-20">
                <!-- Варианты ответов вынесены наверх с сдвигом -->
                <div class="text-left row-start-2 col-start-1">
                    <p class="font-semibold text-md">Трудности?</p>
                </div>
                <div class="text-left row-start-3 col-start-1">
                    <p class="font-semibold text-md">Устаете?</p>
                </div>
                <div class="text-left row-start-4 col-start-1">
                    <p class="font-semibold text-md">Чувствуете боль?</p>
                </div>

                <!-- Часто (0) -->
                <div class="text-center row-start-1 col-start-2">
                    <p class="font-semibold text-md">Часто</p>
                </div>

                <div class="text-center row-start-2 col-start-2">
                    <input
                        type="radio"
                        id="tr_um_nagruzka-0"
                        v-model="vopros5.trudnost"
                        value="0"
                    />
                </div>

                <div class="text-center row-start-3 col-start-2">
                    <input
                        type="radio"
                        id="ust_um_nagruzka-0"
                        v-model="vopros5.ustalost"
                        value="0"
                    />
                </div>

                <div class="text-center row-start-4 col-start-2">
                    <input
                        type="radio"
                        id="ust_um_nagruzka-0"
                        v-model="vopros5.bol"
                        value="0"
                    />
                </div>

                <!-- Временами (1) -->
                <div class="text-center row-start-1 col-start-3">
                    <p class="font-semibold text-md">Временами</p>
                </div>

                <div class="text-center row-start-2 col-start-3">
                    <input
                        type="radio"
                        id="strength-hands-1"
                        v-model="vopros5.trudnost"
                        value="1"
                    />
                </div>

                <div class="text-center row-start-3 col-start-3">
                    <input
                        type="radio"
                        id="strength-legs-1"
                        v-model="vopros5.ustalost"
                        value="1"
                    />
                </div>

                <div class="text-center row-start-4 col-start-3">
                    <input
                        type="radio"
                        id="muskl-0"
                        v-model="vopros5.bol"
                        value="1"
                    />
                </div>

                <!-- Редко (2) -->
                <div class="text-center row-start-1 col-start-4">
                    <p class="font-semibold text-md">Редко</p>
                </div>

                <div class="text-center row-start-2 col-start-4">
                    <input
                        type="radio"
                        id="strength-hands-2"
                        v-model="vopros5.trudnost"
                        value="2"
                    />
                </div>

                <div class="text-center row-start-3 col-start-4">
                    <input
                        type="radio"
                        id="strength-legs-2"
                        v-model="vopros5.ustalost"
                        value="2"
                    />
                </div>

                <div class="text-center row-start-4 col-start-4">
                    <input
                        type="radio"
                        id="muskl-2"
                        v-model="vopros5.bol"
                        value="2"
                    />
                </div>

                <!-- Никогда (3) -->
                <div class="text-center row-start-1 col-start-5">
                    <p class="font-semibold text-md">Никогда</p>
                </div>

                <div class="text-center row-start-2 col-start-5">
                    <input
                        type="radio"
                        id="strength-hands-3"
                        v-model="vopros5.trudnost"
                        value="3"
                    />
                </div>

                <div class="text-center row-start-3 col-start-5">
                    <input
                        type="radio"
                        id="strength-legs-3"
                        v-model="vopros5.ustalost"
                        value="3"
                    />
                </div>

                <div class="text-center row-start-4 col-start-5">
                    <input
                        type="radio"
                        id="muskl-3"
                        v-model="vopros5.bol"
                        value="3"
                    />
                </div>

                <!-- Никогда (4) -->
                <div class="text-center row-start-1 col-start-6">
                    <p class="font-semibold text-md">
                        Я не выполняю эти типы физической активности
                    </p>
                </div>

                <div class="text-center row-start-2 col-start-6">
                    <input
                        type="radio"
                        id="strength-hands-4"
                        v-model="vopros5.trudnost"
                        value="4"
                    />
                </div>

                <div class="text-center row-start-3 col-start-6">
                    <input
                        type="radio"
                        id="strength-legs-4"
                        v-model="vopros5.ustalost"
                        value="4"
                    />
                </div>

                <div class="text-center row-start-4 col-start-6">
                    <input
                        type="radio"
                        id="muskl-4"
                        v-model="vopros5.bol"
                        value="4"
                    />
                </div>
            </div>
        </div>

        <div class="space-y-4 mt-4">
            <!-- Вопрос 6 -->
            <p class="font-semibold text-lg mb-4">
                6. Чувствуете ли Вы себя старым (старой)?
            </p>
            <div class="grid grid-cols-4 grid-rows-1 gap-2 mb-4 ml-20">
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="feel-old-0"
                        v-model="vopros6.feel_old"
                        value="0"
                    />
                    <label for="feel-old-0" class="text-lm text-gray-700"
                        >Да, очень</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="feel-old-1"
                        v-model="vopros6.feel_old"
                        value="1"
                    />
                    <label for="feel-old-1" class="text-lm text-gray-700"
                        >Да, в какой-то степени</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="feel-old-2"
                        v-model="vopros6.feel_old"
                        value="2"
                    />
                    <label for="feel-old-2" class="text-lm text-gray-700"
                        >Да, немного</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="feel-old-3"
                        v-model="vopros6.feel_old"
                        value="3"
                    />
                    <label for="feel-old-3" class="text-lm text-gray-700"
                        >Нет, совсем нет</label
                    >
                </div>
            </div>
        </div>

        <div class="space-y-4 mt-4">
            <!-- Вопрос 7 -->
            <p class="font-semibold text-lg mb-4">
                7. Если в вопросе 6 Вы ответили «Да», что заставило Вас так
                думать? (Выберите любое количество ответов)
            </p>
            <div class="grid grid-cols-2 grid-rows-4 gap-2 mb-4 ml-20">
                <!-- Колонка 1 -->
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="samocshuscie"
                        v-model="vopros7"
                        value="Мое самочувствие легко меняется в худшую сторону"
                    />
                    <label for="samocshuscie" class="text-lm text-gray-700"
                        >Мое самочувствие легко меняется в худшую сторону</label
                    >
                </div>
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="lekarstva"
                        v-model="vopros7"
                        value="Я принимаю много лекарств"
                    />
                    <label for="lekarstva" class="text-lm text-gray-700"
                        >Я принимаю много лекарств</label
                    >
                </div>
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="slabost"
                        v-model="vopros7"
                        value="Я чувствую слабость в мышцах"
                    />
                    <label for="slabost" class="text-lm text-gray-700"
                        >Я чувствую слабость в мышцах</label
                    >
                </div>
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="problemy-pamyati"
                        v-model="vopros7"
                        value="У меня проблемы с памятью"
                    />
                    <label for="problemy-pamyati" class="text-lm text-gray-700"
                        >У меня проблемы с памятью</label
                    >
                </div>
                <!-- Колонка 2 -->
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="smert-blizkikh"
                        v-model="vopros7"
                        value="Мне пришлось столкнуться со смертью близких"
                    />
                    <label for="smert-blizkikh" class="text-lm text-gray-700"
                        >Мне пришлось столкнуться со смертью близких</label
                    >
                </div>
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="bystro-ustayu"
                        v-model="vopros7"
                        value="У меня мало сил, я быстро устаю"
                    />
                    <label for="bystro-ustayu" class="text-lm text-gray-700"
                        >У меня мало сил, я быстро устаю</label
                    >
                </div>
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="plokho-zrenie"
                        v-model="vopros7"
                        value="У меня плохое зрение"
                    />
                    <label for="plokho-zrenie" class="text-lm text-gray-700"
                        >У меня плохое зрение</label
                    >
                </div>
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="drugoje"
                        v-model="vopros7"
                        value="Другое"
                    />
                    <label for="drugoje" class="text-lm text-gray-700"
                        >Другое</label
                    >
                </div>
            </div>
        </div>

        <div class="space-y-4 mt-4">
            <!-- Вопрос 8 -->
            <p class="font-semibold text-lg mb-4">
                8. Чувствуете ли Вы себя физически слабым (слабой)?
            </p>
            <div class="grid grid-cols-4 grid-rows-1 gap-2 mb-4 ml-20">
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="bol-muskl-0"
                        v-model="vopros8"
                        value="Да, очень"
                    />
                    <label for="bol-muskl-0" class="text-lm text-gray-700"
                        >Да, очень</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="bol-muskl-1"
                        v-model="vopros8"
                        value="Да, в какой-то степени"
                    />
                    <label for="bol-muskl-1" class="text-lm text-gray-700"
                        >Да, в какой-то степени</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="bol-muskl-2"
                        v-model="vopros8"
                        value="Да, немного"
                    />
                    <label for="bol-muskl-2" class="text-lm text-gray-700"
                        >Да, немного</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="bol-muskl-3"
                        v-model="vopros8"
                        value="Нет, совсем нет"
                    />
                    <label for="bol-muskl-3" class="text-lm text-gray-700"
                        >Нет, совсем нет</label
                    >
                </div>
            </div>
        </div>

        <div class="space-y-4 mt-4">
            <!-- Вопрос 9 -->
            <p class="font-semibold text-lg mb-4">
                9. Чувствуете ли Вы ограничения в следующем:
            </p>
            <!-- Таблица -->
            <div class="grid grid-cols-5 grid-rows-6 gap-2 mb-4 ml-20">
                <!-- Варианты ответов вынесены наверх с сдвигом -->
                <div class="text-left row-start-2 col-start-1">
                    <p class="font-semibold text-md">
                        Продолжительности пеших прогулок
                    </p>
                </div>
                <div class="text-left row-start-3 col-start-1">
                    <p class="font-semibold text-md">Частоте пеших прогулок</p>
                </div>
                <div class="text-left row-start-4 col-start-1">
                    <p class="font-semibold text-md">
                        Расстоянии, которое Вы можете пройти
                    </p>
                </div>
                <div class="text-left row-start-5 col-start-1">
                    <p class="font-semibold text-md">
                        Скорости, с которой Вы можете ходить
                    </p>
                </div>
                <div class="text-left row-start-6 col-start-1">
                    <p class="font-semibold text-md">Длине Вашего шага</p>
                </div>

                <!-- Значительные (0) -->
                <div class="text-center row-start-1 col-start-2">
                    <p class="font-semibold text-md">Значительные</p>
                </div>
                <div class="text-center row-start-2 col-start-2">
                    <input
                        type="radio"
                        v-model="vopros9['Продолжительность']"
                        name="restrictions-Продолжительность"
                        value="Значительные"
                    />
                </div>
                <div class="text-center row-start-3 col-start-2">
                    <input
                        type="radio"
                        v-model="vopros9['Частота']"
                        name="restrictions-Частота"
                        value="Значительные"
                    />
                </div>
                <div class="text-center row-start-4 col-start-2">
                    <input
                        type="radio"
                        v-model="vopros9['Расстояние']"
                        name="restrictions-Расстояние"
                        value="Значительные"
                    />
                </div>
                <div class="text-center row-start-5 col-start-2">
                    <input
                        type="radio"
                        v-model="vopros9['Скорость']"
                        name="restrictions-Скорость"
                        value="Значительные"
                    />
                </div>
                <div class="text-center row-start-6 col-start-2">
                    <input
                        type="radio"
                        v-model="vopros9['Шаг']"
                        name="restrictions-Шаг"
                        value="Значительные"
                    />
                </div>

                <!-- Некоторые (1) -->
                <div class="text-center row-start-1 col-start-3">
                    <p class="font-semibold text-md">Некоторые</p>
                </div>
                <div class="text-center row-start-2 col-start-3">
                    <input
                        type="radio"
                        v-model="vopros9['Продолжительность']"
                        name="restrictions-Продолжительность"
                        value="Некоторые"
                    />
                </div>
                <div class="text-center row-start-3 col-start-3">
                    <input
                        type="radio"
                        v-model="vopros9['Частота']"
                        name="restrictions-Частота"
                        value="Некоторые"
                    />
                </div>
                <div class="text-center row-start-4 col-start-3">
                    <input
                        type="radio"
                        v-model="vopros9['Расстояние']"
                        name="restrictions-Расстояние"
                        value="Некоторые"
                    />
                </div>
                <div class="text-center row-start-5 col-start-3">
                    <input
                        type="radio"
                        v-model="vopros9['Скорость']"
                        name="restrictions-Скорость"
                        value="Некоторые"
                    />
                </div>
                <div class="text-center row-start-6 col-start-3">
                    <input
                        type="radio"
                        v-model="vopros9['Шаг']"
                        name="restrictions-Шаг"
                        value="Некоторые"
                    />
                </div>

                <!-- Незначительные (2) -->
                <div class="text-center row-start-1 col-start-4">
                    <p class="font-semibold text-md">Незначительные</p>
                </div>
                <div class="text-center row-start-2 col-start-4">
                    <input
                        type="radio"
                        v-model="vopros9['Продолжительность']"
                        name="restrictions-Продолжительность"
                        value="Незначительные"
                    />
                </div>
                <div class="text-center row-start-3 col-start-4">
                    <input
                        type="radio"
                        v-model="vopros9['Частота']"
                        name="restrictions-Частота"
                        value="Незначительные"
                    />
                </div>
                <div class="text-center row-start-4 col-start-4">
                    <input
                        type="radio"
                        v-model="vopros9['Расстояние']"
                        name="restrictions-Расстояние"
                        value="Незначительные"
                    />
                </div>
                <div class="text-center row-start-5 col-start-4">
                    <input
                        type="radio"
                        v-model="vopros9['Скорость']"
                        name="restrictions-Скорость"
                        value="Незначительные"
                    />
                </div>
                <div class="text-center row-start-6 col-start-4">
                    <input
                        type="radio"
                        v-model="vopros9['Шаг']"
                        name="restrictions-Шаг"
                        value="Незначительные"
                    />
                </div>

                <!-- Нет (3) -->
                <div class="text-center row-start-1 col-start-5">
                    <p class="font-semibold text-md">Нет</p>
                </div>
                <div class="text-center row-start-2 col-start-5">
                    <input
                        type="radio"
                        v-model="vopros9['Продолжительность']"
                        name="restrictions-Продолжительность"
                        value="Нет"
                    />
                </div>
                <div class="text-center row-start-3 col-start-5">
                    <input
                        type="radio"
                        v-model="vopros9['Частота']"
                        name="restrictions-Частота"
                        value="Нет"
                    />
                </div>
                <div class="text-center row-start-4 col-start-5">
                    <input
                        type="radio"
                        v-model="vopros9['Расстояние']"
                        name="restrictions-Расстояние"
                        value="Нет"
                    />
                </div>
                <div class="text-center row-start-5 col-start-5">
                    <input
                        type="radio"
                        v-model="vopros9['Скорость']"
                        name="restrictions-Скорость"
                        value="Нет"
                    />
                </div>
                <div class="text-center row-start-6 col-start-5">
                    <input
                        type="radio"
                        v-model="vopros9['Шаг']"
                        name="restrictions-Шаг"
                        value="Нет"
                    />
                </div>
            </div>
        </div>

        <div class="space-y-4 mt-4">
            <!-- Вопрос 10 -->
            <p class="font-semibold text-lg mb-4">10. При ходьбе:</p>
            <!-- Таблица -->
            <div class="grid grid-cols-5 grid-rows-6 gap-2 mb-4 ml-20">
                <!-- Варианты ответов вынесены наверх с сдвигом -->
                <div class="text-left row-start-2 col-start-1">
                    <p class="font-semibold text-md">Я не могу гулять</p>
                </div>
                <div class="text-left row-start-3 col-start-1">
                    <p class="font-semibold text-md">
                        Чувствуете ли Вы себя очень уставшим?
                    </p>
                </div>
                <div class="text-left row-start-4 col-start-1">
                    <p class="font-semibold text-md">
                        Вынуждены ли Вы садиться, чтобы отдохнуть?
                    </p>
                </div>
                <div class="text-left row-start-5 col-start-1">
                    <p class="font-semibold text-md">
                        Сложно ли Вам достаточно быстро перейти улицу?
                    </p>
                </div>
                <div class="text-left row-start-6 col-start-1">
                    <p class="font-semibold text-md">
                        Сложно ли Вам ходить по неровной поверхности?
                    </p>
                </div>

                <!-- Часто (0) -->
                <div class="text-center row-start-1 col-start-2">
                    <p class="font-semibold text-md">Часто</p>
                </div>
                <div class="text-center row-start-2 col-start-2">
                    <input
                        type="radio"
                        v-model="vopros10['Я не могу гулять']"
                        name="walking-0"
                        value="Часто"
                    />
                </div>
                <div class="text-center row-start-3 col-start-2">
                    <input
                        type="radio"
                        v-model="
                            vopros10['Чувствуете ли Вы себя очень уставшим?']
                        "
                        name="walking-1"
                        value="Часто"
                    />
                </div>
                <div class="text-center row-start-4 col-start-2">
                    <input
                        type="radio"
                        v-model="
                            vopros10[
                                'Вынуждены ли Вы садиться, чтобы отдохнуть?'
                            ]
                        "
                        name="walking-2"
                        value="Часто"
                    />
                </div>
                <div class="text-center row-start-5 col-start-2">
                    <input
                        type="radio"
                        v-model="
                            vopros10[
                                'Сложно ли Вам достаточно быстро перейти улицу?'
                            ]
                        "
                        name="walking-3"
                        value="Часто"
                    />
                </div>
                <div class="text-center row-start-6 col-start-2">
                    <input
                        type="radio"
                        v-model="
                            vopros10[
                                'Сложно ли Вам ходить по неровной поверхности?'
                            ]
                        "
                        name="walking-4"
                        value="Часто"
                    />
                </div>

                <!-- Временами (1) -->
                <div class="text-center row-start-1 col-start-3">
                    <p class="font-semibold text-md">Временами</p>
                </div>
                <div class="text-center row-start-2 col-start-3">
                    <input
                        type="radio"
                        v-model="vopros10['Я не могу гулять']"
                        name="walking-0"
                        value="Временами"
                    />
                </div>
                <div class="text-center row-start-3 col-start-3">
                    <input
                        type="radio"
                        v-model="
                            vopros10['Чувствуете ли Вы себя очень уставшим?']
                        "
                        name="walking-1"
                        value="Временами"
                    />
                </div>
                <div class="text-center row-start-4 col-start-3">
                    <input
                        type="radio"
                        v-model="
                            vopros10[
                                'Вынуждены ли Вы садиться, чтобы отдохнуть?'
                            ]
                        "
                        name="walking-2"
                        value="Временами"
                    />
                </div>
                <div class="text-center row-start-5 col-start-3">
                    <input
                        type="radio"
                        v-model="
                            vopros10[
                                'Сложно ли Вам достаточно быстро перейти улицу?'
                            ]
                        "
                        name="walking-3"
                        value="Временами"
                    />
                </div>
                <div class="text-center row-start-6 col-start-3">
                    <input
                        type="radio"
                        v-model="
                            vopros10[
                                'Сложно ли Вам ходить по неровной поверхности?'
                            ]
                        "
                        name="walking-4"
                        value="Временами"
                    />
                </div>

                <!-- Редко (2) -->
                <div class="text-center row-start-1 col-start-4">
                    <p class="font-semibold text-md">Редко</p>
                </div>
                <div class="text-center row-start-2 col-start-4">
                    <input
                        type="radio"
                        v-model="vopros10['Я не могу гулять']"
                        name="walking-0"
                        value="Редко"
                    />
                </div>
                <div class="text-center row-start-3 col-start-4">
                    <input
                        type="radio"
                        v-model="
                            vopros10['Чувствуете ли Вы себя очень уставшим?']
                        "
                        name="walking-1"
                        value="Редко"
                    />
                </div>
                <div class="text-center row-start-4 col-start-4">
                    <input
                        type="radio"
                        v-model="
                            vopros10[
                                'Вынуждены ли Вы садиться, чтобы отдохнуть?'
                            ]
                        "
                        name="walking-2"
                        value="Редко"
                    />
                </div>
                <div class="text-center row-start-5 col-start-4">
                    <input
                        type="radio"
                        v-model="
                            vopros10[
                                'Сложно ли Вам достаточно быстро перейти улицу?'
                            ]
                        "
                        name="walking-3"
                        value="Редко"
                    />
                </div>
                <div class="text-center row-start-6 col-start-4">
                    <input
                        type="radio"
                        v-model="
                            vopros10[
                                'Сложно ли Вам ходить по неровной поверхности?'
                            ]
                        "
                        name="walking-4"
                        value="Редко"
                    />
                </div>

                <!-- Никогда (3) -->
                <div class="text-center row-start-1 col-start-5">
                    <p class="font-semibold text-md">Никогда</p>
                </div>
                <div class="text-center row-start-2 col-start-5">
                    <input
                        type="radio"
                        v-model="vopros10['Я не могу гулять']"
                        name="walking-0"
                        value="Никогда"
                    />
                </div>
                <div class="text-center row-start-3 col-start-5">
                    <input
                        type="radio"
                        v-model="
                            vopros10['Чувствуете ли Вы себя очень уставшим?']
                        "
                        name="walking-1"
                        value="Никогда"
                    />
                </div>
                <div class="text-center row-start-4 col-start-5">
                    <input
                        type="radio"
                        v-model="
                            vopros10[
                                'Вынуждены ли Вы садиться, чтобы отдохнуть?'
                            ]
                        "
                        name="walking-2"
                        value="Никогда"
                    />
                </div>
                <div class="text-center row-start-5 col-start-5">
                    <input
                        type="radio"
                        v-model="
                            vopros10[
                                'Сложно ли Вам достаточно быстро перейти улицу?'
                            ]
                        "
                        name="walking-3"
                        value="Никогда"
                    />
                </div>
                <div class="text-center row-start-6 col-start-5">
                    <input
                        type="radio"
                        v-model="
                            vopros10[
                                'Сложно ли Вам ходить по неровной поверхности?'
                            ]
                        "
                        name="walking-4"
                        value="Никогда"
                    />
                </div>
            </div>
        </div>

        <div class="space-y-4 mt-4">
            <!-- Вопрос 11 -->
            <p class="font-semibold text-lg mb-4">
                11. Сложно ли Вам удержать равновесие
            </p>
            <div class="grid grid-cols-4 gap-2 mb-4 ml-20">
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="bol-muskl-0"
                        name="vopros11"
                        value="Часто"
                        v-model="vopros11"
                    />
                    <label for="bol-muskl-0" class="text-lm text-gray-700"
                        >Часто</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="bol-muskl-1"
                        name="vopros11"
                        value="Временами"
                        v-model="vopros11"
                    />
                    <label for="bol-muskl-1" class="text-lm text-gray-700"
                        >Временами</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="bol-muskl-2"
                        name="vopros11"
                        value="Редко"
                        v-model="vopros11"
                    />
                    <label for="bol-muskl-2" class="text-lm text-gray-700"
                        >Редко</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="bol-muskl-3"
                        name="vopros11"
                        value="Никогда"
                        v-model="vopros11"
                    />
                    <label for="bol-muskl-3" class="text-lm text-gray-700"
                        >Никогда</label
                    >
                </div>
            </div>
        </div>

        <div class="space-y-4 mt-4">
            <!-- Вопрос 12 -->
            <p class="font-semibold text-lg mb-4">12. Как часто Вы падаете?</p>
            <div class="grid grid-cols-4 gap-2 mb-4 ml-20">
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="vopros12-0"
                        name="vopros12"
                        value="Очень часто"
                        v-model="vopros12"
                    />
                    <label for="vopros12-0" class="text-lm text-gray-700"
                        >Очень часто</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="vopros12-1"
                        name="vopros12"
                        value="Временами"
                        v-model="vopros12"
                    />
                    <label for="vopros12-1" class="text-lm text-gray-700"
                        >Временами</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="vopros12-2"
                        name="vopros12"
                        value="Редко"
                        v-model="vopros12"
                    />
                    <label for="vopros12-2" class="text-lm text-gray-700"
                        >Редко</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="vopros12-3"
                        name="vopros12"
                        value="Никогда"
                        v-model="vopros12"
                    />
                    <label for="vopros12-3" class="text-lm text-gray-700"
                        >Никогда</label
                    >
                </div>
            </div>
        </div>

        <div class="space-y-4">
            <!-- Вопрос 13 -->
            <p class="font-semibold text-lg mb-4">
                13. Как Вы думаете, изменилась ли Ваша внешность?
            </p>
            <div class="grid grid-cols-4 gap-2 mb-4 ml-20">
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="vopros13-0"
                        name="vopros13"
                        value="Да, очень"
                        v-model="vopros13"
                    />
                    <label for="vopros13-0" class="text-lm text-gray-700"
                        >Да, очень</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="vopros13-1"
                        name="vopros13"
                        value="Да, в какой-то степени"
                        v-model="vopros13"
                    />
                    <label for="vopros13-1" class="text-lm text-gray-700"
                        >Да, в какой-то степени</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="vopros13-2"
                        name="vopros13"
                        value="Да, немного"
                        v-model="vopros13"
                    />
                    <label for="vopros13-2" class="text-lm text-gray-700"
                        >Да, немного</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="vopros13-3"
                        name="vopros13"
                        value="Нет, совсем нет"
                        v-model="vopros13"
                    />
                    <label for="vopros13-3" class="text-lm text-gray-700"
                        >Нет, совсем нет</label
                    >
                </div>
            </div>
        </div>

        <div class="space-y-4 mt-4">
            <!-- Вопрос 14 -->
            <p class="font-semibold text-lg mb-4">
                14. Если на вопрос 13 Вы ответили «Да», то в чем это
                проявляется? (Выберите любое количество ответов)
            </p>
            <div class="grid grid-cols-2 grid-rows-4 gap-2 mb-4 ml-20">
                <!-- Колонка 1 -->
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="izmenenie-vesa"
                        v-model="vopros14"
                        value="Изменился вес (Вы прибавили или потеряли в весе)"
                    />
                    <label for="izmenenie-vesa" class="text-lm text-gray-700"
                        >Изменился вес (Вы прибавили или потеряли в весе)</label
                    >
                </div>
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="morwiny"
                        v-model="vopros14"
                        value="Появились морщины"
                    />
                    <label for="morwiny" class="text-lm text-gray-700"
                        >Появились морщины</label
                    >
                </div>
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="snizilsya-rost"
                        v-model="vopros14"
                        value="Снизился рост"
                    />
                    <label for="snizilsya-rost" class="text-lm text-gray-700"
                        >Снизился рост</label
                    >
                </div>
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="umensh-massa"
                        v-model="vopros14"
                        value="Уменьшилась мышечная масса"
                    />
                    <label for="umensh-massa" class="text-lm text-gray-700"
                        >Уменьшилась мышечная масса</label
                    >
                </div>
                <!-- Колонка 2 -->
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="vypadayut-volosy"
                        v-model="vopros14"
                        value="Стали выпадать волосы"
                    />
                    <label for="vypadayut-volosy" class="text-lm text-gray-700"
                        >Стали выпадать волосы</label
                    >
                </div>
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="sedye-volosy"
                        v-model="vopros14"
                        value="Волосы стали седыми"
                    />
                    <label for="sedye-volosy" class="text-lm text-gray-700"
                        >Волосы стали седыми</label
                    >
                </div>
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="drugoje14"
                        v-model="vopros14"
                        value="Другое"
                    />
                    <label for="drugoje14" class="text-lm text-gray-700"
                        >Другое</label
                    >
                </div>
            </div>
        </div>

        <div class="space-y-4 mt-4">
            <!-- Вопрос 15 -->
            <p class="font-semibold text-lg mb-4">
                15. Если на вопрос 13 Вы ответили «Да», расстроены ли Вы этими
                изменениями?
            </p>
            <div class="grid grid-cols-4 grid-rows-1 gap-2 mb-4 ml-20">
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="rastroen-ochen"
                        v-model="vopros15"
                        value="Да, очень"
                    />
                    <label for="rastroen-ochen" class="text-lm text-gray-700"
                        >Да, очень</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="rastroen-chastichno"
                        v-model="vopros15"
                        value="Да, в какой-то степени"
                    />
                    <label
                        for="rastroen-chastichno"
                        class="text-lm text-gray-700"
                        >Да, в какой-то степени</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="rastroen-nemnogo"
                        v-model="vopros15"
                        value="Да, немного"
                    />
                    <label for="rastroen-nemnogo" class="text-lm text-gray-700"
                        >Да, немного</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="rastroen-net"
                        v-model="vopros15"
                        value="Нет, совсем нет"
                    />
                    <label for="rastroen-net" class="text-lm text-gray-700"
                        >Нет, совсем нет</label
                    >
                </div>
            </div>
        </div>

        <div class="space-y-4 mt-4">
            <!-- Вопрос 16 -->
            <p class="font-semibold text-lg mb-4">
                16. Чувствуете ли Вы себя немощным?
            </p>
            <div class="grid grid-cols-3 grid-rows-1 gap-2 mb-4 ml-20">
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="nemosh"
                        v-model="vopros16"
                        value="Да, очень"
                    />
                    <label for="nemosh-ochen" class="text-lm text-gray-700"
                        >Да, очень</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="nemosh"
                        v-model="vopros16"
                        value="Да, немного"
                    />
                    <label for="nemosh-nemnogo" class="text-lm text-gray-700"
                        >Да, немного</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="nemosh"
                        v-model="vopros16"
                        value="Нет, совсем нет"
                    />
                    <label for="nemosh-net" class="text-lm text-gray-700"
                        >Нет, совсем нет</label
                    >
                </div>
            </div>
        </div>

        <div class="space-y-4 mt-4">
            <p class="font-semibold text-lg mb-4">
                17. Испытываете ли Вы в настоящее время затруднения при
                выполнении следующих действий:
            </p>
            <div
                class="grid grid-cols-[400px_auto_auto_auto_auto_auto] gap-2 mb-4 ml-20"
            >
                <!-- Заголовки столбцов -->
                <div class="text-center col-start-2">
                    <p class="font-semibold text-md">
                        Не в состоянии выполнить
                    </p>
                </div>
                <div class="text-center col-start-3">
                    <p class="font-semibold text-md">
                        Выполняю с большим трудом
                    </p>
                </div>
                <div class="text-center col-start-4">
                    <p class="font-semibold text-md">
                        Выполняю с большими затруднениями
                    </p>
                </div>
                <div class="text-center col-start-5">
                    <p class="font-semibold text-md">
                        Выполняю без затруднений
                    </p>
                </div>
                <div class="text-center col-start-6">
                    <p class="font-semibold text-md">Затрудняюсь ответить</p>
                </div>

                <!-- Вопросы и радиокнопки -->
                <!-- Вопрос 1 -->
                <div class="text-left">
                    <p class="font-semibold text-sm">
                        Подняться на один пролет лестницы?
                    </p>
                </div>
                <div class="text-center col-start-2">
                    <input
                        type="radio"
                        v-model="q17_1"
                        value="Не в состоянии выполнить"
                    />
                </div>
                <div class="text-center col-start-3">
                    <input
                        type="radio"
                        v-model="q17_1"
                        value="Выполняю с большим трудом"
                    />
                </div>
                <div class="text-center col-start-4">
                    <input
                        type="radio"
                        v-model="q17_1"
                        value="Выполняю с большими затруднениями"
                    />
                </div>
                <div class="text-center col-start-5">
                    <input
                        type="radio"
                        v-model="q17_1"
                        value="Выполняю без затруднений"
                    />
                </div>
                <div class="text-center col-start-6">
                    <input
                        type="radio"
                        v-model="q17_1"
                        value="Затрудняюсь ответить"
                    />
                </div>

                <!-- Вопрос 2 -->
                <div class="text-left">
                    <p class="font-semibold text-sm">
                        Подняться на несколько пролетов лестницы?
                    </p>
                </div>
                <div class="text-center col-start-2">
                    <input
                        type="radio"
                        v-model="q17_2"
                        value="Не в состоянии выполнить"
                    />
                </div>
                <div class="text-center col-start-3">
                    <input
                        type="radio"
                        v-model="q17_2"
                        value="Выполняю с большим трудом"
                    />
                </div>
                <div class="text-center col-start-4">
                    <input
                        type="radio"
                        v-model="q17_2"
                        value="Выполняю с большими затруднениями"
                    />
                </div>
                <div class="text-center col-start-5">
                    <input
                        type="radio"
                        v-model="q17_2"
                        value="Выполняю без затруднений"
                    />
                </div>
                <div class="text-center col-start-6">
                    <input
                        type="radio"
                        v-model="q17_2"
                        value="Затрудняюсь ответить"
                    />
                </div>

                <!-- Вопрос 3 -->
                <div class="text-left">
                    <p class="font-semibold text-sm">
                        Подняться на одну или несколько ступеней, не держась за
                        перила?
                    </p>
                </div>
                <div class="text-center col-start-2">
                    <input
                        type="radio"
                        v-model="q17_3"
                        value="Не в состоянии выполнить"
                    />
                </div>
                <div class="text-center col-start-3">
                    <input
                        type="radio"
                        v-model="q17_3"
                        value="Выполняю с большим трудом"
                    />
                </div>
                <div class="text-center col-start-4">
                    <input
                        type="radio"
                        v-model="q17_3"
                        value="Выполняю с большими затруднениями"
                    />
                </div>
                <div class="text-center col-start-5">
                    <input
                        type="radio"
                        v-model="q17_3"
                        value="Выполняю без затруднений"
                    />
                </div>
                <div class="text-center col-start-6">
                    <input
                        type="radio"
                        v-model="q17_3"
                        value="Затрудняюсь ответить"
                    />
                </div>

                <!-- Вопрос 4 -->
                <div class="text-left">
                    <p class="font-semibold text-sm">
                        Присесть на корточки или встать на колени?
                    </p>
                </div>
                <div class="text-center col-start-2">
                    <input
                        type="radio"
                        v-model="q17_4"
                        value="Не в состоянии выполнить"
                    />
                </div>
                <div class="text-center col-start-3">
                    <input
                        type="radio"
                        v-model="q17_4"
                        value="Выполняю с большим трудом"
                    />
                </div>
                <div class="text-center col-start-4">
                    <input
                        type="radio"
                        v-model="q17_4"
                        value="Выполняю с большими затруднениями"
                    />
                </div>
                <div class="text-center col-start-5">
                    <input
                        type="radio"
                        v-model="q17_4"
                        value="Выполняю без затруднений"
                    />
                </div>
                <div class="text-center col-start-6">
                    <input
                        type="radio"
                        v-model="q17_4"
                        value="Затрудняюсь ответить"
                    />
                </div>

                <!-- Вопрос 5 -->
                <div class="text-left">
                    <p class="font-semibold text-sm">
                        Согнуться или наклониться, чтобы поднять с пола
                        какой-либо предмет?
                    </p>
                </div>
                <div class="text-center col-start-2">
                    <input
                        type="radio"
                        v-model="q17_5"
                        value="Не в состоянии выполнить"
                    />
                </div>
                <div class="text-center col-start-3">
                    <input
                        type="radio"
                        v-model="q17_5"
                        value="Выполняю с большим трудом"
                    />
                </div>
                <div class="text-center col-start-4">
                    <input
                        type="radio"
                        v-model="q17_5"
                        value="Выполняю с большими затруднениями"
                    />
                </div>
                <div class="text-center col-start-5">
                    <input
                        type="radio"
                        v-model="q17_5"
                        value="Выполняю без затруднений"
                    />
                </div>
                <div class="text-center col-start-6">
                    <input
                        type="radio"
                        v-model="q17_5"
                        value="Затрудняюсь ответить"
                    />
                </div>

                <!-- Вопрос 6 -->
                <div class="text-left">
                    <p class="font-semibold text-sm">
                        Подняться с пола, при этом ни за что не держась?
                    </p>
                </div>
                <div class="text-center col-start-2">
                    <input
                        type="radio"
                        v-model="q17_6"
                        value="Не в состоянии выполнить"
                    />
                </div>
                <div class="text-center col-start-3">
                    <input
                        type="radio"
                        v-model="q17_6"
                        value="Выполняю с большим трудом"
                    />
                </div>
                <div class="text-center col-start-4">
                    <input
                        type="radio"
                        v-model="q17_6"
                        value="Выполняю с большими затруднениями"
                    />
                </div>
                <div class="text-center col-start-5">
                    <input
                        type="radio"
                        v-model="q17_6"
                        value="Выполняю без затруднений"
                    />
                </div>
                <div class="text-center col-start-6">
                    <input
                        type="radio"
                        v-model="q17_6"
                        value="Затрудняюсь ответить"
                    />
                </div>

                <!-- Вопрос 7 -->
                <div class="text-left">
                    <p class="font-semibold text-sm">
                        Подняться с низкого стула не имеющего подлокотников?
                    </p>
                </div>
                <div class="text-center col-start-2">
                    <input
                        type="radio"
                        v-model="q17_7"
                        value="Не в состоянии выполнить"
                    />
                </div>
                <div class="text-center col-start-3">
                    <input
                        type="radio"
                        v-model="q17_7"
                        value="Выполняю с большим трудом"
                    />
                </div>
                <div class="text-center col-start-4">
                    <input
                        type="radio"
                        v-model="q17_7"
                        value="Выполняю с большими затруднениями"
                    />
                </div>
                <div class="text-center col-start-5">
                    <input
                        type="radio"
                        v-model="q17_7"
                        value="Выполняю без затруднений"
                    />
                </div>
                <div class="text-center col-start-6">
                    <input
                        type="radio"
                        v-model="q17_7"
                        value="Затрудняюсь ответить"
                    />
                </div>

                <!-- Вопрос 8 -->
                <div class="text-left">
                    <p class="font-semibold text-sm">
                        Перейти из положения сидя в положение стоя?
                    </p>
                </div>
                <div class="text-center col-start-2">
                    <input
                        type="radio"
                        v-model="q17_8"
                        value="Не в состоянии выполнить"
                    />
                </div>
                <div class="text-center col-start-3">
                    <input
                        type="radio"
                        v-model="q17_8"
                        value="Выполняю с большим трудом"
                    />
                </div>
                <div class="text-center col-start-4">
                    <input
                        type="radio"
                        v-model="q17_8"
                        value="Выполняю с большими затруднениями"
                    />
                </div>
                <div class="text-center col-start-5">
                    <input
                        type="radio"
                        v-model="q17_8"
                        value="Выполняю без затруднений"
                    />
                </div>
                <div class="text-center col-start-6">
                    <input
                        type="radio"
                        v-model="q17_8"
                        value="Затрудняюсь ответить"
                    />
                </div>

                <!-- Вопрос 9 -->
                <div class="text-left">
                    <p class="font-semibold text-sm">
                        Переносить тяжелые предметы (большие пакеты с покупками,
                        кастрюлю, наполненную водой, и т. д.)?
                    </p>
                </div>
                <div class="text-center col-start-2">
                    <input
                        type="radio"
                        v-model="q17_9"
                        value="Не в состоянии выполнить"
                    />
                </div>
                <div class="text-center col-start-3">
                    <input
                        type="radio"
                        v-model="q17_9"
                        value="Выполняю с большим трудом"
                    />
                </div>
                <div class="text-center col-start-4">
                    <input
                        type="radio"
                        v-model="q17_9"
                        value="Выполняю с большими затруднениями"
                    />
                </div>
                <div class="text-center col-start-5">
                    <input
                        type="radio"
                        v-model="q17_9"
                        value="Выполняю без затруднений"
                    />
                </div>
                <div class="text-center col-start-6">
                    <input
                        type="radio"
                        v-model="q17_9"
                        value="Затрудняюсь ответить"
                    />
                </div>

                <!-- Вопрос 10 -->
                <div class="text-left">
                    <p class="font-semibold text-sm">
                        Открыть бутылку или банку?
                    </p>
                </div>
                <div class="text-center col-start-2">
                    <input
                        type="radio"
                        v-model="q17_10"
                        value="Не в состоянии выполнить"
                    />
                </div>
                <div class="text-center col-start-3">
                    <input
                        type="radio"
                        v-model="q17_10"
                        value="Выполняю с большим трудом"
                    />
                </div>
                <div class="text-center col-start-4">
                    <input
                        type="radio"
                        v-model="q17_10"
                        value="Выполняю с большими затруднениями"
                    />
                </div>
                <div class="text-center col-start-5">
                    <input
                        type="radio"
                        v-model="q17_10"
                        value="Выполняю без затруднений"
                    />
                </div>
                <div class="text-center col-start-6">
                    <input
                        type="radio"
                        v-model="q17_10"
                        value="Затрудняюсь ответить"
                    />
                </div>

                <!-- Вопрос 11 -->
                <div class="text-left">
                    <p class="font-semibold text-sm">
                        Ездить в общественном транспорте?
                    </p>
                </div>
                <div class="text-center col-start-2">
                    <input
                        type="radio"
                        v-model="q17_11"
                        value="Не в состоянии выполнить"
                    />
                </div>
                <div class="text-center col-start-3">
                    <input
                        type="radio"
                        v-model="q17_11"
                        value="Выполняю с большим трудом"
                    />
                </div>
                <div class="text-center col-start-4">
                    <input
                        type="radio"
                        v-model="q17_11"
                        value="Выполняю с большими затруднениями"
                    />
                </div>
                <div class="text-center col-start-5">
                    <input
                        type="radio"
                        v-model="q17_11"
                        value="Выполняю без затруднений"
                    />
                </div>
                <div class="text-center col-start-6">
                    <input
                        type="radio"
                        v-model="q17_11"
                        value="Затрудняюсь ответить"
                    />
                </div>

                <!-- Вопрос 12 -->
                <div class="text-left">
                    <p class="font-semibold text-sm">
                        Садиться или выходить из автомобиля?
                    </p>
                </div>
                <div class="text-center col-start-2">
                    <input
                        type="radio"
                        v-model="q17_12"
                        value="Не в состоянии выполнить"
                    />
                </div>
                <div class="text-center col-start-3">
                    <input
                        type="radio"
                        v-model="q17_12"
                        value="Выполняю с большим трудом"
                    />
                </div>
                <div class="text-center col-start-4">
                    <input
                        type="radio"
                        v-model="q17_12"
                        value="Выполняю с большими затруднениями"
                    />
                </div>
                <div class="text-center col-start-5">
                    <input
                        type="radio"
                        v-model="q17_12"
                        value="Выполняю без затруднений"
                    />
                </div>
                <div class="text-center col-start-6">
                    <input
                        type="radio"
                        v-model="q17_12"
                        value="Затрудняюсь ответить"
                    />
                </div>

                <!-- Вопрос 13 -->
                <div class="text-left">
                    <p class="font-semibold text-sm">Ходить по магазинам?</p>
                </div>
                <div class="text-center col-start-2">
                    <input
                        type="radio"
                        v-model="q17_13"
                        value="Не в состоянии выполнить"
                    />
                </div>
                <div class="text-center col-start-3">
                    <input
                        type="radio"
                        v-model="q17_13"
                        value="Выполняю с большим трудом"
                    />
                </div>
                <div class="text-center col-start-4">
                    <input
                        type="radio"
                        v-model="q17_13"
                        value="Выполняю с большими затруднениями"
                    />
                </div>
                <div class="text-center col-start-5">
                    <input
                        type="radio"
                        v-model="q17_13"
                        value="Выполняю без затруднений"
                    />
                </div>
                <div class="text-center col-start-6">
                    <input
                        type="radio"
                        v-model="q17_13"
                        value="Затрудняюсь ответить"
                    />
                </div>

                <!-- Вопрос 14 -->
                <div class="text-left">
                    <p class="font-semibold text-sm">
                        Выполнять домашнюю работу (заправлять постель,
                        пылесосить, гладить, мыть посуду и т. д.)?
                    </p>
                </div>
                <div class="text-center col-start-2">
                    <input
                        type="radio"
                        v-model="q17_14"
                        value="Не в состоянии выполнить"
                    />
                </div>
                <div class="text-center col-start-3">
                    <input
                        type="radio"
                        v-model="q17_14"
                        value="Выполняю с большим трудом"
                    />
                </div>
                <div class="text-center col-start-4">
                    <input
                        type="radio"
                        v-model="q17_14"
                        value="Выполняю с большими затруднениями"
                    />
                </div>
                <div class="text-center col-start-5">
                    <input
                        type="radio"
                        v-model="q17_14"
                        value="Выполняю без затруднений"
                    />
                </div>
                <div class="text-center col-start-6">
                    <input
                        type="radio"
                        v-model="q17_14"
                        value="Затрудняюсь ответить"
                    />
                </div>
            </div>
        </div>

        <div class="space-y-4 mt-4">
            <!-- Вопрос 18-->
            <p class="font-semibold text-lg mb-4">
                18. Ограничивает ли слабость в мышцах Ваши движения?
            </p>
            <div class="grid grid-cols-4 grid-rows-1 gap-2 mb-4 ml-20">
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="bol-muskl-0"
                        name="bolmuskl"
                        value="Да, очень"
                        v-model="vopros18"
                    />
                    <label for="bol-muskl-0" class="text-lm text-gray-700"
                        >Да, очень</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="bol-muskl-1"
                        name="bolmuskl"
                        value="Да, в какой-то степени"
                        v-model="vopros18"
                    />
                    <label for="bol-muskl-1" class="text-lm text-gray-700"
                        >Да, в какой-то степени</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="bol-muskl-2"
                        name="bolmuskl"
                        value="Да, немного"
                        v-model="vopros18"
                    />
                    <label for="bol-muskl-2" class="text-lm text-gray-700"
                        >Да, немного</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="bol-muskl-3"
                        name="bolmuskl"
                        value="Нет, совсем нет"
                        v-model="vopros18"
                    />
                    <label for="bol-muskl-3" class="text-lm text-gray-700"
                        >Нет, совсем нет</label
                    >
                </div>
            </div>
        </div>

        <div class="space-y-4 mt-4">
            <!-- Вопрос 19 -->
            <p class="font-semibold text-lg mb-4">
                19. Если на вопрос 18 вы ответили «Да», то назовите причины
                (выберите любое количество ответов):
            </p>
            <div class="grid grid-cols-2 grid-rows-4 gap-2 mb-4 ml-20">
                <!-- Колонка 1 -->
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="bol-muskl-0"
                        value="Страх боли"
                        v-model="vopros19"
                    />
                    <label for="bol-muskl-0" class="text-lm text-gray-700"
                        >Страх боли</label
                    >
                </div>
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="bol-muskl-1"
                        value="Страх того, что Вы не сможете выполнить эти движения"
                        v-model="vopros19"
                    />
                    <label for="bol-muskl-1" class="text-lm text-gray-700"
                        >Страх того, что Вы не сможете выполнить эти
                        движения</label
                    >
                </div>
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="bol-muskl-2"
                        value="Страх устать после выполнения этих движений"
                        v-model="vopros19"
                    />
                    <label for="bol-muskl-2" class="text-lm text-gray-700"
                        >Страх устать после выполнения этих движений</label
                    >
                </div>
                <!-- Колонка 2 -->
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="bol-muskl-3"
                        value="Страх падения"
                        v-model="vopros19"
                    />
                    <label for="bol-muskl-3" class="text-lm text-gray-700"
                        >Страх падения</label
                    >
                </div>
                <div class="flex items-center space-x-2">
                    <input
                        type="checkbox"
                        id="bol-muskl-5"
                        value="Другое"
                        v-model="vopros19"
                    />
                    <label for="bol-muskl-5" class="text-lm text-gray-700"
                        >Другое</label
                    >
                </div>
            </div>
        </div>

        <div class="space-y-4">
            <!-- Вопрос 20-->
            <p class="font-semibold text-lg mb-4">
                20. Ограничивает ли мышечная слабость Вашу сексуальную
                активность?
            </p>
            <div class="grid grid-cols-5 grid-rows-1 gap-2 mb-4 ml-20">
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="q20-0"
                        value="Я сексуально не активен(не активна)"
                        v-model="vopros20"
                    />
                    <label for="q20-0" class="text-lm text-gray-700"
                        >Я сексуально не активен(не активна)</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="q20-1"
                        value="Да, полностью ограничивает"
                        v-model="vopros20"
                    />
                    <label for="q20-1" class="text-lm text-gray-700"
                        >Да, полностью ограничивает</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="q20-2"
                        value="Да, в какой-то степени"
                        v-model="vopros20"
                    />
                    <label for="q20-2" class="text-lm text-gray-700"
                        >Да, в какой-то степени</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="q20-3"
                        value="Да, немного"
                        v-model="vopros20"
                    />
                    <label for="q20-3" class="text-lm text-gray-700"
                        >Да, немного</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="q20-4"
                        value="Нет, совсем нет"
                        v-model="vopros20"
                    />
                    <label for="q20-4" class="text-lm text-gray-700"
                        >Нет, совсем нет</label
                    >
                </div>
            </div>
        </div>

        <div class="space-y-4">
            <!-- Вопрос 21-->
            <p class="font-semibold text-lg mb-4">
                21. Как изменилось выполнение Вами физических упражнений /
                участие в спортивных мероприятиях?
            </p>
            <div class="grid grid-cols-5 grid-rows-1 gap-2 mb-4 ml-20">
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="q21-3"
                        value="Увеличилось"
                        v-model="vopros21"
                    />
                    <label for="q21-3" class="text-lm text-gray-700"
                        >Увеличилось</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="q21-2"
                        value="Снизилось"
                        v-model="vopros21"
                    />
                    <label for="q21-2" class="text-lm text-gray-700"
                        >Снизилось</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="q21-1"
                        value="Не изменилось"
                        v-model="vopros21"
                    />
                    <label for="q21-1" class="text-lm text-gray-700"
                        >Не изменилось</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="q21-0"
                        value="Я никогда не выполнял(а) физических упражнений и не участвовал(а) в спортивных мероприятиях"
                        v-model="vopros21"
                    />
                    <label for="q21-0" class="text-lm text-gray-700"
                        >Я никогда не выполнял(а) физических упражнений и не
                        участвовал(а) в спортивных мероприятиях</label
                    >
                </div>
            </div>
        </div>

        <div class="space-y-4">
            <!-- Вопрос 22 -->
            <p class="font-semibold text-lg mb-4">
                22. Как изменился Ваш досуг (поход в гости, садоводство, мелкий
                ремонт по дому – починить кран, подклеить обои, творчество,
                охота/рыбалка, общение по интересам, игры в карты, прогулки и т.
                д.)?
            </p>
            <div class="grid grid-cols-5 grid-rows-1 gap-2 mb-4 ml-20">
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="doseg-0"
                        value="Увеличилось"
                        v-model="vopros22"
                    />
                    <label for="doseg-0" class="text-lm text-gray-700"
                        >Увеличилось</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="doseg-1"
                        value="Снизилось"
                        v-model="vopros22"
                    />
                    <label for="doseg-1" class="text-lm text-gray-700"
                        >Снизилось</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="doseg-2"
                        value="Не изменилось"
                        v-model="vopros22"
                    />
                    <label for="doseg-2" class="text-lm text-gray-700"
                        >Не изменилось</label
                    >
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <input
                        type="radio"
                        id="doseg-3"
                        value="Я никогда не занимался (не занималась) активным досугом"
                        v-model="vopros22"
                    />
                    <label for="doseg-3" class="text-lm text-gray-700"
                        >Я никогда не занимался (не занималась) активным
                        досугом</label
                    >
                </div>
            </div>
        </div>
    </div>
    <!-- Кнопка отправки -->
    <div class="flex justify-center mt-6">
        <button
            @click="submitForm"
            class="px-6 py-3 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600 hover:shadow-lg active:bg-blue-700 active:scale-95 transition-all duration-200 ease-in-out"
        >
            Отправить данные
        </button>
    </div>
    <div>
        <!-- Модалка (всплывающее окно) -->
        <div v-if="showModal" class="modal-overlay">
            <div class="modal-content">
                <p>{{ modalMessage }}</p>
                <p>Ваши баллы: {{ totalPoints }}</p>
            </div>
        </div>
    </div>
</template>

<script>
import { router } from "@inertiajs/vue3";
export default {
    props: {
        message: String,
        totalPoints: Number,
    },
    data() {
        return {
            personal_info: {
                fio: "",
                dbirth: "",
                gender: "",
                adres: "",
                telephone: "",
                smok: "",
                fizactiv: "",
                sport: "",
                sportType: "",
                sportDuration: "",
                longlife: "",
                eat: "",
                travm_5: "",
                bezdvich: "",
                krov: "",
                preparat: "",
                musklslabost: "",
                utomlaemost: "",
            },
            vopros2: {
                bolmuskl: "",
            },
            vopros3: {
                trudnost: "",
                ustalost: "",
                bol: "",
            },
            vopros4: {
                trudnost: "",
                ustalost: "",
                bol: "",
            },
            vopros5: {
                trudnost: "",
                ustalost: "",
                bol: "",
            },
            vopros6: {
                feel_old: "",
            },
            vopros7: [],
            vopros8: "",
            vopros9: {
                Продолжительность: "",
                Частота: "",
                Расстояние: "",
                Скорость: "",
                Шаг: "",
            },
            vopros10: {
                "Я не могу гулять": "",
                "Чувствуете ли Вы себя очень уставшим?": "",
                "Вынуждены ли Вы садиться, чтобы отдохнуть?": "",
                "Сложно ли Вам достаточно быстро перейти улицу?": "",
                "Сложно ли Вам ходить по неровной поверхности?": "",
            },
            vopros11: "",
            vopros12: "",
            vopros13: "",
            vopros14: [],
            vopros15: "",
            vopros16: "",
            q17_1: "",
            q17_2: "",
            q17_3: "",
            q17_4: "",
            q17_5: "",
            q17_6: "",
            q17_7: "",
            q17_8: "",
            q17_9: "",
            q17_10: "",
            q17_11: "",
            q17_12: "",
            q17_13: "",
            q17_14: "",
            vopros18: "",
            vopros19: [],
            vopros20: "",
            vopros21: "",
            vopros22: "",

            categories: [
                "Сила рук",
                "Сила ног",
                "Мышечная масса",
                "Энергия",
                "Физические возможности",
                "Ловкость",
            ],
            options: [
                { label: "Выраженное", value: "0" },
                { label: "Некоторое", value: "1" },
                { label: "Незначительное", value: "2" },
                { label: "Нет снижения", value: "3" },
            ],
            vopros1: {
                "Сила рук": "",
                "Сила ног": "",
                "Мышечная масса": "",
                Энергия: "",
                "Физические возможности": "",
                Ловкость: "",
            },
            showModal: false,
            modalMessage: "",
        };
    },
    methods: {
        submitForm() {
            router.post("/submit", this.$data, {
                preserveScroll: true, // Чтобы страница не прокручивалась после отправки
                onSuccess: () => {
                    //alert("Данные успешно отправлены!");
                    this.show();
                },
                onError: (errors) => {
                    console.error("Ошибка отправки:", errors);
                    const errorMessages = Object.values(errors);

                    // Например, можно сразу показать их через alert
                    alert(errorMessages.join("\n"));
                },
            });
        },
        show() {
            // Показываем модалку
            this.showModal = true;

            // Закрываем модалку через 3 секунды
            setTimeout(() => {
                this.showModal = false;
            }, 3000);
        },
    },
    watch: {
        message(newMessage) {
            this.modalMessage = newMessage;
            this.show();
        },
    },
};
</script>
<style scoped>
/* Оверлей для модалки */
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

/* Стили для модального окна */
.modal-content {
    background: #ffe4e1;
    /* Светло-розовый цвет */
    padding: 25px;
    border-radius: 12px;
    width: 320px;
    text-align: center;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    position: relative;
    animation: fadeIn 0.3s ease-in-out;
}

/* Кнопка закрытия */
.close-button {
    position: absolute;
    top: 10px;
    right: 10px;
    background: #ffb6c1;
    border: none;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.3s;
}

.close-button:hover {
    background: #ff8aa8;
}

/* Анимация появления */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: scale(0.9);
    }

    to {
        opacity: 1;
        transform: scale(1);
    }
}
</style>
