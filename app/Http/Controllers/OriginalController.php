<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OriginalController extends Controller
{
    public function __invoke(){
        return <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body font-size:16pt; color:#999; }
h1{ font-size:100pt; text-align:right; color:#eee;
margin:-40px 0px -50px 0px; }
</style>
</head>
<body>
<h1>Single Aciton</h1>
<p>これは、シングルアクションコントローラーのアクションです</p>
</body>
</hmtl>
EOF;
    }
}
