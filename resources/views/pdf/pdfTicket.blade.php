<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        text-align: center;
        margin-top: 40px;
    }

    h2{
        position: absolute;
        top: -30px;
        right: 0;
        
    }

</style>
<body>

<h1>Ticket Alo Caribe</h1>
@foreach ($tickets as $ticket => $valore)

<h2>
{{ $valore->ticket }}
</h2>

<div>
    <div class="superior_izquierda">
        <div class="nombreAcademia">{{ $valore->name_academy }}</div>
    </div>
</div>

@endforeach
</body>
</html>