<?php

namespace App\Http\Controllers\insurance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Policy_holders;
use App\Models\Profile;
use App\Models\AdminProfile;
use App\Models\Agent;

class AgentController extends Controller
{
    public function profile()
    {
        $agent =  Agent::where('mobile', '=', session('agent_mobile'))->first();
        $agent_code = $agent->agent_code;
        $fname = $agent->fname;
        $mobile = $agent->mobile;
        return view('agent.profile',compact('agent_code','fname','mobile'));
    }

    public function register()
    {
        echo "Registration Successful";
    }

    public function client_data(Request $request)
    {
        if (session('agent_logged_in')) {
            $search = $request['search'] ?? "";
            $clients = Policy_holders::paginate(10);
            if ($search != "") {
                $clients = Policy_holders::where('policy_id', 'LIKE', '%' . $search . '%')
                    ->orWhere('mobile', 'LIKE', '%' . $search . '%')
                    ->orWhere('premium', 'LIKE', '%' . $search . '%')
                    ->orWhere('start_date', 'LIKE', '%' . $search . '%')
                    ->orWhere('end_date', 'LIKE', '%' . $search . '%')->paginate(20);
            }
            $client_count = $clients->count();
            return view('agent.client_policy_data', compact('search', 'clients', 'client_count'));
        }
        return redirect('/');
    }
    public function registered_user(Request $request)
    {
        if (session('agent_logged_in')) {
            $search = $request['search'] ?? "";
            $clients = Profile::paginate(10);
            if ($search != "") {
                $clients = Profile::where('fname', 'LIKE', '%' . $search . '%')
                    ->orWhere('mname', 'LIKE', '%' . $search . '%')
                    ->orWhere('lname', 'LIKE', '%' . $search . '%')
                    ->orWhere('gender', 'LIKE', '%' . $search . '%')
                    ->orWhere('dob', 'LIKE', '%' . $search . '%')
                    ->orWhere('mobile', 'LIKE', '%' . $search . '%')
                    ->orWhere('pincode', 'LIKE', '%' . $search . '%')
                    ->orWhere('marital_status', 'LIKE', '%' . $search . '%')->paginate(50);
            }
            $client_count = $clients->count();
            return view('agent.registered_user', compact('search', 'clients', 'client_count'));
        }
        return redirect('/');
    }

    public function show_profile()
    {
        $agent = AdminProfile::where('mobile', '=', session('agent_mobile'))->first();
        if (!$agent) {
            return redirect('/set-agent-profile');
        }
        return view('agent.show_profile', compact('agent'));
    }

    public function set_profile(Request $request)
    {
        $request->validate([
            'mobile' => 'unique:profiles'
        ]);
        $agent = new AdminProfile();
        $agent->agent_code = $request->a_code;
        $agent->fname = $request->f_name;
        $agent->gender = $request->gender;
        $agent->dob = $request->DOB;
        $agent->mobile = $request->m_number;
        $agent->address = $request->address;
        $agent->pincode = $request->pincode;
        $res = $agent->save();
        if ($res) {
            return redirect('/agent-profile');
        } else {
            return back()->with('fail', 'Somethig wrong');
        }
    }
    public function edit_profile()
    {
        $agent =  AdminProfile::where('mobile', '=', session('agent_mobile'))->first();
        return view('agent.edit_profile',compact('agent'));
    }

    public function edit_agent_profile(Request $request){
        $agent =  AdminProfile::where('mobile', '=', session('agent_mobile'))->first();
        $agent->agent_code = $request->a_code;
        $agent->fname = $request->f_name;
        $agent->gender = $request->gender;
        $agent->dob = $request->DOB;
        $agent->mobile = $request->m_number;
        $agent->address = $request->address;
        $agent->pincode = $request->pincode;
        $agent->update();
        return redirect('/agent-profile');
    }
}
