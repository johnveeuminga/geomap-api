<?php

use Illuminate\Database\Seeder;
use App\Models\Accident;

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

        // Test Accident #1
        $accident = new Accident;

        $accident->user_id = 2;
        $accident->name = 'This is just a sample';
        $accident->description = 'Accident sample description';
        $accident->lat = '16.416291';
        $accident->lng = '120.577228';
        $accident->city = 'Baguio';
        $accident->street = 'Chrome Street';
        $accident->region = 'Cordillera Administrative Region';
        $accident->state = 'Benguet';

        $accident->save();

        // Test Accident #2
        $accident = new Accident;
        
        $accident->user_id = 2;
        $accident->name = 'Sample #2';
        $accident->description = 'Accident #2 description';
        $accident->lat = '16.418291';
        $accident->lng = '120.576228';
        $accident->city = 'Baguio';
        $accident->street = 'Chrome Street';
        $accident->region = 'Cordillera Administrative Region';
        $accident->state = 'Benguet';

        $accident->save();
    }
}
