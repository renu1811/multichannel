<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Session;
use Auth;
use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		 $users = DB::table('users')->get();
		 print_r($users); die;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
			$data = Input::all();
		
		$user = new User();
	
	
		$user['name'] = trim(Input::get('name'));
		
		$authEmail = User::where('email',Input::get('remail'))->first();
		
		
		if(empty($authEmail->email)){
			$user['email'] = trim(Input::get('remail'));
		}
		$user['password'] =  Hash::make(trim(Input::get('rpassword')));
		if($user->save()){
			return Redirect::to('/');
		} 
		return Redirect::to('/register');
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	
	public function login() {
		// Getting all post data
		$data = Input::all();
		// Applying validation rules.
		$rules = array(
			'email' => 'required|email',
			'password' => 'required|min:6',
			 );
		$validator = Validator::make($data, $rules);
		if ($validator->fails()){
		  // If validation falis redirect back to login.
		  return Redirect::to('/')->withInput(Input::except('password'))->withErrors($validator);
		}
		else {
		  $userdata = array(
				'email' => Input::get('email'),
				'password' => Input::get('password')
			  );
		  // doing login.
		  if (Auth::validate($userdata)) {
			if (Auth::attempt($userdata)) {
				
			  return Redirect::intended('/dashboard');
			}
		  } 
		  else {
			// if any error send back with message.
			Session::flash('error', 'Email id or Password is incorrect'); 
			return Redirect::to('/');
		  }
		}
	}
	

	
	public function logout() {
	  Auth::logout(); // logout user
	  return Redirect::to('/'); //redirect back to login
	}
	
}
