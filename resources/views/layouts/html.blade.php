<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdn.tailwindcss.com"></script>

    <title>Car Wash</title>

</head>
<body>

    <header>

        @include('includes.mainHeader')

    </header>

    <main>

        @yield('content')

    </main>
    
    <footer>

        @include('includes.mainFooter')

    </footer>

</body>
</html>