<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
     public function home($value='')
  {
    return view('home');
  }

   public function festival($value='')
  {
    return view('festival');
  }

   public function ecotorism($value='')
  {
    return view('eco');
  }

  public function community($value='')
  {
    return view('community');
  }

  public function package($value='')
  {
    return view('package');
  }

  public function threeday($value='')
  {
    return view('threeday');
  }

  public function fourday($value='')
  {
    return view('fourday');
  }

   public function fiveday($value='')
  {
    return view('fiveday');
  }


  public function day($value='')
  {
    return view('day');
  }

  public function yangon($value='')
  {
    return view('yangon');
  }

   public function bago($value='')
  {
    return view('bago');
  }

  public function innwa($value='')
  {
    return view('innwa');
  }

  public function optional($value='')
  {
    return view('optional');
  }

  public function mountain($value='')
  {
    return view('mountain');
  }

  public function trekking($value='')
  {
    return view('trekking');
  }

  public function inle($value='')
  {
    return view('inle');
  }




  public function promotional($value='')
  {
    return view('promotional');
  }

  public function carrental($value='')
  {
    return view('carrental');
  }

  public function about($value='')
  {
    return view('about');
  }

  public function contact($value='')
  {
    return view('contact');
  }
}
