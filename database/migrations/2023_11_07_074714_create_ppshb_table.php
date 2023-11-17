<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpshbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppshb', function (Blueprint $table) {
            $table->increments('id_ppshb');
            $table->integer('id_users')->nullable();
            $table->string('pasphoto')->nullable();
            $table->string('rapot')->nullable();
            $table->string('ijazah')->nullable();
            $table->string('akta')->nullable();
            $table->string('kk')->nullable();
            $table->string('kip')->nullable();
            $table->string('surat_sedia')->nullable();
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
        Schema::dropIfExists('ppshb');
    }
}
