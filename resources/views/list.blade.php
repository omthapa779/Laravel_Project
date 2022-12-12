<html>
<head></head>
<body>
<a href="{{url('/create')}}" </a><button>Create</button>
<table>
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Age</th>
        <th>Image</th>
    </tr>
    @foreach($student as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->age}}</td>
            <td><img src="{{asset('storage/image/'.$student->image)}}"></td>
            <td> <a href="{{url('/edit/'.$student->id)}}"> Edit</a></td>
            <td> <a href="{{url('/delete/'.$student->id)}}"> Delete</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>
