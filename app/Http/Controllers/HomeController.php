<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Show the home page
     *
     * @return \Illuminate\Http\Response
     */
    public function index($url)
    {
    	$link = Link::where('link', $url)->first();
    	if(!$link){
    		return redirect()->route('expired');
    	}
    	$deadline = Carbon::parse($link->expiresAt);
    	$now = Carbon::now();
    	$diffInDays =  $now->diffInDays($deadline, false);
    	if($diffInDays >= 0){
        	return view('welcome');
    	}else{
    		return redirect()->route('expired');
    	}
    }

    /**
     * Show the expired page
     *
     * @return \Illuminate\Http\Response
     */
    public function expired()
    {
        return view('expired');
    }

    /**
     * Show the generate page
     *
     * @return \Illuminate\Http\Response
     */
    public function generate()
    {
        return view('generate');
    }

    /**
     * Store new link
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$random = substr(md5(rand()), 0, 7);
    	$existing = Link::where('link', $random)->get();
    	if($existing->count()){
			session()->flash('errormessage', 'Böyle bir link zaten var.');
    		return redirect()->back();
    	}
    	$now = Carbon::now();
    	$expiresAt = $now->addDays($request->days)->format('Y-m-d');
    	$link = new Link;
    	$link->link = $random;
    	$link->expiresAt = $expiresAt;
    	$link->save();
        return view('generate', compact('link'));
    }
}