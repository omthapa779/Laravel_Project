<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class PagesController extends Controller
{
    public function home() {
        $data = [
            'name'=>'dd',
            'age'=>18
        ];
        return view('welcome')->with($data);
    }

    public function profile(){
        $data1=[
            'username'=>'Ashraya'
        ];
        return view('profile')->with($data1);
    }

    public function create(){
        return view('create');
    }

    /*public function store(Request $request){
        $student = new Student();
        $student->username = $request->username;
        $student->password = $request->password;
        /*$student->age = $request->age;
        $img = Image::make($request->file('image'));
        $filename = $request->file('image')->getClientOriginalName();
        $img->save('storage/image/'.$filename);
        $student->image = $filename;*/
        /*$student->save();
        return redirect('/list');*/

    public function list(){
        $user = Student::get();
        return view('List')->with('student',$user);
    }
    public function store(Request $request){
    $user = new student();
    $user->username = $request->username;
        $user->password =Hash::make($request->password);
        $user->save();

}

    public function login(){
        $student = Student::get();
        return view('login');
    }
    public function signup(){
        $student = Student::get();
        return view('register');
    }
    public function edit($id){
        $student = student::where('id',$id)->first();
        return view('update')->with('student',$student);
    }
    public function update(Request $request){
        $student = Student::where('id',$request->id)->first();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->age = $request->age;
        $student->save();
        return redirect('/list');
    }
    public function delete($id){
        Student::where('id',$id)->delete();
        return redirect('/list');
    }
}
