<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Photo;
use Illuminate\Support\Facades\DB;


class photouploader extends Controller
{
    
    public function create(){
        return view('create');
    }
    public function store1(Request $request){
    
        $image = Image::make($request->file('image'));
        $new_name = $request->file('image')->getClientOriginalName();
        $image-> save('storage/all/'.$new_name);

        $photo = new Photo;
        $photo->username = $request->username;
        $photo->caption = $request->caption;
        $photo->image = $new_name;
        $photo->save();

        return redirect('/index');
    }
    public function index() {
        $photos = Photo::all();
        $photos = DB::table('photos')->inRandomOrder()->get();
    return view('index', ['photos' => $photos]);
    }
}
