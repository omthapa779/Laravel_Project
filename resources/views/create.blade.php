<!doctype html>
<html lang="en">
<head>
    <title>Create</title>
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
</head>
<body><br>
<h1 class="title">PixelLake</h1>
     <h2 class="navbar_1"><a href="{{url('/')}}" style="text-decoration: none; color: #fafafa;">HOME</a></h1>
     <h2 class="navbar_2"><a href="{{url('/about/')}}" style="text-decoration: none; color: #fafafa;">ABOUT</a></h1>
     <h2 class="navbar_3"><a href="{{url('/login/')}}" style="text-decoration: none; color: #fafafa;">LOGIN</a></h1>

     <button class="register_button"><a href="{{url('/create/')}}" style="text-decoration: none; color: #fafafa;"> CREATE </a></button>

<div class="form_left">
         <div class="overlay1"></div>
        <h1 class="subtitle">WHERE MEMORIES COME</h1>
        <h1 class="signup_title_left">ALIVE</h1>

        <h1 class="subtitle2">LIVE IT AGAIN!</h1>
        
    </div>
     <div class="form_right">
        <h1 class="signup_title_right">Create Memories</h1>
        <h1 class="subtitle2_right">Right Now</h1>
        <br><br>
<form method="post" action="{{action([\App\Http\Controllers\photouploader::class,'store1'])}}" enctype="multipart/form-data">
    @csrf
    <br>
    <label for="sername"  class="username_signup">Username: </label>
    <input type="text" name="username" class="username_signup_form"  pattern="[a-zA-Z0-9]+" name="username" placeholder="Enter your username" required><br><br>
    <label for="" class="password_signup">Caption:</label>
    <input type="text"  class="password_signup_form " name="caption" placeholder="Enter Caption" required><br><br>
    <label for="">Image:</label>
    <input type="file" name="image" required>
    <br><br><br><br>
    <button class="cancel_signup"><span class="text">Cancel</span><span>Really?</span></button>
        <button class="submit_signup"><span class="text">Upload</span><span>DO IT!</span></button>
</form>

</body>
</html>