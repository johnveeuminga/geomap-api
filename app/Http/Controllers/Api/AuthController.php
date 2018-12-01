<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $r){
    	$r->validate([
    		'name' => 'required',
    		'username' => 'required',
    		'email' => 'required',
    		'password' => 'required'
    	]);
    	
    	$user = User::firstOrNew(['email' => $r->email]);
    	$user->username = $r->username;
    	$user->name = $r->name;
    	$user->email = $r->email;
    	$user->password = bcrypt($r->password);
    	$user->save();

    	$http = new Client;

    	$response = $http->post(url('oauth/token'), [
    		'form_params' => [
    			'grant_type' => 'password',
    			'client_id' => // id ,
    			'client_secret' => // client secret,
    			'username' => $r->email,
    			'password' => $r->password,
    			'scope' => ''
    		]
    	]);
    	return response(['data' => json_decode((string) $response->getBody(), true) ]);
    }

    public function login(Request $r){
    	$r->validate([
    		'username' => 'required',
    		'password' => 'required'
    	]);
    	$user = User::where('username', $r->username)->first();
    	dd($user);
    	if (!$user) {
    		return response(['status' => 'error','message'=>'User not found']);
    	}
    	
    	if (Hash::check($r->password, $user->password)) {
    		$http = new Client;

    		$response = $http->post(url('oauth/token'), [
    			'form_params' => [
    				'grant_type' => 'password',
    				'client_id' => // client id,
    				'client_secret' => // client secret,
    				'username' => $r->email,
    				'password' => $r->password,
    				'scope' => ''
    			]
    		]);
    		return response(['data' => json_decode((string) $response->getBody(), true) ]);
    	}
    }
}
