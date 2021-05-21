<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePaket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket', function (Blueprint $table) {
            
            $table->string('id',40);
            $table->string('nama',115);
            $table->integer('harga');
            $table->timestamps();

            $table->primary('id');
            $table->engine ='innoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paket', function (Blueprint $table) {
            //
        });
    }
}
