<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registry</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="text-center">

    <form class="form-signin" method="post" action="/registry/materials">

        @csrf
        <h1 class="h3 mb-3 font-weight-normal">Виберіть проміжок часу за який показати видачу обладння</h1>

        <label for="before" class="sr-only">Показати з</label>
        <select id="before" name="before" class="form-control" required>
            <option value="">-- Виберіть --</option>
            <option value="{{$before}}">{{\Carbon\Carbon::parse($before)->translatedFormat('d F Y') }} року</option>
        </select>
        <label for="after" class="sr-only">Показати до</label>
        <select id="after" name="after" class="form-control" required>
            <option value="">-- Виберіть --</option>
            <option value="{{$after}}">{{\Carbon\Carbon::parse($after)->translatedFormat('d F Y') }} року</option>
        </select>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Показати</button><br>
        <p class="mt-5 mb-3 text-muted"><a href="/home">Назад</a></p>
</body>

</html>