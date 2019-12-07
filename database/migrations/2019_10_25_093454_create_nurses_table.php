<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurses', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders');

            $table->string('patient')->nullable();
            $table->string('room')->nullable();
            $table->string('shift')->nullable();
            
            $table->integer('hcl')->nullable();
            $table->string('frequency')->nullable();
            $table->integer('nhd')->nullable();
            $table->string('others')->nullable();
            $table->string('start_pa')->nullable();
            $table->string('end_pa')->nullable();
            $table->string('start_weight')->nullable();
            $table->string('end_weight')->nullable();
            $table->string('machine')->nullable();
            $table->string('brand_model')->nullable();
            $table->string('filter')->nullable();
            $table->string('uf')->nullable();
            $table->string('access1')->nullable();
            $table->string('access2')->nullable();
            $table->string('epo')->nullable();
            $table->string('iron')->nullable();
            $table->string('vitb12')->nullable();
            $table->text('start_observation')->nullable();
            $table->text('end_observation')->nullable();

            $table->string('hr', 25)->nullable();
            $table->string('pa', 25)->nullable();
            $table->string('px', 25, 25)->nullable();
            $table->string('qb', 25)->nullable();
            $table->string('cnd', 25)->nullable();
            $table->string('ra', 25)->nullable();
            $table->string('rv', 25)->nullable();
            $table->string('ptm', 25)->nullable();
            $table->text('obs')->nullable();

            $table->string('hr2', 25)->nullable();
            $table->string('pa2', 25)->nullable();
            $table->string('px2', 25)->nullable();
            $table->string('qb2', 25)->nullable();
            $table->string('cnd2', 25)->nullable();
            $table->string('ra2', 25)->nullable();
            $table->string('rv2', 25)->nullable();
            $table->string('ptm2', 25)->nullable();
            $table->text('obs2')->nullable();

            $table->string('hr3', 25)->nullable();
            $table->string('pa3', 25)->nullable();
            $table->string('px3', 25)->nullable();
            $table->string('qb3', 25)->nullable();
            $table->string('cnd3', 25)->nullable();
            $table->string('ra3', 25)->nullable();
            $table->string('rv3', 25)->nullable();
            $table->string('ptm3', 25)->nullable();
            $table->text('obs3')->nullable();

            $table->string('hr4', 25)->nullable();
            $table->string('pa4', 25)->nullable();
            $table->string('px4', 25)->nullable();
            $table->string('qb4', 25)->nullable();
            $table->string('cnd4', 25)->nullable();
            $table->string('ra4', 25)->nullable();
            $table->string('rv4', 25)->nullable();
            $table->string('ptm4', 25)->nullable();
            $table->text('obs4')->nullable();

            $table->string('hr5', 25)->nullable();
            $table->string('pa5', 25)->nullable();
            $table->string('px5', 25)->nullable();
            $table->string('qb5', 25)->nullable();
            $table->string('cnd5', 25)->nullable();
            $table->string('ra5', 25)->nullable();
            $table->string('rv5', 25)->nullable();
            $table->string('ptm5', 25)->nullable();
            $table->text('obs5')->nullable();

            $table->string('hr6', 25)->nullable();
            $table->string('pa6', 25)->nullable();
            $table->string('px6', 25)->nullable();
            $table->string('qb6', 25)->nullable();
            $table->string('cnd6', 25)->nullable();
            $table->string('ra6', 25)->nullable();
            $table->string('rv6', 25)->nullable();
            $table->string('ptm6', 25)->nullable();
            $table->text('obs6')->nullable();

            $table->string('hr7', 25)->nullable();
            $table->string('pa7', 25)->nullable();
            $table->string('px7', 25)->nullable();
            $table->string('qb7', 25)->nullable();
            $table->string('cnd7', 25)->nullable();
            $table->string('ra7', 25)->nullable();
            $table->string('rv7', 25)->nullable();
            $table->string('ptm7', 25)->nullable();
            $table->text('obs7')->nullable();

            $table->string('hr8', 25)->nullable();
            $table->string('pa8', 25)->nullable();
            $table->string('px8', 25)->nullable();
            $table->string('qb8', 25)->nullable();
            $table->string('cnd8', 25)->nullable();
            $table->string('ra8', 25)->nullable();
            $table->string('rv8', 25)->nullable();
            $table->string('ptm8', 25)->nullable();
            $table->text('obs8')->nullable();

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
        Schema::dropIfExists('nurses');
    }
}
