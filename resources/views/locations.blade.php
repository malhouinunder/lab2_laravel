<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-41</title>
</head>
<body>
<h2>Список локаций:</h2>
<table border="1">
    <thead>
    <td>id</td>
    <td>Название</td>
    <td>Адрес</td>
    <td>Город</td>
    </thead>
    @foreach($locations as $location)
        <tr>
            <td>{{$location->id}}</td>
            <td>{{$location->name}}</td>
            <td>{{$location->address}}</td>
            <td>{{$location->city->name}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>

