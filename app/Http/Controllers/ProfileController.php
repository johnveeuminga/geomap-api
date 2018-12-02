<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\UserResource as UserResource;
use App\Models\User;
use Image;

class ProfileController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    } 

    public function profile($username) {
    	$me = User::where('username', $username)->first();
    	return view('user.profile', compact('me', $me));
    }
    public function upload_avatar(Request $r){
    	$updateAvatar = User::find(auth()->user()->id);
    	if ($r->hasFile('upload-avatar')) {
    		$image = $r->file('upload-avatar');
    		$filename = time() . '.' . $image->getClientOriginalExtension();
    		$location = public_path('images/users/' . $filename);
    		Image::make($image)->resize(400,400)->save($location);
    		$updateAvatar->avatar = '/images/users/' . $filename;
    		$updateAvatar->save();
    		return redirect()->back();
    	}
    }
    public function update(Request $r, $id){
    	$update = User::findOrFail($id)->update($r->all());
    	
    	return $r->wantsJson() ? new UserResource($update) : redirect()->back();

    }
}
