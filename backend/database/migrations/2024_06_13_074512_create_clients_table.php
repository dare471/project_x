<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('business_identification_number', 12)->unique(); // БИН как строка
            $table->string('name'); // Наименование
            $table->date('registration_date'); // Дата регистрации
            $table->string('activity_code'); // Код деятельности
            $table->string('activity_description'); // Описание деятельности
            $table->json('latest_activities'); // Последние деятельности компании
            $table->string('company_size_code'); // Код размерности компании
            $table->string('company_size_description'); // Описание размерности компании
            $table->string('kato_main_code'); // Основной код KATO
            $table->string('kato_region_code'); // Код региона KATO
            $table->string('kato_district_code'); // Код района KATO
            $table->string('kato_city_code'); // Код города KATO
            $table->text('kato_full_address')->nullable(); // Полный адрес KATO
            $table->string('contact_details'); // Контактное лицо id
            $table->string('email')->unique(); //
            $table->string('phone');
            $table->text('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
