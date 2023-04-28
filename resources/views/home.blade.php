<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Primi Passi</title>
</head>
<body>
    <header>
        <div>
            <h1>{{$title}}</h1>
            <h2>{{$subtitle}}</h2>
        </div>
    </header>
    <main>
        <h3>{{$name}}</h3>
        <ul>
            <li>Corsi: {{$degrees}}</li>
            <li>Dipartimenti: {{$departments}}</li>
            <li>Studenti: {{$students}}</li>
            <li>Insegnanti: {{$teachers}}</li>
        </ul>
    </main>
</body>
</html>
