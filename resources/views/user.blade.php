<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-41</title>
</head>
<body>
<h2>{{$user ? "Список мероприяций пользователя ".$user->name : "Неверный id пользователя"}}</h2>
@if($user)
    <table border="1">
        <thead>
        <td>id</td>
        <td>Название</td>
        <td>Категория</td>
        <td>Локация</td>
        <td>Описание</td>
        <td>Оценка</td>
        <td>Текст отзыва</td>
        </thead>
        @foreach($user->events as $event)
            <tr>
                <td>{{$event->id}}</td>
                <td>{{$event->name}}</td>
                <td>{{$event->category->name}}</td>
                <td>{{$event->location->name}}</td>
                <td>{{$event->description}}</td>
                <td>{{$event->pivot->rate}}</td>
                <td>{{$event->pivot->review_text}}</td>
            </tr>
        @endforeach
    </table>
    <h2>{{"Средняя оценка пользователя - ".$average->average}}</h2>
@endif
</body>
</html>
