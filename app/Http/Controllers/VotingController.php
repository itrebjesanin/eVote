<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use App\Setting;

class VotingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function list() {
        $candidates = Candidate::all();
        return view('home', compact('candidates'));
    }

    public function process(Request $request) {
        $ids = $request->input('candidates');

        if(auth()->user()->voted === 1 ) {
            return redirect('home')->with('warning','You have voted already!');
        }
        if(!isset($ids)){
            return redirect()->back()->with('info', 'You should select at least one candidate!');
        }
        if(count($ids)>3) {
            return redirect()->back()->with('danger', 'You can vote for 3 candidates only');
        }
        foreach($ids as $id) {
            $candidate = Candidate::findOrFail($id);
            $candidate->votes += 1;
            $candidate->save();
        }
        auth()->user()->voted = 1;
        auth()->user()->save();
        
        return redirect()->route('home')->with('success','Thank you for voting!');
    }

    public function setup() {
        $settings = Setting::first();
        if($settings){
            $settings = Setting::first();
        } else {
            $settings = new Setting;
        }
        return view('voting.setup', compact('settings'));
    }

    public function setMaxSelect(Request $request) {
        $settings = Setting::first();
        if($settings){
            $settings->maxSelect = $request->max;
            $settings->save();
            return redirect()->back()->with('success', 'Settings saved!');
        } else {
            $settings = new Setting;
            $settings->maxSelect = $request->max;
            $settings->save();
            return redirect()->back()->with('success', 'Settings saved!');
        }
    }

}
