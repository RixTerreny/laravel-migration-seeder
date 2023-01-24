<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body>
    <div class="container text-center mt-4">
        <h1>Treni</h1>
        <ul>
            @foreach ( $treni as $treno )
                <li>{{$treno->azienda}}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
