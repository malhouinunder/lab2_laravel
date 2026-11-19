<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-41</title>
</head>
<body>
    <h2>Список мероприятий:</h2>
    <table border="1">
        <thead>
            <td>id</td>
            <td>Название</td>
            <td>Категория</td>
            <td>Локация</td>
            <td>Описание</td>
        </thead>
        @foreach($events as $event)
            <tr>
                <td>{{$event->id}}</td>
                <td>{{$event->name}}</td>
                <td>{{$event->category->name}}</td>
                <td>{{$event->location->name}}</td>
                <td>{{$event->description}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
