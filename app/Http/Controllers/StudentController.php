<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function Student()
    {
        $studentlist = Student::all();
        return view('backend/student/student', compact('studentlist'));
    }

    public function StudentCreate()
    {
        return view('backend/student/student_create');
    }

    public function StudentInsert(Request $req)
    {
      $image = $req->file('st_image');
      $save_url = time() . '.' .$image->getClientOriginalextension();
      $image->move(public_path('images/'),$save_url); 
      $img_url = 'images/'.$save_url;

        Student::insert([
            'st_name' =>$req->st_name,
            'st_roll' =>$req->st_roll,
            'st_depertment' =>$req->st_depertment,
            'st_image'  =>$img_url,
        ]);
        return back();
    }

    public function StudentList()
    {
        
    }

    // This query for student Edit

    public function StudentEdit($edit_id)
    {
        $student = Student::findOrFail($edit_id);
        return view('backend/student/student_edit', compact('student'));
    }

    // This query for student Update

    public function StudentUpdate(Request $request)
    {
        $edit_id = $request->EditId;
        $student = Student::findOrFail($edit_id);
        if($request->file('st_image')){
            if(file_exists($student->st_image)){
                unlink($student->st_image);
                
                   }
    
                   $image = $request->file('st_image');
                   $save_url = time() . '.' .$image->getClientOriginalextension();
                   $image->move(public_path('images/'),$save_url); 
                   $img_url = 'images/'.$save_url;
    
                    Student::findOrFail($edit_id)->update([
                        'st_name' =>$request->st_name,
                        'st_roll' =>$request->st_roll,
                        'st_depertment' =>$request->st_depertment,
                        'st_image' =>$img_url,    
                     ]);
        }

        else{
            Student::findOrFail($edit_id)->update([

                'st_name' =>$request->st_name,
                'st_roll' =>$request->st_roll,
                'st_depertment' =>$request->st_depertment,
               
                  
             ]);
        }

        return redirect('student');
    }




    // This query for student image delete
    public function StudentDelete($delete_id)
    {
        $student = Student::findOrFail($delete_id);
        // image delete 
        if(file_exists($student->st_image)){
            unlink($student->st_image);
            $student->delete();
            return back();
        }
    }



  
}
