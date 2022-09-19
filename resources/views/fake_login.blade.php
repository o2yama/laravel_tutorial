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
        h4 {
            color: gray;
        }
        p {
            color: gray;
        }
    </style>
</head>
<body>
    <h4>以下の情報で仮ログイン</h4>
    <p>{{ $email }}</p>
    <p>{{ $pwd }}</p>
</body>
</html>
