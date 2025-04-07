<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--enlaces a los archivos css de tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap"
     rel="stylesheet"/>
</head>
<body>
    <h1>hola desde el body del lienzo app</h1>
<!--navbar -->
    @include ('includes.navbar')

    <div class="container mt-4">
    @yield('content')
    </div>
    @include('includes.footer')
</body>
</html>