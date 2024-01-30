<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treni in Partenza da Boolean presso la stazione 110!</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container py-5">
        <header>
            <div class="d-flex justify-content-center">
                <h1>Treni in partenza</h1>
            </div>
        </header>
<ul>
    @foreach ($trains as $train)
           <li>
            <h2>{{$train['azienda']}}</h2>
            <p>Partenza: {{$train['stazione_di_partenza']}}</p>
            <p>Arrivo: {{$train['stazione_di_arrivo']}}</p>
            <p>Orario di partenza: {{$train['orario_di_partenza']}}</p>
            <p>Orario di arrivo: {{$train['orario_di_arrivo']}}</p>
            <p>Codice Treno: {{$train['codice_treno']}}</p>
            <p>Numero Carrozze: {{$train['numero_carrozze']}}</p>
            <p>Il treno è in orario?: {{$train['in_orario']}}</p>
            <p>Il treno è stato cancellato?: {{$train['cancellato']}}</p>
           
           </li>
       @endforeach
</ul>
       
    </div>

</body>

</html>
