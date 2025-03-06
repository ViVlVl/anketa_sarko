<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('ФИО')->nullable();
            $table->date('Дата рождения')->nullable();
            $table->string('Пол')->nullable();
            $table->string('Адрес')->nullable();
            $table->string('Телефон')->nullable();
            $table->string('Курение')->nullable();

            $table->string('Физическая активность')->nullable();
            $table->string('Занимаетесь ли спортом?')->nullable();
            $table->string('Каким спортом?')->nullable();
            $table->string('Как давно?')->nullable();
            $table->string('Сколько лет проживаете в Тюмень?')->nullable();
            $table->string('Если приехал с другой территории то когда и откуда?')->nullable();
            $table->string('Условия проживания:')->nullable();

            $table->string('Есть ли долгожители по семейной линии?')->nullable();
            $table->string('Особенности питания')->nullable();
            $table->string('Перенесенные заболевания,операции,травмы за последниее 5 лет')->nullable();
            $table->string('Был ли за последние 5 лет период обездвиживания')->nullable();

            $table->string('Болезни системы кровообращения')->nullable();
            $table->string('Болезни органов дыхания')->nullable();
            $table->string('Болезни эндокринной системы')->nullable();
            $table->string('Онкологические заболевания')->nullable();
            $table->string('Другое')->nullable();
            $table->string('Какие лекарственные препараты принимаете в настоящее время')->nullable();
            $table->string('Жалобы на Мышечная слабость')->nullable();
            $table->string('Быстрая утомляемость при физической нагрузке')->nullable();

            $table->integer('total_points')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
