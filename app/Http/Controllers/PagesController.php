<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function home() {
        $data = [
            'name'=>'dd',
            'age'=>18
        ];
        return view('welcome')->with($data);
    }

    public function store(Request $request) {
        $request->validate([
            'username' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);
    
        $user = new User();
        $user->email = $request->email;
        $user->username = $request-> username;
        $user->password=Hash::make($request->password);
    
        $user->save();
    
        return redirect(route('login'));
    
    }
    public function login(Request $request) {
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
    
         $credentials = [
            'email'=> $request->email,
            'password'=> $request->password,
        ];
           
        if(Auth::attempt($credentials)){
            return redirect('/index');
        }
        else{
            return redirect('login');
        }
    }
    
    public function list(){
        $students = Auth::students();
        $loggedInUser = DB::table('students')->where('id', auth()->students()->id)->first();
        return view('profile', ['students' => $loggedInUser]);
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
    public function logout() {
        Auth::logout();
        return view('login');
    }
}