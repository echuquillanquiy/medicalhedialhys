<?php

use Illuminate\Database\Seeder;
use App\Shift;

class ShiftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shift::create([
    		'name' => 'TURNO 1',
    	]);

    	Shift::create([
    		'name' => 'TURNO 2',
    	]);

    	Shift::create([
    		'name' => 'TURNO 3',
    	]);

    	Shift::create([
    		'name' => 'TURNO 4',
    	]);
    }
}
