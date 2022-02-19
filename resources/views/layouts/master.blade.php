<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://company-rafa.herokuapp.com/css/style.css">

    <title>Company Profile</title>
</head>

<body>
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')

    <script src="https://company-rafa.herokuapp.com/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
</body>

</html>
