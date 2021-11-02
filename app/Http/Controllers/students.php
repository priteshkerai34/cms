<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;
//use DB;

class students extends Controller
{
    public function liststudents() {
        $student = student::all();
        return view("students.view",[
            "students" => $student
        ]);
    }
    public function editstudents($id) {
        $student=student::find($id);
        return view("students/edit",[
            "students" => $student
        ]);
    }
    public function updatestudents(request $req) {
        $student_data = student::find($req->id);
        $student_data->name = $req->name;
        $student_data->email = $req->email;
        $student_data->number = $req->number;
        $student_data->gender = $req->gender;
        session()->flash("success","record has been updated");
        $student_data -> save();
        return redirect("list-students");
    }
    public function deletestudents($id) {
        $student = student::find($id);
        $student->delete();
        session()->flash("success","record has been deleted");
        return redirect('list-students');
    }
    public function addstudents(request $req) {
       $student = new student;
       $student->name = $req->name;
       $student->email = $req->email;
       $student->number = $req->number;
       $student->gender = $req->gender;
       $student ->save();
       session()->flash("success","record has been added");
       return redirect("list-students");
    }
}
