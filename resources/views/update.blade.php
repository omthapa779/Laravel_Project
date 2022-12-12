<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
<form method="post" action="{{action([\App\Http\Controllers\PagesController::class,'update'])}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$student->id}}">
    <label for="">Name:</label>
    <input type="text" name="name" value="{{$student->name}}" required>
    <label for="">Address</label>
    <input type="text" name="address" value="{{$student->address}}" required>
    <label for="">Age:</label>
    <input type="number" name="age" value="{{$student->age}}" required>
    <input type="submit">
</form>
</body>
</html>