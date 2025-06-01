<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="body-doc text-center">

    <form class="form-signin" method="post" action="/create/doc">

        @csrf
        <h1 class="h3 mb-3 font-weight-normal">Заповніть всі поля</h1>

        
        <select hidden id="region_doc" name="region_doc" class="form-control" required>
            <option value="{{$region_name}}">{{$region_name}}</option>
        </select>

        <label for="job_doc" class="sr-only">Посада відповідальної особи</label>
        <select id="job_doc" name="job_doc" class="form-control" required>
            <option value="">-- Виберіть --</option>
            @foreach($job_spec as $job)
            <option value="{{$job->job_title}}">{{$job->job_title}}</option>
            @endforeach
        </select>

        <label for="master_doc" class="sr-only">ПІБ відповідальної особи</label>
        <select id="master_doc" name="master_doc" class="form-control" required>
            <option value="">-- Виберіть --</option>
            @foreach($employees as $employee)
            <option value="{{$employee->name}}">{{$employee->name}}</option>
            @endforeach
        </select>

        <label for="job_ins_doc" class="sr-only">Посада інспектора</label>
        <select id="job_ins_doc" name="job_ins_doc" class="form-control" required>
            <option value="">-- Виберіть --</option>
            @foreach($job_inspec as $job)
            <option value="{{$job->job_title}}">{{$job->job_title}}</option>
            @endforeach
        </select>

        <label for="inspector_doc" class="sr-only">ПІБ інспектора</label>
        <select id="inspector_doc" name="inspector_doc" class="form-control" required>
            <option value="">-- Виберіть --</option>
            @foreach($employees as $employee)
            <option value="{{$employee->name}}">{{$employee->name}}</option>
            @endforeach
        </select>

        <label for="material_doc" class="sr-only">Виберіть пристрій</label>
        <select id="material_doc" name="material_doc" class="form-control" required>
            <option value="">-- Виберіть --</option>
            @foreach($materials as $material)
            <option value="{{$material}}">{{$material->category_material}} {{$material->name_material}}</option>
            @endforeach
        </select>
        <select id="material_doc2" name="material_doc2" class="form-control" required>
            <option value="">-- Виберіть --</option>
            @foreach($materials as $material)
            <option value="{{$material}}">{{$material->category_material}} {{$material->name_material}}</option>
            @endforeach
        </select>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Отримати Акт</button><br>
        <p class="mt-5 mb-3 text-muted"><a href="/home">Назад</a></p>
    </form>
</body>

</html>