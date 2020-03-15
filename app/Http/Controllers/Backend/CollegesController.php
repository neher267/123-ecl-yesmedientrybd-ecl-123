<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\College;
use App\Image;
use App\Http\Requests\CollegeStoreRequest;
use App\Http\Requests\CollegeUpdateRequest;

use Intervention\Image\ImageManager;

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
        // $manager = new ImageManager(array('driver' => 'imagick'));

        

        // open an image file
        // $img = \Image::make('public/test.jpg');

        // $img->fit(200);
        // $img->brightness(35);
        // $img->line(10, 100, 100, 100, function ($draw) {
        //     $draw->color('#0000ff');
        // });

        // $img->invert();

        //         $img = \Image::canvas(800, 600, '#f5f5f5');
        //         $img->ellipse(150, 200, 300, 200, function ($draw) {
        //     $draw->border(5, '#f00');
        // });

        // resize image instance
        // $img->resize(400, 400);

        // insert a watermark
        // $img->insert('public/transparent.gif');

        // save image in desired format
        // $img->save('public/15.jpg');

        // dd("ok");

        $page_title = "Colleges";
        $name = $this->route_name;
        $results = College::orderBy('name', 'asc')->get();
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

        // dd($request->all());
        $data = new College;      

		$data->name = trim($request->name);
        $data->slug = strtolower(str_replace(' ', '-', $data->name));
        
        $data->area = $request->area; 
        $data->meta_keyworks = $request->meta_keyworks;
        $data->about = $request->about;
        $data->addmission_info = $request->addmission_info;
        $data->total_students = $request->total_students;
        $data->total_foreign_students = $request->total_foreign_students;
        $data->full_address = $request->full_address;
        $data->short_description = $request->short_description;
        $data->description = $request->description;
        $data->display_at_home = $request->display_at_home;
        
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
    public function update(CollegeUpdateRequest $request, College $college)
    {
        $data = $college;
        
        $data->name = trim($request->name);
        $data->slug = strtolower(str_replace(' ', '-', $data->name));
        
        $data->area = $request->area; 
        $data->meta_keyworks = $request->meta_keyworks;
        $data->about = $request->about;
        $data->addmission_info = $request->addmission_info;
        $data->total_students = $request->total_students;
        $data->total_foreign_students = $request->total_foreign_students;
        $data->full_address = $request->full_address;
        $data->short_description = $request->short_description;
        $data->description = $request->description;
        $data->display_at_home = $request->display_at_home;
        $data->display_order = $request->display_order;
        $data->status = $request->status;

        $data->save();

        return redirect('dashboard/college')->withSuccess("Update Success!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(College $college)
    {
        $college->delete();
        return back()->withSuccess("Success!");
    }
}
