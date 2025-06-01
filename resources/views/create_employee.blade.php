<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Employee</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="text-center">

  <form class="form-signin" method="post" action="/create/emp">
    @csrf
    <h1 class="h3 mb-3 font-weight-normal">Введіть ПІБ посадовця, а також посаду</h1>
    <label for="emp" class="sr-only">Ім'я та прізвище</label>
    <input type="text" name="emp" id="emp" class="form-control" placeholder="ПІБ посадовця" required="" autofocus="">
    <label for="job" class="sr-only">Посада</label>
    <select id="job" name="job" class="form-control" required>
      <option value="">-- Виберіть --</option>
      @foreach($job_titles as $job_title)
      <option value="{{$job_title->id}}">{{$job_title->job_title}}</option>
      @endforeach
    </select>
    <label for="region" class="sr-only">Область</label>
    <select id="region" name="region" class="form-control" required>
      <option value="">-- Виберіть --</option>
      @foreach($regions as $region)
      <option value="{{$region->id}}">{{$region->region_name}}</option>
      @endforeach
    </select>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Додати посадовця</button><br>
    @if (session('employee_created'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('employee_created') }}
    </div>
    @endif
    <p class="mt-5 mb-3 text-muted"><a href="/home">Назад</a></p>
  </form>
</body>

</html>