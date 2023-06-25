<?php

namespace App\Http\Controllers\insurance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Policy_holders;
use App\Models\Client;
use App\Models\Profile;
use App\Models\Policies;
use Illuminate\Console\View\Components\Alert;

class PolicyController extends Controller
{
    public function index()
    {
        return view('policy.policy');
    }
    public function logged_in_check($id, $premium)
    {
        $client = Profile::where('mobile', '=', session('client_mobile'))->first();
        if (!session('client_logged_in')) {
            return redirect('/login');
        } elseif (!$client) {
            return redirect('/profile');
        } else {
            session(['policy_id' => $id]);
            session(['premium' => $premium]);
            return redirect('/policy/get');
        }
    }
    public function get_policyholder_data()
    {
        $client = Profile::where('mobile', '=', session('client_mobile'))->first();
        $holder = new Policy_holders();
        $holder->policy_id = session('policy_id');
        $holder->mobile = $client->mobile;
        $holder->family_member = $client->family_member;
        $holder->premium = session('premium');
        $holder->total_premium = session('premium') * $client->family_member;
        $holder->start_date = date('Y-m-d');
        $holder->end_date = date('Y-m-d', strtotime('+1 year', strtotime($holder->start_date)));
        $res = $holder->save();
        if ($res) {
            return redirect('/policy')->with('success', 'Policy is now available for You');
        } else {
            return back()->with('fail', 'Somethig wrong');
        }
    }
    public function show_policy_data()
    {
        $policies = Policy_holders::where('mobile', '=', session('client_mobile'))->get();
        $policies_count = $policies->count();
        return view('policy.show_data', compact('policies', 'policies_count'));
    }

    public function registered_policy(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $policies = Policies::where('policy_id', 'LIKE', '%'.$search.'%')
            ->orWhere('description', 'LIKE', '%'.$search.'%')
            ->orWhere('premium_amount', 'LIKE', '%'.$search.'%')->get();
        }
        else {
            $policies = Policies::all();
        }
        $policies_count = $policies->count();
        return view('policy.show_registered_policies', compact('policies', 'policies_count', 'search'));
    }
    public function register_policy()
    {
        return view('policy.policy_registration');
    }
    public function new_policy_data(Request $request)
    {
        $policy = new Policies();
        $policy->policy_id = $request->p_id;
        $policy->description = $request->description;
        $policy->premium_amount = $request->premium;
        $res = $policy->save();
        if ($res) {
            return back()->with('success', 'Policy Registerd Successfully');
        } else {
            return back()->with('fail', 'Somethig wrong');
        }
    }
}
