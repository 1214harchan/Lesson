<html>
<head>
<title>無料体験予約</title>
</head>
<body>
<p>無料体験申込フォーム</p>
<ol>
    @php
    $counter = 0;
    @endphp
    @while ($counter < count($num))
    <li>{{$num[$counter]}}</li>
    @php
    $counter++;
    @endphp
    @endwhile
</ol>

