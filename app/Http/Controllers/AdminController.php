<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
	
    public function adminDeshboard(Request $request)
	{
		$users = User::all();			
		return view('admin_deshboard', compact('users'));
    }
    public function status(Request $request){
		
		$post = User::find($request->id);
		if($post->status == 1){
			$changestatus = 0;
		}else{
			$changestatus = 1;
		}
		$post->status = $changestatus;
		$post->save();		
	}
}
