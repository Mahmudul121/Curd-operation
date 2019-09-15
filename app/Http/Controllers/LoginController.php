<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
   
	public function index(){	

		return view('login.index');
	}

	public function verify(Request $req){	
		echo "aas";




		$result = DB::table('user')->where('username', $req->uname)
				->where('password', $req->password)
				->get();

				echo $result;
		
		if(count($result) > 0){

			$req->session()->put('user', $req->uname);
			return redirect()->route('home.index');
		}else{
			$req->session()->flash('msg', 'Invalid Username or Password');
			return redirect()->route('login.index');
		}
	}
}
