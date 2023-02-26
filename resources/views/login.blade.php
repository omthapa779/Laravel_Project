<html>
<head>
    <title>Memories | LOGIN</title>
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
</head>
<body>
<div class="all_register">

<div class="overlay"></div>
<div class="positioned">
  <h1 class="title">Memories💖</h1>
  <h1 class="home_home"><a href="{{url('/')}}" style="text-decoration: none; color: #fafafa;">HOME</a></h1>
  <h1 class="about_home"><a href="{{url('/about/')}}" style="text-decoration: none; color: #fafafa;">ABOUT</a></h1>
  <h1 class="signup_home"><a href="{{url('/signup')}}" style="text-decoration: none; color: #fafafa;">SIGNUP</a></h1>
  <h1 class="login_home"><a href="{{url('/login/')}}" style="text-decoration: none; font-weight:500; color: #fafafa;">LOGIN</a></h1>
  <h1 class="contact_home"><a href="{{url('/contact/')}}" style="text-decoration: none; color: #fafafa;">CONTACT</a></h1>
  <div class="form_left_login">
         <div class="overlay1"></div>
        <h1 class="subtitle">WHERE MEMORIES COME</h1>
        <h1 class="signup_title_left">ALIVE</h1>

        <h1 class="subtitle2">LIVE IT AGAIN!</h1>
        
    </div>
     <div class="form_right">
        <br><br><br><br><br>
        <h1 class="signup_title_right">LOGIN EXPLORE SHARE</h1>
        <h1 class="subtitle2_right">LIVE IT AGAIN!</h1>
        <br><br>
        <form method="POST" action="{{ action([\App\Http\Controllers\StudentNewController::class,'login'])}}">
    @csrf
    <label for="email" class="email_signup">Email: </label>
    <input id="email" type="email" name="email" class="email_signup_form" pattern="\w+@[a-z]+\.[a-z]+" placeholder="Enter your email" required>
<br><br>
    <label for="password" class="password_signup">Password: </label>
    <input id="password" type="password" name="password"class="password_signup_form " placeholder="Enter your password" required>
<br><br>
    <button class="cancel_signup"><span class="text">Cancel</span><span>Really?</span></button>
    <button type="submit" class="submit_signup"><span class="text">LOGIN</span><span>BooM!</span></button>
</form>
</body>
</html>
