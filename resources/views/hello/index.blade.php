<html>

<head>
    <title>Blade/Index</title>
    <style>
        body {
            background-color: transparent;
            font-size: 16pt;
            color: #999;
        }

        h1 {
            font-size: 100pt;
            text-align: right;
            color: #f6f6f6;
            margin: -50px 0 -100px 0px;
        }
    </style>
</head>

<body>
    <h1>BladeIndex</h1>
    @if (isset($msg))
        <p>{{ $msg }}</p>
    @endif
    @empty($msg)
        <p>名前を入力してね</p>
    @endempty
    @if (isset($birthday_msg))
        <p>{{ $birthday_msg }}</p>
    @else
        <p>誕生日も入力してね</p>
    @endif

    <form method="POST" action="/hello">
        @csrf
        <input type="text" name="name" placeholder="例) 佐藤太郎">
        <input type="tel" name="birthday" placeholder="例) 19990815">
        <input type="submit">
    </form>
</body>

</html>
