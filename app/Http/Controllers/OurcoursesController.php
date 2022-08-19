<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurCourses;

class OurcoursesController extends Controller
{
    public function CoursesCreate()
    {
        return view('backend/ourcourses/courses_create');
    }

    public function CoursesInsert(Request $request)
    {

      $image = $request->file('image');
      $save_url = time() . '.' .$image->getClientOriginalextension();
      $image->move(public_path('images/'),$save_url); 
      $img_url = 'images/'.$save_url;
      OurCourses::insert([
        'admission' =>$request->admission,
        'title' =>$request->courses_title,
        'description' =>$request->description,
        'cradit' =>$request->cradit,
        'duration' =>$request->duration,
        'image'  =>$img_url,
      ]);
      return back();  
    }

    public function AllourCourses()
    {
      $ourcourses = OurCourses::all();
        return view('backend/ourcourses/all_courses', compact('ourcourses'));
    }

    public function CoursesDelete($delete_id)
    {
      $ourcourses = OurCourses::findOrfail($delete_id);
      if(file_exists($ourcourses->image)){
        unlink($ourcourses->image);
      }
      $ourcourses->delete();
      return back();
    }

    public function CoursesEdit($edit_id)
    {
      $ourcourses = OurCourses::findOrfail($edit_id);
      return view('backend/ourcourses/edit_courses', compact('ourcourses'));
    }


    public function UpdateCourses(Request $request)
    {
      $edit_id = $request->EditId;
      $student = OurCourses::findOrFail($edit_id);
      if($request->file('image')){
          if(file_exists($student->image)){
              unlink($student->image);
              
                 }
  
                 $image = $request->file('image');
                 $save_url = time() . '.' .$image->getClientOriginalextension();
                 $image->move(public_path('images/'),$save_url); 
                 $img_url = 'images/'.$save_url;
  
                 OurCourses::findOrFail($edit_id)->update([
                      'admission' =>$request->admission,
                      'title' =>$request->courses_title,
                      'description' =>$request->description,
                      'cradit' =>$request->cradit,
                      'duration' =>$request->duration,
                      'image' =>$img_url,    
                   ]);
        }

        else{
          OurCourses::findOrFail($edit_id)->update([

              'admission' =>$request->admission,
              'title' =>$request->courses_title,
              'description' =>$request->description,
              'cradit' =>$request->cradit,
              'duration' =>$request->duration,                
           ]);
          }

          return redirect('allourcourses');
    }





    public function CoursesList()
    {
      
    }


}
