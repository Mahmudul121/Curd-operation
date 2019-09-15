<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{

	public function validSession($req){

		if($req->session()->has('user')){
			return true;
		}else{
			return false;
		}
	}

    public function index(Request $req){
		
		if($this->validSession($req)){
			return view('home.index');
		}else{
			return redirect()->route('login.index');
		}
    }

    public function add(){

    	return view('home.add');
    }

    public function create(Request $req){

    	$user = new User();
    	$user->username = $req->uname;
    	$user->password = $req->password;
    	$user->name = $req->name;
    	$user->dept = $req->dept;
    	$user->cgpa = $req->cgpa;
    	$user->save();

    	//$data = User::where('username', $req->uname)->where('password', $req->password)->get();
    	return redirect()->route('home.index');
    }

	public function details($id){

		$std = User::find($id);
		
		return view('home.details', ['std'=>$std]);
    }

    public function show(){

    	$stdList = User::all()->where('username',"!=","admin");
    	return view('home.stdlist', ['std'=> $stdList]);
    }
	
	public function edit($id){

		$std = User::find($id);
		return view('home.edit', ['std'=>$std]);
    }

    public function update(Request $req, $id){

    	$user = User::find($id);

    	$user->username = $req->uname;
    	$user->name = $req->name;
    	$user->dept = $req->dept;
    	$user->cgpa = $req->cgpa;
    	$user->save();

		return redirect()->route('home.stdlist');
    }
	public function delete($id){

		$std = User::find($id);
		return view('home.delete', ['std'=>$std]);
    }

    public function destroy($id){

		User::destroy($id);
		return redirect()->route('home.stdlist');
	}
}
