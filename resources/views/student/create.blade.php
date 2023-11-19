<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a Student</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ( $errors->all() as $error)
                <li> {{$error}}</li>
            @endforeach


        </ul>
        @endif
    </div>
    <form method="post" action="{{route('student.stores')}}">
        @csrf
        @method('post')
<div>
    <label>QR Code</label>
    <input type="text" name="qrcode" placeholder="qrcodeph">
</div>
<div>
    <label>Subject</label>
    <input type="text" name="subject" placeholder="subject">
</div>

<div>
    <label>Teacher</label>
    <input type="text" name="teacher" placeholder="teacher">
</div>
<div>
    <label>Month</label>
    <input type="number" name="month" placeholder="month">
</div>
<div>
    <label>Year</label>
    <input type="number" name="year" placeholder="year">
</div>

<div>
    <label>Uses</label>
    <input type="number" name="uses" placeholder="0">
</div>

<div>
    <label>Uses Today</label>
    <input type="number" name="usestoday" placeholder="0">
</div>
<div>

    <input type="submit" value="save new student" >
</div>
    </form>
</body>
</html>