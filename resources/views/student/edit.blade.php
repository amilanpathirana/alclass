<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Student</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ( $errors->all() as $error)
                <li> {{$error}}</li>
            @endforeach


        </ul>
        @endif
    </div>
    <form method="post" action="{{route('student.update',['student' => $student])}}">
        @csrf
        @method('put')
<div>
    <label>QR Code</label>
    <input type="text" name="qrcode" placeholder="qrcode" value="{{$student->qrcode}}" />
</div>

<div>
    <label>Subject</label>
    <input type="text" name="subject" placeholder="subject" value="{{$student->subject}}" />
</div>

<div>
    <label>Teacher</label>
    <input type="text" name="teacher" placeholder="teacher" value="{{$student->teacher}}"/>
</div>
<div>
    <label>Month</label>
    <input type="number" name="month" placeholder="month" value="{{$student->month}}"/>
</div>
<div>
    <label>Year</label>
    <input type="number" name="year" placeholder="year" value="{{$student->year}}"/>
</div>

<div>
    <label>Uses</label>
    <input type="number" name="uses" placeholder="0" value="{{$student->uses}}"/>
</div>

<div>
    <label>Uses Today</label>
    <input type="number" name="usestoday" placeholder="0" value="{{$student->usestoday}}">
</div>
<div>

    <input type="submit" value="save new student" />
</div>
    </form>
</body>
</html>