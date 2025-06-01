<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="text-center">

    <form class="form-signin" method="post" action="/create/material">

        @csrf
        <h1 class="h3 mb-3 font-weight-normal">Заповніть всі поля</h1>
        <label for="name_material" class="sr-only">Назва</label>
        <input type="text" name="name_material" id="name_material" class="form-control" placeholder="Назва" required="" autofocus="">

        <label for="category_material" class="sr-only">Категорія</label>
        <select id="category_material" name="category_material" class="form-control" required>
            <option value="">-- Виберіть --</option>
            <option value="Бодікамера">Бодікамера</option>
            <option value="Планшет">Планшет</option>
            <option value="Відеореєстратор">Відеореєстратор</option>
        </select>
        <label for="region_material" class="sr-only">Область</label>
        <select id="region_material" name="region_material" class="form-control" required>
            <option value="">-- Виберіть --</option>
            @foreach($regions as $region)
            <option value="{{$region->id}}">{{$region->region_name}}</option>
            @endforeach
        </select>
        <label for="serial_number" class="sr-only">Серійний номер</label>
        <input type="text" name="serial_number" id="serial_number" class="form-control" placeholder="Серійний номер" required="" maxlength="255">
        <label for="inventory_number" class="sr-only">Інвентарний номер</label>
        <input type="number" name="inventory_number" id="inventory_number" class="form-control" placeholder="Інвентарний номер" required="" maxlength="255">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Додати</button><br>
        @if (session('material_created'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('material_created') }}
    </div>
    @endif
        <p class="mt-5 mb-3 text-muted"><a href="/home">Назад</a></p>

    </form>
</body>

</html>