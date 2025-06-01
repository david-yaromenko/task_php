<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Акт прийому-передачі</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="html-act bodyt-act">

    <div class="document">
        <div class="center">
            <strong>СЛУЖБА УКРАЇНИ</strong><br><br>

            <p><strong>{{$region}}</strong></p>
            <p>Реєстр прийому-передачі матеріальних цінностей<br>
            <div class="left">
                <ul class="ul">
                    @foreach($materials as $material)
                    <li>
                        <p>
                            <strong>{{$material->category_material}} {{$material->name_material}}</strong><br>
                            <span><strong>Серійний номер:</strong> {{$material->serial_number}}</span><br>
                            <span><strong>Інвентарний номер:</strong> {{$material->inventory_number}}</span><br>
                            <span><strong>Передав: </strong>{{$material->emp_first}}</span><br>
                            <span><strong>Прийняв:</strong> {{$material->emp_second}}</span><br>
                            <span><strong>Видано:</strong> {{\Carbon\Carbon::parse($material->created_at)->translatedFormat('d F Y') }} року</span>

                        </p>

                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="no-print center" style="margin-top: 50px;">
            <button onclick="window.print()">Друкувати</button>
        </div>
</body>

</html>