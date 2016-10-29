<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
class UserTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('users')->delete();
    
    User::create(array(
    	'name'     => 'Renu',
        'username' => 'Renu',
        'email'    => 'renushuklaoist@gmail.com',
        'password' => Hash::make('renu@123'),
    ));
  }
}