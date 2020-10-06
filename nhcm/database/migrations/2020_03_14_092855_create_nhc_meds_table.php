<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhcMedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhc_meds', function (Blueprint $table) {
            $table->bigIncrements('id_nhc');
            $table->string('first_name');
            $table->string('Last_name');
            $table->string('email');
            $table->string('Phone');
            $table->string('mobile');
            $table->string('case');
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
        Schema::dropIfExists('nhc_meds');
    }
}
