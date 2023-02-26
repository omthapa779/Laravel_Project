<html>
    <head>
        <title>Memories | Main</title>
        <link href="{{asset('css/explore.css')}}" rel="stylesheet">
</head>
<body>
@foreach ($photos as $photo)
    <div class="photo">
        <img id="{{ $photo->id }}" src="{{ asset('storage/all/' . $photo->image) }}" alt="Photo" onclick="openModal({{$photo->id }})">
        <div class="caption">{{ $photo->caption }}</div>
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