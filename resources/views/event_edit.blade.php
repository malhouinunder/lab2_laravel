<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-41</title>
    <style> .is-invalid {color: red;} </style>
</head>
<body>
<h2>Редактирование мероприятия:</h2>
<form method="post" action="{{ url('event/update/'.$event->id) }}">
    @csrf
    <label>Название:</label>
    <input type="text" name="name" value="@if(old('name')){{old('name')}}@else{{$event->name}}@endif"/>
    @error('name')
        <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Категория:</label>
    <select name="category_id">
        <option value="">Выберите категорию</option>
        @foreach($categories as $category)
            <option value="{{$category->id}}"
                    @if(old('category_id'))
                        @if(old('category_id') == $category->id) selected @endif
                    @else
                        @if($event->category_id == $category->id) selected @endif
                   @endif>
                {{$category->name}}
            </option>
        @endforeach
    </select>
    @error('category_id')
        <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Локация:</label>
    <select name="location_id">
        <option value="">Выберите локацию</option>
        @foreach($locations as $location)
            <option value="{{$location->id}}"
                    @if(old('location_id'))
                        @if(old('location_id') == $location->id) selected @endif
                    @else
                        @if($event->location_id == $location->id) selected @endif
                @endif>
                {{$location->name}}
            </option>
        @endforeach
    </select>
    @error('location_id')
        <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
        <label>Описание:</label>
        <input type="text" name="description" value="@if(old('description')) {{old('description')}} @else {{$event->description}} @endif"/>
        @error('description')
        <div class="is-invalid">{{ $message }}</div>
        @enderror
    <br>
    <input type="submit">
</form>
</body>
</html>
