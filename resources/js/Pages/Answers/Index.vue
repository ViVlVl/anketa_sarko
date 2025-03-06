<template>
    <h1>Список пациентов</h1>

    <div class="container">
        <div v-for="patient in patients" :key="patient.id" class="patient-card">
            <h2>{{ patient['ФИО'] ?? 'Нет данных' }}</h2>
            <p><strong>Дата рождения:</strong> {{ patient['Дата рождения'] ?? 'Нет данных' }}</p>
            <p><strong>Пол:</strong> {{ patient['Пол'] ?? 'Нет данных' }}</p>
            <p><strong>Адрес:</strong> {{ patient['Адрес'] ?? 'Нет данных' }}</p>
            <p><strong>Телефон:</strong> {{ patient['Телефон'] ?? 'Нет данных' }}</p>
            <p><strong>Курение:</strong> {{ patient['Курение'] ?? 'Нет данных' }}</p>
            <p><strong>Физическая активность:</strong> {{ patient['Физическая активность'] ?? 'Нет данных' }}</p>
            <p><strong>Занимается ли спортом:</strong> {{ patient['Занимаетесь ли спортом?'] ?? 'Нет данных' }}</p>
            <p><strong>Каким спортом?</strong> {{ patient['Каким спортом?'] ?? 'Нет данных' }}</p>
            <p><strong>Как давно?</strong> {{ patient['Как давно?'] ?? 'Нет данных' }}</p>
            <p><strong>Сколько лет проживаете в Тюмень?
                </strong> {{ patient['Сколько лет проживаете в Тюмень?'] ?? 'Нет данных' }}</p>
            <p><strong>Если приехал с другой территории то</strong> {{ patient['Если приехал с другой территории т'] ??
                'Нет данных' }}</p>
            <p><strong>Условия проживания:</strong> {{ patient['Условия проживания:'] ?? 'Нет данных' }}</p>
            <p><strong>Есть ли долгожители по семейной линии</strong> {{ patient['Есть ли долгожители по семейной ли']
                ?? 'Нет данных' }}</p>
            <p><strong>Особенности питания:</strong> {{ patient['Особенности питания:'] ?? 'Нет данных' }}</p>
            <p><strong>Перенесенные заболевания,операци:</strong> {{ patient['Перенесенные заболевания,операци:'] ??
                'Нет данных' }}</p>
            <p>
                <strong>Был ли за последние 5 лет период обездвиживания:</strong>
                {{ patient[
                    'Был ли за последние 5 лет период об: '
                ] ?? 'Нет данных' }}
            </p>
            <p>
                <strong>Болезни системы кровообращения:</strong>
                {{ patient['Болезни системы кровообращения:'] ?? 'Нет данных' }}
            </p>

            <p>
                <strong>Болезни органов дыхания:</strong>
                {{ patient['Болезни органов дыхания:'] ?? 'Нет данных' }}
            </p>

            <p>
                <strong>Болезни эндокринной системы:</strong>
                {{ patient['Болезни эндокринной системы:'] ?? 'Нет данных' }}
            </p>

            <p>
                <strong>Онкологические заболевания:</strong>
                {{ patient['Онкологические заболевания:'] ?? 'Нет данных' }}
            </p>

            <p>
                <strong>Другое:</strong>
                {{ patient['Другое:'] ?? 'Нет данных' }}
            </p>

            <p>
                <strong>Какие лекарственные препараты принимаете в настоящее время:</strong>
                {{ patient['Какие лекарственные препараты при:'] ?? 'Нет данных' }}
            </p>

            <p>
                <strong>Жалобы на Мышечная слабость:</strong>
                {{ patient['Жалобы на Мышечная слабость:'] ?? 'Нет данных' }}
            </p>

            <p>
                <strong>Быстрая утомляемость при физическ:</strong>
                {{ patient['Быстрая утомляемость при физическ:'] ?? 'Нет данных' }}
            </p>

            <p>
                <strong>Количество баллов:</strong>
                <span class="highlight">{{ patient['total_points'] ?? 'Нет данных' }}</span>
            </p>

            <h3 class="section-title">Ответы на вопросы:</h3>
            <ul v-if="patient.answers && patient.answers.length">
                <li v-for="answer in patient.answers" :key="answer.id">
                    <strong>{{ answer.question?.question_text || 'Вопрос не указан' }}</strong>
                    <span class="answer">{{ answer.answer_option?.option_text || 'Нет ответа' }}</span>
                </li>
            </ul>
            <p v-else>Нет ответов</p>
        </div>
    </div>
</template>



<script>
export default {
    props: {
        patients: Array, // Принимаем массив пациентов
    },
};
</script>

<style scoped>
.container {
    max-width: 800px;
    margin: auto;
    padding: 20px;
}

.patient-card {
    background: #ffebee;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 20px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.patient-card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
}

h1 {
    text-align: center;
}

h2 {
    color: #d32f2f;
}

h3 {
    margin-top: 10px;
}

p {
    margin: 5px 0;
}

ul {
    padding-left: 20px;
}

li {
    padding: 8px;
    border-bottom: 1px solid #ddd;
    list-style-type: none;
}

li:last-child {
    border-bottom: none;
}

strong {
    color: #000;
    /* Черный цвет для вопросов */
    display: block;
    margin-bottom: 5px;
}

span.answer {
    color: #800000;
    /* Бордовый цвет для ответов */
    font-weight: bold;
}

.highlight {
    font-size: 20px;
    font-weight: bold;
    color: #d32f2f;
    /* Бордовый цвет */
}

.section-title {
    margin-bottom: 15px;
    /* Отступ вниз */
    font-size: 22px;
    /* Чуть больше размера */
    font-weight: bold;
    color: #d32f2f;
    /* Бордовый цвет */
    text-decoration: underline;
    /* Подчеркивание */
}
</style>