<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OAuthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $default_password_token = 'Dih8amxaga3rtCHHkf9YKiQQaW4ZaRG7';

        DB::table('oauth_clients')->insert([
            'name'      => 'Safetravel API Password Grant Client',
            'secret'    => 'Du705fh5wqV0SSoIGOHKJSEECEViTJOpjdB6sXhJ',
            'redirect'  => 'http://localhost',
            'personal_access_client' => 0,
            'password_client'   => 1,
            'revoked'   => 0,
        ]);
    }
}
