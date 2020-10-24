<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home($value='')
    {
    	return view('welcome');
    }
    public function a($value='')
    {
    	return 'Hello Route';
    }
    public function testing($value='')
    {
    	return view('testing');
    }
    public function service($value='')
    {
        // return view('service',['name'=>'May Win Thwel']);(string)

        $students=array(
            array('name'=>'mg mg','age'=>22),
            array('name'=>'su su','age'=>21)
        );
        return view('service',['students'=>$students]);
    }
}
