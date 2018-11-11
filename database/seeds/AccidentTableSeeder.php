<?php

use Illuminate\Database\Seeder;

class AccidentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Accident::class, 20)->create();
    }
}
