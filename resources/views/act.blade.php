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
            <span><strong>{{$region_name}}</strong></span><br><br>

            <p>Акт прийому-передачі матеріальних цінностей працівникові<br>
            
                № <span><strong>{{$getIdAct}}</strong></span> від <span><strong>{{\Carbon\Carbon::parse($getDate)->translatedFormat('d F Y') }}</strong>
</span> року</p>
                
            <div class="left">
                <p>
                    <span><strong>{{$job_doc}} {{$master_doc}}</strong></span> передав, а
                    <span><strong>{{$job_ins_doc}} {{$inspector_doc}}</strong></span>
                    прийняв такі матеріальні цінності:
                </p>
                <ul class="ul">
                    <li><strong>{{$materials->category_material}} {{$materials->name_material}}</strong> серійний номер № <span><strong>{{$materials->serial_number}}</strong></span>, інвентарний номер № <span><strong>{{$materials->inventory_number}}</strong></span></li>
                    <li><strong>{{$materials2->category_material}} {{$materials2->name_material}}</strong> серійний номер № <span><strong>{{$materials2->serial_number}}</strong></span>, інвентарний номер № <span><strong>{{$materials2->inventory_number}}</strong></span></li>
                </ul>
                <p>для виконання своїх посадових обов'язків.</p>
            </div>
            <div class="signature">
                <div>
                    <p>
                        <span><strong>{{$master_doc}}</strong></span><br>
                    </p>
                    <p>
                        <span><strong>{{$inspector_doc}}</strong></span><br>
                    </p>
                </div>
                <div class="right">
                    <p>____________________________
                    </p>
                    <p>____________________________
                    </p>
                </div>
            </div>
        </div>
        <div class="no-print center" style="margin-top: 50px;">
            <button onclick="window.print()">Друкувати</button>
        </div>
</body>

</html>