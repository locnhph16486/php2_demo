<?php
namespace App\Controllers;
use App\Model\Teacher;
use App\Model\School;

class TeacherController{
    public function index(){
        $teacher = Teacher::all();
        $school = School::all();
        return view('teachers.index',[
            'teacher' => $teacher,
            'school' => $school
        ]);
    }
    public function taoForm(){
        $school = School::all();
        return view('teachers.add',[
            'school' =>$school
        ]);
    }
    public function luuTao(){
        Teacher::create($_POST);
        header('location:'.BASE_URL.'teachers');
    }
    public function xoa($id){
        Teacher::destroy($id);
        header('location:'.BASE_URL.'teachers');
    }
    public function suaForm($id){
        $school = School::all();
        $teacher = Teacher::find($id);
        return view('teachers.edit',[
            'school' => $school,
            'teacher' => $teacher
        ]);
    }
    public function luuSua($id){
        $model = Teacher::find($id);
        $model->fill($_POST);
        $model->save();
        header('location:'.BASE_URL.'teachers');
    }
}

?>