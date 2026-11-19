<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-41</title>
</head>
<body>
<h2>{{$location ? "Список мероприяций на локации ".$location->name : "Неверный id локации"}}</h2>
@if($location)
    <table border="1">
        <thead>
        <td>id</td>
        <td>Название</td>
        <td>Категория</td>
        <td>Локация</td>
        <td>Описание</td>
        </thead>
        @foreach($location->events as $event)
            <tr>
                <td>{{$event->id}}</td>
                <td>{{$event->name}}</td>
                <td>{{$event->category->name}}</td>
                <td>{{$event->location->name}}</td>
                <td>{{$event->description}}</td>
            </tr>
        @endforeach
    </table>
@endif

</body>
</html>
