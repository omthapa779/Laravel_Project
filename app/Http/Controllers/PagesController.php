<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
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

    public function store(Request $request){
    
        $image = Image::make($request->file('image'));
        $new_name = $request->file('image')->getClientOriginalName();
        $image-> save('storage/image/'.$new_name);

        $student = new Student;
        $student->username = $request->username;
        $student->email = $request->email;
        $student->password = Hash::make($request->password);
        $student->image = $new_name;
        $student->save();

        return redirect('/login');
    }
    
    public function list(){
        $students = Auth::students();
        $loggedInUser = DB::table('students')->where('id', auth()->students()->id)->first();
        return view('profile', ['students' => $loggedInUser]);
    }

    public function login(){
        $student = Student::get();
        return view('login');
    }
    public function signup(){
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

    public function login1(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        
        $student = Student::where('email', $email)->first();

        if ($student && $student->password === $password) {
            // login successful
            return redirect('/list');
        }

        // login failed
        return redirect()->back()->withErrors(['Invalid email or password']);
    }
}