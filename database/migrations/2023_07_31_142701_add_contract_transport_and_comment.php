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
        Schema::create('contract_transport', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_freight_offert_id');
            $table->unsignedBigInteger('fk_transport_offer_id');
            $table->timestamp('agreement_date')->nullable();
            $table->timestamps();
        });


        Schema::create('comment', function (Blueprint $table) {
            $table->id();

            $table->float('mark');
            $table->text('comment');
            $table->unsignedBigInteger('fk_contract_transport_id');
            $table->foreign('fk_contract_transport_id')->references('id')->on('contract_transport')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('contract_transport');
        Schema::drop('comment');
    }
};
