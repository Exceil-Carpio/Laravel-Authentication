<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <form action="{{route('user.update', $user)}}" method="post" class='login-form'>
        @csrf
        @method('PUT')
        <label for="name">Name : </label>
        <input type="text" name="name" value={{$user->name}} class="input-field"/><br>
        <div class="error">
            @error('name')
                {{$message}}
            @enderror
       </div>


        <label for="email">Email : </label>
        <input type="email" name="email" value={{$user->email}} class="input-field"/><br>
        <div class="error">
            @error('email')
                {{$message}}
            @enderror
       </div>


        <div class="con">
            <div>
                <input type="submit" value="Update" name="mode" class="btn"/>
            </div>
            <div>
                <button class="btn">
                    <a href="{{route('user.logout')}}">Logout</a>
                </button>
            </div>
        </div>


        <p>Created at : {{$user->created_at}}</p>
        <p>Updated at : {{$user->updated_at}}</p>

        {{-- Not working --}}
        <div class="con" style="margin-bottom: 0; margin-top: 10px;">
            <button class="btn-delete btn">
                <a href="{{route('user.delete', $user)}}">Delete</a>
            </button>
        </div>
    </form>

</body>
</html>
