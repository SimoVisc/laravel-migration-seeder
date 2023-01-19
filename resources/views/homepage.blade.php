<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trains</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <h1>Trains</h1>
            <ul>
                @foreach ($trains as $train)
                    <li>
                        <h4>{{ $train->Departure_station }} - {{ $train->Arrival_station }} </h4>
                        <p>{{ $train->Departure_time }} - {{ $train->Time_of_arrival }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>

</body>

</html>
