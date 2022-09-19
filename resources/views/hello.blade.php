<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Greeding of the world</title>
    <style>
        body {
            background-color: transparent;
        }
        h1 {
            text-align: right; font-size: 100px; font-weight: bold; color: #88f;
        }
        h4 {
            color: lightgray;
        }
        p {
            color: lightgray;
        }
    </style>
</head>
<body>
    <h1>{{ __('hello_world') }}</h1>
    <h4>{{ __('desc') }}</h4>
    <p>こんちくは</p>
</body>
</html>
