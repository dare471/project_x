<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->ulid('contract_id')->primary();
            $table->string('contract_number');
            $table->string('contract_type');
            $table->ulid('contract_status');
            $table->string('contract_status_description');
            $table->ulid('client_id');
            $table->string('client_name');
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('amount', 15, 2);
            $table->string('payment_terms');
            $table->text('products_services'); // описание продуктов или услуг
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
        Schema::dropIfExists('contracts');
    }
};
