<html>
<head>
    <title>Memories | SIGNUP</title>
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
</head>
<body>
<div class="nav_bar">
    <h1 class="logo">MEMORIES</h1>
    <h1><a href="index.html" class="home_nav">HOME</a></h1>
    <h1><a href="{{url('/list/')}}" class="about_nav">EXPLORE</a></h1>
    <h1><a href="{{url('/login/')}}" class="login_nav">LOGIN</a></h1>
    <h1><a href="{{url('/signup/')}}" class="signup_nav">SIGN UP</a></h1>
</div>


<form method="post" action="{{action([\App\Http\Controllers\PagesController::class,'store'])}}" enctype="multipart/form-data" class="login_form">
    @csrf
    <h1 class="login_topic">SIGNUP</h1>
    <div class="username-control">
        <input type="text" name="username" required="">
        <label>
            <span style="transition-delay:0ms">U</span><span style="transition-delay:50ms">s</span><span style="transition-delay:100ms">e</span><span style="transition-delay:150ms">r</span><span style="transition-delay:200ms">n</span><span style="transition-delay:250ms">a</span><span style="transition-delay:300ms">m</span><span style="transition-delay:350ms">e</span>
        </label>
    </div>
    <div class="password-control">
        <input type="password"  name="password" required="">
        <label>
            <span style="transition-delay:0ms">P</span><span style="transition-delay:50ms">a</span><span style="transition-delay:100ms">s</span><span style="transition-delay:150ms">s</span><span style="transition-delay:200ms">w</span><span style="transition-delay:250ms">o</span><span style="transition-delay:300ms">r</span><span style="transition-delay:350ms">d</span>
        </label>
    </div>
    <button class="login_button" type="submit"> SIGN UP
    </button>
</form>
  <div class="line"></div>
  <div class="image"></div>
</div>
</body>
</html>
