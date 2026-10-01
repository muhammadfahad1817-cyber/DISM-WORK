<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User id is {{$id}}</h1>
    <p>Name: {{ $name }}</p>
    <p>Hobbies Count: {{count($hobbies)}}</p>

    @for($i=0; $i < count($hobbies); $i++)
    <p>The hobby is {{$hobbies[$i]}} .</p>
    @endfor

    @foreach($hobbies as $hobby)
    <p>{{ $hobby }}</p>
    @endforeach

    @if ($age > 18)
    <p>Vote de jakar ghar mein kiya kar raha hai modiji ko vote do </p>
    @elseif ($age < 18)
    <p>Pehli fursat mein nikal tum vote nahi desakte</p>
    @else
    <p>Tum abhi 18 ke hoe ho adhar card banwao jakar</p>
    @endif
</body>
</html>