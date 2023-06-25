<?php

namespace App\Http\Controllers\insurance;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function subscribe(Request $request){
        $request->validate([
            'email'=> 'email|unique:subscribes',
        ]);
        $email = new Subscribe();
        $email->email = $request->email;
        $email->save();
            return back();
    }

    public function about(){
        return view('other.about');
    }
    public function contact_us(){
        return view('other.contact_us');
    }
}
