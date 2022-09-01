<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achivement;
use App\Models\Teacher;
use App\Models\Event;
use App\Models\Choose;
use App\Models\AboutUs;
use App\Models\Testimonial;
use App\Models\Category;
use App\Models\BlogPost;
// use PhpParser\Node\Stmt\Catch_;
use Carbon\Carbon;

class AchivementController extends Controller
{
    public function AllAchivement()
    {
        $achivement = Achivement::all();
        return view('backend/achievement/all_achivement', compact('achivement'));
    }

    public function CreateAchivement()
    {
        return view('backend/achievement/create_achive');
    }

    public function InsertAchive(Request $request)
    {
      $image = $request->file('achive_image');
      $save_url = time() . '.' .$image->getClientOriginalextension();
      $image->move(public_path('images/'),$save_url); 
      $img_url = 'images/'.$save_url;
      Achivement::insert([
        'title' =>$request->achive_title,
        'counter_no' =>$request->achive_cou_no,
        'achive_image' =>$img_url,
      ]);
      return back();
    }

    public function ListtAchive()
    {
        
    }

    public function EditAchivement($edit_id)
    {
        $achivement = Achivement::findOrfail($edit_id);
        return view('backend/achievement/edit_achivement', compact('achivement'));
    }

    public function DeleteAchivement($delete_id)
    {
      $achivement = Achivement::findOrfail($delete_id);
      if(file_exists($achivement->achive_image)) {
        unlink($achivement->achive_image);
      }
      $achivement->delete();
      return back();
    }


    // Teacher section start
    public function CreateTeacher()
    {
      return view('backend/teacher/create_teacher');
    }

    public function InsertTeteacher(Request $request)
    {
      $image = $request->file('tea_image');
      $save_url = time() . '.' .$image->getClientOriginalextension();
      $image->move(public_path('images/'),$save_url); 
      $img_url = 'images/'.$save_url;
      Teacher::insert([
        'tea_name' =>$request->tea_name,
        'tea_desig' =>$request->tea_designation,
        'tea_description' =>$request->tea_description,
        'facebook' =>$request->facebook,
        'youtube' =>$request->youtube,
        'twitter' =>$request->twitter,
        'google' =>$request->google,
        'tea_image' =>$img_url,
      ]);
      return back();
    }

    public function allteteacher()
    {
      $teacher = Teacher::all();
      return view('backend/teacher/all_teacher', compact('teacher'));
    }



    // Start Event section
    public function CreateEvent()
    {
      return view('backend/event/create_event');
    }

    public function InsertEvent(Request $request)
    {
      $image = $request->file('event_image');
      $save_url = time() . '.' .$image->getClientOriginalextension();
      $image->move(public_path('images/'),$save_url); 
      $img_url = 'images/'.$save_url;
      Event::insert([
        'title' =>$request->event_title,
        'description' =>$request->event_desc,
        'event_date' =>$request->event_date,
        'event_month' =>$request->event_month,
        'eventlocat' =>$request->event_locat,
        'event_time' =>$request->event_time,
        'event_image' =>$img_url,
      ]);
      return back();
    }

    public function AllEvent()
    {
      $event = Event::all();
      return view('backend/event/all_event', compact('event'));
    }

    // Start Chose section
    public function CreateChoose()
    {
      return view('backend/choose/create_choose');
    }

    public function InsertChoose(Request $request)
    {
      $image = $request->file('choo_image');
      $save_url = time() . '.' .$image->getClientOriginalextension();
      $image->move(public_path('images/'),$save_url); 
      $img_url = 'images/'.$save_url;
      Choose::insert([
        'title' =>$request->choo_title,
        'description' =>$request->choo_desc,
        'image' =>$img_url,
      ]);
      return back();
    }


    public function AllChoose()
    {
      $choose = Choose::all();
      return view('backend/choose/all_choose', compact('choose'));
    }

    // About section Query start
    public function CreateAbout()
    {
      return view('backend/about/create_about');
    }

