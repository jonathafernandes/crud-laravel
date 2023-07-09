<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        body {
            background-color: #f1f1f1;
            font-family: 'Roboto Mono', monospace;

        }

        .btn {
            font-family: 'Roboto Mono', monospace;
        }

        .btn-2 {
            border: none;
            cursor: pointer;
            transition: 100ms;
        }

        .btn-2:hover {
            color: red;
        }

    </style>
    <title>@yield('title') | Crud App</title>
</head>
<body>
    @yield('content')
</body>
</html>