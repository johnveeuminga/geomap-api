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

        // Test custom user credentials
        User::create([
          'email'  => 'test@email.com',
          'username'  => 'test',
          'password'  => bcrypt('secret'),
          'name'      => 'Test Customer',
        ]);

        factory(App\Models\User::class, 10)->create();
    }
}
