<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Franchise;

class FranchiseController extends Controller
{
    public function index()
    {
        // 0=unread; 1= primary selected; 2=selected; 3=rejected; 4=admited; 5=softdelete;
        $page_title = "Franchisees";
        $results = Franchise::where('status', 0)->latest()->get();
        $action=0;
        return view('pages.backend.franchise.index', compact('results', 'page_title', 'action'));
    }  

    public function filter(Request $request)
    {
        // 0=unread; 1= primary selected; 2=selected; 3=rejected; 4=admited; 5=softdelete;
        $page_title = "Franchisees";
        $results = Franchise::where('status', $request->status)->latest()->get();

        $action=$request->status;
        return view('pages.backend.franchise.index', compact('results', 'page_title','action'));
    }    

    public function show($id)
    {
        $franchise = Franchise::find($id);
    	$page_title = "Details";
        return view('pages.backend.franchise.view', compact('franchise', 'page_title'));
    }

    public function change_status(Request $request, Franchise $franchise)
    {
        // 0=unread; 1= primary selected; 2=selected; 3=rejected; 4=admited; 5=softdelete;
        $franchise->status = $request->status;
        $franchise->save();

        return redirect('dashboard/franchise')->withSuccess('Success!');
    }

    
    public function destroy(Franchise $franchise)
    {
        $franchise->delete();

        return redirect('dashboard/franchise')->withSuccess('Delete Success!');
    }
}
