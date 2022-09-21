<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autas', function (Blueprint $table) {
            $table->increments("id");
            $table->text("Country");
            $table->text("Mfr_CommonName");
            $table->text("Mfr_ID");
            $table->text("Mfr_Name");
            $table->text("Vehicle registration number");
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
        Schema::dropIfExists('autas');
    }
};
