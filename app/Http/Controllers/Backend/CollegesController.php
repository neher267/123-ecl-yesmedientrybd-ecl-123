<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\College;
use App\Image;
use App\Http\Requests\CollegeStoreRequest;
use App\Http\Requests\CollegeUpdateRequest;

class CollegesController extends Controller
{
    use RrsourceDelete;

    protected $path = 'pages.backend.college.';
    protected $route_name = "college";
    private $image_path = "images/college";
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {             
        $page_title = "Colleges";
        $name = $this->route_name;
        $results = College::orderBy('name', 'asc')->where('status', 1)->get();
        return view($this->path.'index', compact('name', 'page_title', 'results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Add New College";
        $name = $this->route_name;
        return view($this->path.'create', compact('page_title', 'name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CollegeStoreRequest $request)
    {
        $data = new College;

        

		$data->name = $request->name;
        $data->slug = strtolower(str_replace(' ', '-', $request->name));
        $data->slug = strtolower(str_replace('/', '-', $data->slug));
        $data->category_id = $request->category_id;
        $data->title = $request->title;
        $data->hands_on = (bool)$request->hands_on;
        $data->summary = $request->summary;
        $data->about = $request->about;
        $data->learning = $request->learning;
        $data->enroll = $request->enroll;
        $data->job_opp = $request->job_opp;
        $data->duration = $request->duration;
        $data->fee = $request->fee;
        $data->thumnail = $this->image_path.'/'.$imageName1;
        $data->background = $this->image_path.'/'.$imageName2;
        
        $data->save();        
        return back()->withSuccess("Success!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(College $college)
    {
        //dd($college);
        
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(College $college)
    {
        $result = $college;
        $page_title = $college->name.": Edit";
        $name = $this->route_name;
        $categories = College::orderBy('name', 'asc')->get();
        return view($this->path.'edit', compact('page_title', 'result', 'name', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, College $college)
    {
        $data = $college;
        $data->name = $request->name;
        $data->order = $request->order;
        $data->status = $request->status;
        $data->category_id = $request->category_id;
        $data->title = $request->title;
        $data->hands_on = (bool)$request->hands_on;
        $data->summary = $request->summary;
        $data->about = $request->about;
        $data->learning = $request->learning;
        $data->enroll = $request->enroll;
        $data->job_opp = $request->job_opp;
        $data->duration = $request->duration;
        $data->fee = $request->fee;
        
        if(!empty($request->thumnail)){
            $request->validate(['thumnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:400']); 
            $this->delete($college->thumnail);     
            $imageName = time().'thumnail.'.$request->thumnail->getClientOriginalExtension();
            $request->thumnail->move(public_path($this->image_path), $imageName);
            $data->thumnail = $this->image_path.'/'.$imageName;       
        }if(!empty($request->background)){
            $request->validate(['background' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:400']); 
            $this->delete($college->background);            
            $imageName = time().'background.'.$request->background->getClientOriginalExtension();
            $request->background->move(public_path($this->image_path), $imageName);
            $data->background = $this->image_path.'/'.$imageName;       
        }if(!empty($request->referance)){
            $request->validate(['referance' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:400']);   
            $this->delete($college->referance);
            $imageName = time().'referance.'.$request->referance->getClientOriginalExtension();
            $request->referance->move(public_path($this->image_path), $imageName);
            $data->referance = $this->image_path.'/'.$imageName;       
        }
        $data->save();

        return redirect('dashboard/Colleges')->withSuccess("Update Success!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(College $college)
    {
        $this->delete($college->thumnail, $college->background, $college->referance);
        $college->delete();
        return back()->withSuccess("Success!");
    }
}
