<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Training\Category;
use App\SkillnAble\Filters\CourseFilters;
use App\Models\Training\Course;

class CoursesController extends Controller
{
	/**
	* Frontend Pages Root path
	*
	* @var string
	*/
	protected $viewPath = 'pages.frontend.';

    /**
	* Show the application Training Popular Courses Page.
	*/
    public function index(CourseFilters $filters)
    {
        $title = "List of Colleges We Represent";
        
        return view($this->viewPath.'courses', compact('title'));
    }

    /**
	* Show the application Courses Details Page.
	*/
    public function show()
    {
        $title = "Course Details";
        
        return view($this->viewPath.'course-details', compact('title'));
    }
}