    public function InsertAbout(Request $request)
    {
      $image = $request->file('image');
      $save_url = time() . '.' .$image->getClientOriginalextension();
      $image->move(public_path('images/'),$save_url); 
      $img_url = 'images/'.$save_url;

      $imag = $request->file('video_image');
      $save_ur = time() . '.' .$imag->getClientOriginalextension();
      $imag->move(public_path('images/'),$save_ur); 
      $img_ur = 'images/'.$save_ur;
      AboutUs::insert([
        'title' =>$request->abtitle,
        'description' =>$request->description,
        'btntext' =>$request->btntext,
        'btnlink' =>$request->btnurl,
        'videourl' =>$request->video_url,
        'aboutimage' =>$img_url,
        'videoimage' =>$img_ur,
      ]);
      return back();
    }

    public function AllAbout()
    {
      $aboutus = AboutUs::all();
      return view('backend/about/all_about', compact('aboutus'));
    }



    // Testimonial section Query Start
    public function CreatetesTimonila()
    {
      return view('backend/testimonial/create_testim');
    }

    public function inserttestimonila(Request $request)
    {
      $image = $request->file('testi_image');
      $save_url = time() . '.' .$image->getClientOriginalextension();
      $image->move(public_path('images/'),$save_url); 
      $img_url = 'images/'.$save_url;
      Testimonial::insert([
        'testi_title' =>$request->testi_title,
        'department' =>$request->department,
        'testidesc' =>$request->description,
        'testi_image' =>$img_url,
      ]);
      return back();
    }


    public function alltestimonila()
    {
      $testimon = Testimonial::all();
      return view('backend/testimonial/all_testim', compact('testimon'));
    }



    // Blog Post section Query start
    public function CreatPpost()
    {
      $categories = Category::latest()->get();
      return view('backend/blog/create_post', compact('categories'));
    }

    public function insertpost(Request $request)
    {
      $image = $request->file('image');
      $save_url = time() . '.' .$image->getClientOriginalextension();
      $image->move(public_path('images/'),$save_url); 
      $img_url = 'images/'.$save_url;
      BlogPost::create([
        'title' =>$request->title,
        'desctiption' =>$request->desctiption,
        'post_id' =>$request->cat_id,
        'image' =>$img_url,
      ]);
      return back();
    }

    public function AllPost()
    {
      
      //$post = BlogPost::withCount('category')->get();
      $posts = BlogPost::with('category')->get();
      //return $posts->category->category_name;
      return view('backend/blog/all_post', compact('posts'));
    }



    // Blog category section start
    public function CreateCategory()
    {
      return view('backend/category/create_category');
    }

    public function insertcategory(Request $request)
    {
      Category::insert([
        'category_name' =>$request->category_name,
      ]);
      return back();
      
    }

    public function AllCategory()
    {
      return view('backend/category/all_category');
    }


    public function singlepost($post)
    {
     // $postlist =  BlogPost::find($post);
     // return $postlist->post_id;
     

    //  $cat_id =$req->blog_id;

    //category with count
    $blog_cat = Category::withCount('posts')->get();

   // $cat_id = $blog_cat->id;
  //  return $blog_cat;

    //  $post_details = Category::where('id',$postlist->post_id)->get();

    //  Blog::where('cat_id',$cat_id)->get();
    //  $blog_count = Blog::where('cat_id',$blog_cat)->count();
     $post_details = BlogPost::where('id',$post)->first();

     //relate post
     $cat_details = BlogPost::with('category')->where('post_id',$post)->get();

    // return $cat_details;

    // return $post_details;
    //single post
     $cat_details = BlogPost::where('post_id',$post)->get();

       return view('frondend/single_blog',compact('post_details','blog_cat','cat_details'));
    }


    public function singlecat($post)
    {
    
    //   $blog_cat = Category::withCount('posts')->where('id',$cat_id)->get();
       $post_details = BlogPost::where('post_id',$post)->get();
      // return $post_details;


    }

    public function blog()
    {
      $post_list = BlogPost::simplePaginate(3);
      return view('frondend/blog',compact('post_list'));
      
    }

    

    public function Postsingle($post)
    {
      $postdetails = BlogPost::where('id',$post)->first();
      $category = Category::withCount('posts')->get();
      //$cat_detail  = BlogPost::with('category')->where('post_id',$post)->get();
      $cat_details = BlogPost::with('category')->where('post_id',$post)->get();
      $latest_posts = BlogPost::with('category')->take(3)->get();
      //return $latest_posts;
      return view('frondend/single_blog', compact('postdetails','category','latest_posts','cat_details'));
    }

   





    
}
