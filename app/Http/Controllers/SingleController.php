<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function __invoke()
    {
        return <<<EOF
        <html>
        <head>
        <title>シングルアクションコントローラー</title>
        </head>
        <body>
        <h3>コントローラーに1つだけしかアクション(メソッド)を持たせない方法だよ</h3>
        </body>
        </html>
        EOF;
    }
}
