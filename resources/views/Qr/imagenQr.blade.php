<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>Entrada de Evento: </h3>
    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('storage\qrcodes.png'))) }}"
        width="230" height="230"">
</body>

</html>
