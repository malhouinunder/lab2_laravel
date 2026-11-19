<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-41</title>
</head>
<body>
<h2>{{$event ? "Список типов билета у мероприятия ".$event->name : "Неверный id мероприятия"}}</h2>
@if($event)
    <table border="1">
        <thead>
        <td>id</td>
        <td>Название</td>
        <td>Цена</td>
        </thead>
        @foreach($event->ticketTypes as $ticketType)
            <tr>
                <td>{{$ticketType->id}}</td>
                <td>{{$ticketType->name}}</td>
                <td>{{$ticketType->price}}</td>
            </tr>
        @endforeach
    </table>
@endif

</body>
</html>
