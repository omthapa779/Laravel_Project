<html>
    <head>
        <title>Memories | Main</title>
        <link href="{{asset('css/explore.css')}}" rel="stylesheet">
        <link href="{{asset('css/welcome.css')}}" rel="stylesheet">
</head>
<body><br>
<h1 class="title">PixelLake</h1>
     <h2 class="navbar_1"><a href="{{url('/')}}" style="text-decoration: none; color: #fafafa;">HOME</a></h1>
     <h2 class="navbar_2"><a href="{{url('/about/')}}" style="text-decoration: none; color: #fafafa;">ABOUT</a></h1>
     <h2 class="navbar_3"><a href="{{url('/login/')}}" style="text-decoration: none; color: #fafafa;">LOGIN</a></h1>

     <button class="register_button"><a href="{{url('/create/')}}" style="text-decoration: none; color: #fafafa;"> CREATE </a></button>


@foreach ($photos as $photo)
    <div class="photo">
        <img id="{{ $photo->id }}" src="{{ asset('storage/all/' . $photo->image) }}" alt="Photo" onclick="openModal({{$photo->id }})">
        <div class="caption">
            <h2>
            {{ $photo->caption }}
           </h2>
           <h2>
           {{ $photo->username }}
           </h2>
        </div>
    </div>
@endforeach
<div id="modal" style="display: none">
    <div id="modal-content">
        <img id="modal-image" src="" alt="Photo">
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js">
  function openModal(photoId) {
    // Make an AJAX request to retrieve the full-size image
    $.ajax({
        url: '{{ asset('storage/all/' . $photo->image) }}' + photoId,
        type: 'GET',
        success: function(data) {
            // Display the full-size image in a modal window
            $('#modal-image').attr('src', data.url);
            $('#modal').show();
        }
    });
}
</script>
</html>