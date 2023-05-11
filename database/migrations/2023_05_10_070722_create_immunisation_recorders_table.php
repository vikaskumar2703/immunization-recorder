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
        Schema::create('immunisation_recorders', function (Blueprint $table) {
            $table->id();
            $table->string('email_id');
            $table->string('phone_no');
            $table->string('parent_name');
            $table->string('dob');
            $table->string('HepB');
            $table->string('HepB1');
            $table->string('RV');
            $table->string('RV2');
          
  
  `` char(50) DEFAULT NULL,
  `` date DEFAULT NULL,
  `HepB` char(20) DEFAULT NULL,
  `HepB1` char(20) DEFAULT NULL,
  `RV` char(20) DEFAULT NULL,
  `RV2` char(40) DEFAULT NULL,
  `RV3` char(40) DEFAULT NULL,
  `DTap1` char(50) DEFAULT NULL,
  `DTap2` char(50) DEFAULT NULL,
  `DTap3` char(50) DEFAULT NULL,
  `Hib1` char(50) DEFAULT NULL,
  `Hib2` char(50) DEFAULT NULL,
  `Hib3` char(50) DEFAULT NULL,
  `PCV1` char(50) DEFAULT NULL,
  `PCV2` char(50) DEFAULT NULL,
  `PCV3` char(50) DEFAULT NULL,
  `IPV1` char(50) DEFAULT NULL,
  `IPV2` char(30) DEFAULT NULL,
  `IPV3` char(50) DEFAULT NULL,
  `Influenza` char(50) DEFAULT NULL,
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('immunisation_recorders');
    }
};
