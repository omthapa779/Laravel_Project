<!doctype html>
<html lang="en">
<head>
    <title>Create</title>
</head>
<body>
<form method="post" action="{{action([\App\Http\Controllers\photouploader::class,'store1'])}}" enctype="multipart/form-data">
    @csrf
    <label for="">Username: </label>
    <input type="text" name="username" required>
    <label for="">Caption:</label>
    <input type="text" name="caption" required>
    <label for="">Image:</label>
    <input type="file" name="image" required>
    <input type="submit">
</form>
</body>
</html>