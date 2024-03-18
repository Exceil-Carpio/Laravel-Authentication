<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$user->name}}</h1>
    <h2>{{$user->email}}</h2>
    <p>{{$user->created_at}}</p>
    <p>{{$user->updated_at}}</p>

    <button>
        <a href="{{route('user.logout')}}">Logout</a>
    </button>
</body>
</html>
