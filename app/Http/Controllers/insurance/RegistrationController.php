<?php

namespace App\Http\Controllers\insurance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Agent;
use Illuminate\Console\View\Components\Alert;

class RegistrationController extends Controller
{
    function index()
    {
        return view('auth.register');
    }
    function client(Request $request)
    {
        $request->validate([
            'mobile'=> 'unique:clients'
        ]);
        $client = new Client();
        $client->fname = $request->f_name;
        $client->lname = $request->l_name;
        $client->mobile = $request->m_number;
        $client->password = $request->password;
        $res = $client->save();
        if($res){
            return back()->with('success','Registered Successfully!');
        }
        else{
            return back()->with('fail','Somethig wrong');
        }
    }
    function agent(Request $request)
    {
        $request->validate([
            'mobile'=> 'unique:agents',
            'agent_code'=> 'unique:agents'
        ]);
        $agent = new Agent();
        $agent->agent_code = $request->a_code;
        $agent->fname = $request->af_name;
        $agent->mobile = $request->am_number;
        $agent->password = $request->apassword;
        $res = $agent->save();
        if($res){
            return back()->with('success','Registered Successfully!');
        }
        else{
            return back()->with('fail','Somethig wrong!');
        }
    }
}
?>
