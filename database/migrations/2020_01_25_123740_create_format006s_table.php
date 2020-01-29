 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormat006sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('format006s', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('tracing_id')->nullable();
            $table->foreign('tracing_id')->references('id')->on('tracings'); 

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('unit_dial', 50)->nullable();
            $table->string('nefro_treat', 50)->nullable();
            $table->string('frec')->nullable();
            $table->string('consult_frec')->nullable();
            $table->string('attorney', 100)->nullable();

            //SEGUNDA PARTE DE FORMATO 006
            $table->text('cause_erca')->nullable();
            $table->string('time_predial',10)->nullable();
            $table->string('access_vsc',50)->nullable();
            $table->date('date_predl')->nullable();
            $table->string('dp_predl')->nullable();
            $table->string('hemod_dl')->nullable();
            $table->string('acc_vasc_dl')->nullable();
            $table->string('establishment')->nullable();
            
            //TERCERA PARTE FORMATO 006

            $table->string('tpp_acc_cvc', 10)->nullable();
            $table->string('tpp_acc_fav', 10)->nullable();
            $table->string('num_acc_cvc', 10)->nullable();
            $table->string('num_acc_fav', 10)->nullable();
            $table->string('lost_acc_cvc', 10)->nullable();
            $table->string('lost_acc_fav', 10)->nullable();

            $table->date('date_transplant')->nullable();
            $table->string('transplant', 2)->nullable();

            //TRATAMIENTO 006

            $table->string('hia1',10)->nullable();
            $table->string('frecuency1', 10)->nullable();
            $table->string('hia2', 10)->nullable();
            $table->string('frecuency2', 10)->nullable();
            $table->string('hia3', 10)->nullable();
            $table->string('frecuency3', 10)->nullable();

            //TABLA DE DATOS FORMATO 006

            $table->integer('position')->nullable();
            $table->string('month', 25)->nullable();
            $table->date('date_register')->nullable();
            $table->string('type', 50)->nullable();
            $table->string('time',50)->nullable();
            $table->string('location', 50)->nullable();
            $table->string('carac',50)->nullable();
            $table->string('dist',50)->nullable();
            $table->string('start', 10)->nullable();
            $table->string('end', 10)->nullable();
            $table->string('qb', 10)->nullable();
            $table->string('ra', 10)->nullable();
            $table->string('rv', 10)->nullable();
            $table->text('trouble', 100)->nullable();
            $table->text('observation', 100)->nullable();
            
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
        Schema::dropIfExists('format006s')
        ;
    }
}
