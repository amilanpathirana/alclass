<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>student</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('student.create')}}">Create a student</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Qty2</th>
                <th>Price2</th>
                <th>Description2</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($student as $student )
                <tr>
                    <td>{{$student->qrcode}}</td>
                    <td>{{$student->subject}}</td>
                    <td>{{$student->teacher}}</td>
                    <td>{{$student->month}}</td>
                    <td>{{$student->year}}</td>
                    <td>{{$student->uses}}</td>
                    <td>{{$student->usestoday}}</td>
                    <td>
                        <a href="{{route('student.edit', ['student' => $student])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('student.destroy', ['student' => $student])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>