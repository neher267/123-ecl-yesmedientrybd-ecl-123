<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\FranchiseStore;
use App\Http\Controllers\Controller;
use App\Franchise;

class FranchiseController extends Controller
{
    public function store(FranchiseStore $request)
    {
        // dd($request->all());
    	Franchise::create($request->all());
    	return redirect('thank-you');
    }

    public function thankyou()
    {
    	$title = "Thank You";
    	return view('pages.frontend.thank-you', compact('title'));
    }
}
