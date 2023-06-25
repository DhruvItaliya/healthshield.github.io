<?php

namespace App\Http\Controllers\insurance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use App\Models\Agent;

class LoginController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    function client(Request $request){
        $client = Client::where('mobile','=',$request->m_number)->first();
        if($client){
            if(($client->password)==($request->password)){
                session(['client_logged_in'=> true]);
                session(['client_mobile'=>$client->mobile]);
                return redirect('/');
            }
            else{
                return back()->with('client_fail','This mobile is not registered');
            }
        }
        else{
            return back()->with('client_fail','This mobile is not registered');
        }
    }

    function agent(Request $request){
        $agent = Agent::where('agent_code','=',$request->a_code)->first();
        if($agent){
            if(($agent->password)==($request->apassword)){
                session(['agent_logged_in'=> true]);
                session(['agent_mobile'=>$agent->mobile]);
                return redirect('/');
            }
            else{
                return back()->with('agent_fail','This agent id is not registered');
            }
        }
        else{
            return back()->with('agent_fail','This agent id is not registered');
        }
    }

    function logout(){
        session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
