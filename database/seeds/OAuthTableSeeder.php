<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Laravel\Passport\Client;

class OAuthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Default Password Client
        $default_password_token = 'Du705fh5wqV0SSoIGOHKJSEECEViTJOpjdB6sXhJ';

        // Social Password Grant
        $social_password_grant = 'mmE6hkkHC07y4QGRD61KutbmYHhQGL1PiTpRMXeX';

        $client = new Client;

        $client->name = 'Safetravel API Password Grant Client';
        $client->secret = $default_password_token;
        $client->redirect  = 'http://localhost';
        $client->password_client = 1;
        $client->personal_access_client = 0;
        $client->revoked = 0;

        $client->save();

        // Default Social Access Grant
        $client = new Client;

        $client->name = 'Social Access Grant Client';
        $client->secret = $social_password_grant;
        $client->redirect  = 'http://localhost';
        $client->password_client = 0;
        $client->personal_access_client = 0;
        $client->revoked = 0;

        $client->save();
    }   
}
