<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	"name"=>"May Win Thwel",
        	"email"=>"may2328@gmail.com",
        	"password"=>Hash::make('123456789')
        ]);

        User::create([
        "name" => "Mg Mg",
        "email" => "mgmg@gmail.com",
        "password" => Hash::make('123456789')
      ]);
    }
}
