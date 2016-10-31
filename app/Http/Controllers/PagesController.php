<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//use App\Http\Requests;

class PagesController extends Controller
{
	public function home(){
		return view('home');
	}
	public function about(){
		return view('about');
	}
	public function inventory(){
		return view('inventory');
	}
	public function schedule(){
		return view('schedule');
	}
	public function feedback(){
		return view('feedback');
	}
	public function signin(){
		return view('signin');
	}
	public function signup(){
		return view('signup');
	}
	public function subscribe(){
		return view('subscribe');
	}
	public function contact(){
		return view('contact');
	}
}
