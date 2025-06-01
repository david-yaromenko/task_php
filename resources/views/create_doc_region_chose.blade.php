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

    <form class="form-signin" method="post" action="/region/id">

        @csrf
        <h1 class="h3 mb-3 font-weight-normal">Оберіть область</h1>

        <label for="region_id" class="sr-only">Область</label>
        <select id="region_id" name="region_id" class="form-control" required>
            <option value="">-- Виберіть --</option>
            @foreach($regions as $region)
            <option value="{{$region->id}}">{{$region->region_name}}</option>
            @endforeach
        </select>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Обрати</button><br>
        <p class="mt-5 mb-3 text-muted"><a href="/home">Назад</a></p>
</body>

</html>