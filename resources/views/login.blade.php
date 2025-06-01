<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="text-center">

  <form class="form-signin" method="post" action="/login">

    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>
          {{$error}}
        </li>
        @endforeach
      </ul>
    </div>

    @endif
    @csrf

    <h1 class="h3 mb-3 font-weight-normal">Будь ласка увійдіть</h1>
    <label for="email" class="sr-only">Введіть Email</label>
    <input type="email" name="email" id="password" class="form-control" placeholder="Email address" required="" autofocus="">
    <label for="password" class="sr-only">Введіть пароль</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Увійти</button><br>
    <p class="mt-5 mb-3 text-muted"><a href="/registration">Зареєструватися</a></p>
  </form>


</body>


</body>

</html>