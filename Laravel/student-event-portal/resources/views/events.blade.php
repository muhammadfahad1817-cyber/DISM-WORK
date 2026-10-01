<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
</head>
<body>
    <h1>Student Events</h1>

    @foreach($events as $event)
        <x-event :event="$event" />
    @endforeach

    <a href="/">Back to Home</a>
</body>
</html>
