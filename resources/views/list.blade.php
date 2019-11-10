<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Activist</title>
</head>
<body>
    @foreach($activists as $activist)
        <form action="{{url('delete')}}" method="POST">
            @csrf
            Aktivis ke {{$activist->id}} : {{$activist->activist_name}} 
            <button type="submit" value="{{$activist->id}}" name="id">Delete</button><br>
        </form>
    @endforeach
</body>
</html>
