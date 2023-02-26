<html>
<head>
    <title>Memories | SIGNUP</title>
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
</head>
<body >
<div class="all_register">

  <div class="overlay"></div>
  <div class="positioned">
    <h1 class="title">Memories💖</h1>
    <h1 class="home_home"><a href="{{url('/')}}" style="text-decoration: none; color: #fafafa;">HOME</a></h1>
    <h1 class="about_home"><a href="{{url('/about/')}}" style="text-decoration: none; color: #fafafa;">ABOUT</a></h1>
    <h1 class="signup_home"><a href="{{url('/signup/')}}" style="text-decoration: none; font-weight:500; color: #fafafa;">SIGNUP</a></h1>
    <h1 class="login_home"><a href="{{url('/login/')}}" style="text-decoration: none; color: #fafafa;">LOGIN</a></h1>
    <h1 class="contact_home"><a href="{{url('/contact/')}}" style="text-decoration: none; color: #fafafa;">CONTACT</a></h1>
     
    <div class="form_left">
         <div class="overlay1"></div>
        <h1 class="subtitle">WHERE MEMORIES COME</h1>
        <h1 class="signup_title_left">ALIVE</h1>

        <h1 class="subtitle2">LIVE IT AGAIN!</h1>
        
    </div>
     <div class="form_right">
        <h1 class="signup_title_right">REGISTRATION</h1>
        <h1 class="subtitle2_right">LIVE IT AGAIN!</h1>
        <br><br>
         <form method="post" action="{{action([\App\Http\Controllers\PagesController::class,'store'])}}" enctype="multipart/form-data">
    @csrf
        <label for="username" class="username_signup">Username:</label>
        <input type="text" id="username" class="username_signup_form"  pattern="[a-zA-Z0-9]+" name="username" placeholder="Enter your username">
<br><br>
        <label for="password" class="password_signup">Password:</label>
        <input type="password" id="password" class="password_signup_form " name="password" placeholder="Enter your password">
        <br><br>
        <label for="email" class="email_signup">Email:</label>
        <input type="email" id="email" name="email" class="email_signup_form" pattern="\w+@[a-z]+\.[a-z]+" placeholder="Enter your email">
        <br><br>
         <label for="image" class="profile_signup">Profile Picture:</label>
        <input type="file" id="image" name="image" class="profile_signup_form">
        <br><br>
        
        <button class="cancel_signup"><span class="text">Cancel</span><span>Really?</span></button>
        <button class="submit_signup"><span class="text">Register</span><span>DO IT!</span></button>
    </form>
    </div>

  </div>
  </div>
</body>
<script src="{{asset('js.js')}}"></script>
</html>
