<?php

use Illuminate\Database\Seeder;

use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'email'  => 'admin@gmail.com',
            'username'  => 'admin',
            'password'  => bcrypt('password'),
            'name'      => 'Admin',
        ]);

        factory(App\Models\User::class, 10)->create();
    }
}
