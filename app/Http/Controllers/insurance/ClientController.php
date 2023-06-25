<?php

namespace App\Http\Controllers\insurance;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Client;

class ClientController extends Controller
{
    public function profile()
    {
        $client =  Client::where('mobile', '=', session('client_mobile'))->first();
        $fname = $client->fname;
        $lname = $client->lname;
        $mobile = $client->mobile;
        return view('client.profile', compact('fname', 'lname', 'mobile'));
    }
    public function edit_profile()
    {
        $client =  Profile::where('mobile', '=', session('client_mobile'))->first();
        return view('client.edit_profile', compact('client'));
    }
    public function send_edit_profile(Request $request)
    {
        $client =  Profile::where('mobile', '=', session('client_mobile'))->first();
        $client->fname = $request->f_name;
        $client->mname = $request->m_name;
        $client->lname = $request->l_name;
        $client->gender = $request->gender;
        $client->dob = $request->dob;
        $client->mobile = $request->m_number;
        $client->address = $request->address;
        $client->pincode = $request->pincode;
        $client->marital_status = $request->m_status;
        $client->spouse_name = $request->spouse;
        $client->family_member = $request->children;
        $client->family_member = $request->children;
        if ($request->m_status == "married") {
            $client->family_member += 2;
        } else {
            $client->children = 0;
            $client->family_member = 1;
        }
        $client->update();
        return redirect('/user-profile');
    }

    public function set_profile(Request $request)
    {
        $request->validate([
            'mobile' => 'unique:profiles'
        ]);
        $client = new Profile();
        $client->fname = $request->f_name;
        $client->mname = $request->m_name;
        $client->lname = $request->l_name;
        $client->gender = $request->gender;
        $client->dob = $request->dob;
        $client->mobile = $request->m_number;
        $client->address = $request->address;
        $client->pincode = $request->pincode;
        $client->marital_status = $request->m_status;
        $client->spouse_name = $request->spouse;
        $client->children = $request->children;
        $client->family_member = $request->children;
        if ($request->m_status == "married") {
            $client->family_member += 2;
        }
        else{
            $client->children = 0;
            $client->family_member = 1;
        }
        $res = $client->save();
        if($res){
            return redirect('/');
        }
        else{
            return back()->with('fail','Somethig wrong');
        }
    }
    public function show_profile()
    {
        $client = Profile::where('mobile', '=', session('client_mobile'))->first();
        if (!$client) {
            return redirect('/profile');
        }
        return view('client.show_profile', compact('client'));
    }
}
