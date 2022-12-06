<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTtoToNurses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nurses', function (Blueprint $table) {
            $table->string('hr8', 25)->nullable();
            $table->string('pa8', 25)->nullable();
            $table->string('fc8', 25)->nullable();
            $table->string('qb8', 25)->nullable();
            $table->string('cnd8', 25)->nullable();
            $table->string('ra8', 25)->nullable();
            $table->string('rv8', 25)->nullable();
            $table->string('ptm8', 25)->nullable();
            $table->text('sol_hemodev8')->nullable();
            $table->text('obs8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nurses', function (Blueprint $table) {
            //
        });
    }
}
