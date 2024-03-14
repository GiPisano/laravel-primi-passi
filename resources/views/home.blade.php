<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <ul>
        
        @foreach($header_links as $header_link)
        <li>{{ $header_link }}</li>
        @endforeach
    </ul>
</body>
</html>