<?php
namespace App\Controllers;
use App\Models\School;
use App\Models\Teacher;
class SchoolController{
    public function index(){
        $schools = School::all();
        return view('schools.index',[
            'schools' => $schools
        ]);
    }
    public function taoForm(){
        return view('schools.add');
    }
    public function luuTao(){
        // $name = $_POST['name'];
        // $address = $_POST['address'];
        // $model = new School();
        // $data = [
        //     'name' => $name,
        //     'address' => $address
        // ];
        // $model->insert($data);
        School::create($_POST);
        header('location:' . BASE_URL .'schools');
    }
    public function xoa($id){
        School::destroy($id);
        header('location:' . BASE_URL .'schools');
    }
    public function suaForm($id){
        $model = School::find($id);
        return view('schools.update',[
            'model' => $model
        ]);
    }
    public function luuSua($id){
        $model = School::find($id);
        $model->fill($_POST);
        $model->save();
        header('location:' . BASE_URL .'schools');
    }
}

?>