<?php

namespace App\Http\Controllers;

use App\Models\Achivement;
use App\Models\Student;
use App\Models\OurCourses;
use App\Models\Teacher;
use App\Models\Event;
use App\Models\Choose;
use App\Models\AboutUs;
use App\Models\BlogPost;
use App\Models\Testimonial;
use Illuminate\Http\Request;


class WebsiteController extends Controller
{
    public function WbsiteHome()
    {
        $achivement = Achivement::all();
        $teacher = Teacher::all();
        $ourcourses = OurCourses::all();
        $event = Event::all();
        $choose = Choose::all();
        $aboutus = AboutUs::all();
        $testimon = Testimonial::all();
        $posts = BlogPost::all();
        return view('frondend/home', compact('ourcourses','achivement','teacher','event','choose','aboutus','testimon','posts'));
    }



   
}
