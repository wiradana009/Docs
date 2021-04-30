<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratories', function (Blueprint $table) {
            $table->id();
            $table->id_pasien();
            $table->string('acty_name', 100);
            $table->string('acty_type', 100);
            $table->string('units');
            $table->string('result');
            $table->string('interval_ranges');
            $table->string('desc');
            $table->date('tgl_periksa');

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
        Schema::dropIfExists('laboratories');
    }
}
