<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracings', function (Blueprint $table) {
            $table->bigIncrements('id');
            //PRIMARA PARTE FORMATO 006
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients'); 

            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');

            $table->unsignedBigInteger('shift_id');
            $table->foreign('shift_id')->references('id')->on('shifts');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('hosp_ref', 50);
            $table->string('unit_dial', 50);
            $table->string('consult_frec');
            $table->string('attorney', 100);

            //SEGUNDA PARTE DE FORMATO 006
            $table->text('cause_erca');
            $table->string('time_predial',10);
            $table->string('access_vsc',50);
            $table->date('date_predl');
            $table->string('dp_predl');
            $table->string('hemod_dl');
            $table->string('acc_vasc_dl');
            $table->string('establishment');
            
            //TERCERA PARTE FORMATO 006

            $table->string('tpp_acc_cvc', 10);
            $table->string('tpp_acc_fav', 10);
            $table->string('num_acc_cvc', 10);
            $table->string('nom_acc_fav', 10);
            $table->string('lost_acc_cvc', 10);
            $table->string('lost_acc_fav', 10);

            $table->date('date_transplant');
            $table->string('transplant', 2);

            //TRATAMIENTO 006

            $table->string('hia1',10);
            $table->string('frecuency1', 10);
            $table->string('hia2', 10);
            $table->string('frecuency2', 10);
            $table->string('hia3', 10);
            $table->string('frecuency3', 10);

            //TABLA DE DATOS FORMATO 006

            $table->integer('position1');
            $table->string('month1', 25);
            $table->date('date_register1');
            $table->string('type1', 50);
            $table->string('time1',50);
            $table->string('location1', 50);
            $table->string('carac1',50);
            $table->string('dist1',50);
            $table->string('start1', 10);
            $table->string('end1', 10);
            $table->string('qb1', 10);
            $table->string('ra1', 10);
            $table->string('rv1', 10);
            $table->string('trouble1', 100);
            $table->string('observation1', 100);

            $table->integer('position2');
            $table->string('month2', 25);
            $table->date('date_register2');
            $table->string('type2', 50);
            $table->string('time2',50);
            $table->string('location2', 50);
            $table->string('carac2',50);
            $table->string('dist2',50);
            $table->string('start2', 10);
            $table->string('end2', 10);
            $table->string('qb2', 10);
            $table->string('ra2', 10);
            $table->string('rv2', 10);
            $table->string('trouble2', 100);
            $table->string('observation2', 100);

            $table->integer('position3');
            $table->string('month3', 25);
            $table->date('date_register3');
            $table->string('type3', 50);
            $table->string('time3',50);
            $table->string('location3', 50);
            $table->string('carac3',50);
            $table->string('dist3',50);
            $table->string('start3', 10);
            $table->string('end3', 10);
            $table->string('qb3', 10);
            $table->string('ra3', 10);
            $table->string('rv3', 10);
            $table->string('trouble3', 100);
            $table->string('observation3', 100);

            $table->integer('position4');
            $table->string('month4', 25);
            $table->date('date_register4');
            $table->string('type4', 50);
            $table->string('time4',50);
            $table->string('location4', 50);
            $table->string('carac4',50);
            $table->string('dist4',50);
            $table->string('start4', 10);
            $table->string('end4', 10);
            $table->string('qb4', 10);
            $table->string('ra4', 10);
            $table->string('rv4', 10);
            $table->string('trouble4', 100);
            $table->string('observation4', 100);

            $table->integer('position5');
            $table->string('month5', 25);
            $table->date('date_register5');
            $table->string('type5', 50);
            $table->string('time5',50);
            $table->string('location5', 50);
            $table->string('carac5',50);
            $table->string('dist5',50);
            $table->string('start5', 10);
            $table->string('end5', 10);
            $table->string('qb5', 10);
            $table->string('ra5', 10);
            $table->string('rv5', 10);
            $table->string('trouble5', 100);
            $table->string('observation5', 100);
            

            
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
        Schema::dropIfExists('tracings');
    }
}
