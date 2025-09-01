<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function getStudent(){
        $studentData=Student::paginate(5);
        return view('studentList',['students'=>$studentData]);
    }
    public function addStudent(Request $request){
        $student=new Student();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->username=$request->username;
        $student->save();
        if($student){
            return redirect('/getStudents');
        }
        else {
            return "some went wrong";
        }
    }
    public function delete($id){
        
        $deleted=Student::destroy($id);
        if($deleted){
            return redirect('/getStudents');
        }
        else{
            return "something went wrong";
        }
    }
    public function edit($id){
        $data=Student::find($id);
        if($data){
        return view('edit',['data'=>$data]);
        }
        echo "no record found";
    }
    public function update(Request $request , $id){
        $student=Student::find($id);
        
        if($student){
        $student->name=$request->name;
        $student->email=$request->email;
        $student->username=$request->username;
            if($student->save()){
              return  redirect('/getStudents');
            }
            else {
                return "data not updated";
            }
         }
         else{
            return "Data not found";
         }
    }
    public function search(Request $request){
        $student=Student::where('name','like',"%$request->search%")->get();
        return view('studentList',['students'=>$student]);
        }
        public function multiDelete(Request $request){
            $result=Student::destroy($request->id);
            if($result){
            return redirect('/getStudents');
            }
            else {
                return "Some thing went wrong";
            }
        }
}
