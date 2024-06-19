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
        //
        Schema::create('contracts_methods_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contract_id');
            $table->unsignedBigInteger('method_id');
            $table->unsignedBigInteger('payment_method_id');
            $table->timestamps();
//            $table->foreign('contract_id')->references('id')->on('contracts')->onDelete('cascade');
//            $table->foreign('method_id')->references('id')->on('methods')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('contracts_methods_payments');
    }
};
