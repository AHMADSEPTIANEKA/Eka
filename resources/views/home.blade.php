<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXS STORE-Top Up Murah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Knight Warrior', sans-serif;
        }
        h1 {
            font-weight: 700;
        }
        .header {
            background-color: #007bff; 
            color: white; 
            padding: 20px 0; 
        }
        .nav-link {
            color: white !important; 
        }
    </style>
</head>
<body>
    @include('partials.header')
    <div class="container">
        <h1>WELCOME TO MY STORE</h1>
        <p>Tempat Top Up Termurah Hanya Ada Di Sini</p>
        <a href="products" class="btn btn-light">Top Up Sekarang</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
