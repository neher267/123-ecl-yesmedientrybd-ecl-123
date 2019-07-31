<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Inquiry;

class InquiriesController extends Controller
{
    public function index()
    {
        // 0=unread; 1= primary selected; 2=selected; 3=rejected; 4=admited; 5=softdelete;
        $page_title = "Inquiryes";
        $inquiryes = Inquiry::where('status', 0)->latest()->get();
        $action=0;
        return view('pages.backend.inquiry.index', compact('inquiryes', 'page_title', 'action'));
    }  

    public function filter(Request $request)
    {
        // 0=unread; 1= primary selected; 2=selected; 3=rejected; 4=admited; 5=softdelete;
        $page_title = "Inquiryes";
        $inquiryes = Inquiry::where('status', $request->status)->latest()->get();
        $action=$request->status;
        return view('pages.backend.inquiry.index', compact('inquiryes', 'page_title','action'));
    }    

    public function show($id)
    {
        $inquiry = Inquiry::find($id);
    	$page_title = "Details";
        return view('pages.backend.inquiry.view', compact('inquiry', 'page_title'));
    }

    public function change_status(Request $request, Inquiry $inquiry)
    {
        // 0=unread; 1= primary selected; 2=selected; 3=rejected; 4=admited; 5=softdelete;
        $inquiry->status = $request->status;
        $inquiry->save();

        return redirect('dashboard/inquries')->withSuccess('Success!');
    }

    
    public function destroy(Inquiry $inquiry)
    {
        $inquiry->delete();

        return redirect('dashboard/inquries')->withSuccess('Delete Success!');
    }
}
