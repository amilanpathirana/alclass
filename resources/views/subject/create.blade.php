<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a Subject</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ( $errors->all() as $error)
                <li> {{$error}}</li>
            @endforeach


        </ul>
        @endif
    </div>
    <form method="post" action="{{route('subject.store')}}">
        @csrf
        @method('post')
<div>
    <label>Teachers Name</label>
    <input type="text" name="teachersname" placeholder="teachers name">
</div>
<div>
    <label>Subject</label>
    <input type="text" name="subject" placeholder="subject">
</div>
<div>

    <input type="submit" value="save new subject" >
</div>
    </form>
</body>
</html>