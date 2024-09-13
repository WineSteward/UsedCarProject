<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <title>Usados&Roubados</title>
</head>
<body>
    <div>
        <nav>
            <div>
                <a href="">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
                By <a target="_blank" href="https://icons8.com">Icons8</a>
            </div>
            <div>
                links
            </div>
            <div>
                Post a job
            </div>
        </nav>

        <main>
          {{ $slot }}  
        </main>

    </div>
</body>
</html>