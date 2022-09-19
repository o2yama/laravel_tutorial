<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        return view('hello.index');
    }

    public function post(Request $req)
    {
        // 渡すパラメータ
        $msg = '';
        $birthday_msg = '';

        $name = $req->name;
        if (isset($name)) {
            $msg = 'こんにちは、' . $name . 'さん';
        } else {
            $msg = '名前入れてよー';
        }

        $birthday = $req->birthday;
        if (!preg_match('/[0-9]{8}/', $birthday)) {
            $birthday_msg = '誕生日ちゃんと入れてよ!';
        } else if (isset($birthday)) {
            $year = substr($birthday, 0, 4);
            $month = substr($birthday, 4, 2);
            $day = substr($birthday, -2);

            $birthday_msg = $year . '年' . $month . '月' . $day . '日生まれなんですね！';
        } else {
            $birthday_msg = '誕生日も入力してよ、、😢';
        }

        $data = [
            'msg' => $msg,
            'birthday_msg' => $birthday_msg,
        ];

        return view('hello.index', $data);
    }

    public function with_args($msg)
    {
        return view('with_args', ['msg' => $msg]);
    }

    public function req(Request $req, Response $res)
    {
        $html = <<<EOF
        <html>
        <head>
        <title>Hello-Index</title>
        <style>
        * {margin: 0;}
        body {font-size:16px; color:#999; padding: 0px 20px;}
        h3 {font-size: 40px; text-align: left; color: #eee; padding: 5px 0px;}
        </style>
        <body>
            <h3>URL</h3>
            <pre>{$req->url()}</pre>
            <h3>Request</h3>
            <pre>{$req}</pre>
            <h3>Response</h3>
            <pre>{$res}</pre>
            <h3>Header</h3>
            <pre>{$res->headers}</pre>
            <h3>Status</h3>
            <pre>{$res->status()}</pre>
        </body>
        </html>
        EOF;

        $res->setContent($html);
        return $res;
    }
}
