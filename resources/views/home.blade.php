<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="text-center">
  <form class="form-signin" method="POST" action="{{ route('logout') }}">
@csrf
    <h1 class="h3 mb-3 font-weight-normal">Що хочете зробити?</h1>

    <button type="button" class="btn btn-lg btn-primary btn-block" onclick="window.location.href='/emp'">
      Додати посадовця
    </button>
    <button type="button" class="btn btn-lg btn-primary btn-block" onclick="window.location.href='/material'">
      Додати матеріальні цінності
    </button>
    <button type="button" class="btn btn-lg btn-primary btn-block" onclick="window.location.href='/region'">
      Сформувати Акт
    </button>
        <button type="button" class="btn btn-lg btn-primary btn-block" onclick="window.location.href='/registry'">
      Реєстр видачі
    </button><br>
    <p></p><br>
    <button class="btn btn-lg" type="submit">Вийти з акаунту</button>
</form>

  </form>


</body>

</html>