<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('contract_details', function (Blueprint $table) {
            $table->id();
            $table->ulid('contract_id');
            $table->text('stage_description');
            $table->date('stage_date');
            $table->decimal('stage_amount', 15, 2)->nullable();
            $table->string('payment_status')->default('pending'); // статус платежа
            $table->text('additional_info')->nullable();
            $table->json('products')->nullable(); // Список товаров
            $table->json('services')->nullable(); // Список услуг
            $table->timestamps();

            // Set foreign key constraint
            $table->foreign('contract_id')->references('contract_id')->on('contracts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contract_details');
    }
};
