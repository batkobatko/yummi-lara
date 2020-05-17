<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
 
 {

 	Public function index()
 	{
return view('front.home');
 	}
  
  Public function pizzas()
  	{
return view('front.pizzas');
  	}

  Public function pizza()
  	{
return view('front.pizza');
  	}

 }
