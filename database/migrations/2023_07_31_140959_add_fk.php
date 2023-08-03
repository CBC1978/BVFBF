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
        Schema::table('shipper', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_user_id');
            $table->foreign('fk_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    
        Schema::table('freight_announcement', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_shipper_id');
            $table->foreign('fk_shipper_id')->references('id')->on('shipper')->onDelete('cascade');
         });
    
         Schema::table('carrier', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_user_id');
            $table->foreign('fk_user_id')->references('id')->on('users')->onDelete('cascade');
                   });
    
        Schema::table('transport_offer', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_freight_announcement_id');
            $table->unsignedBigInteger('fk_carrier_id');
            $table->foreign('fk_freight_announcement_id')->references('id')->on('freight_announcement')->onDelete('cascade');
            $table->foreign('fk_carrier_id')->references('id')->on('carrier')->onDelete('cascade');       });
   

            
        Schema::table('transport_announcement', function (Blueprint $table) {
            $table->foreign('fk_carrier_id')->references('id')->on('carrier')->onDelete('cascade');
            $table->unsignedBigInteger('fk_carrier_id');
                 });

                 
        Schema::table('freight_offer', function (Blueprint $table) {
            $table->foreign('fk_transport_announcement_id')->references('id')->on('transport_announcement')->onDelete('cascade');
            $table->foreign('fk_shipper_id')->references('id')->on('shipper')->onDelete('cascade');
        });
    
    
        Schema::table('contract', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_freight_announcement_id');   
            $table->unsignedBigInteger('fk_transport_offer_id');
            $table->foreign('fk_freight_announcement_id')->references('id')->on('freight_announcement')->onDelete('cascade');
    
            $table->foreign('fk_transport_offer_id')->references('id')->on('transport_offer')->onDelete('cascade');
         });
    
             Schema::table('comment', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_contract_id');
            $table->foreign('fk_contract_id')->references('id')->on('contract')->onDelete('cascade');
        });
    


    
      
    

    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
