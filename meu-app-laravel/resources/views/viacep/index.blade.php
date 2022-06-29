<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Via CEP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <div>
        <form action="{{ route('viacep.index.post') }}" method="post">
            @csrf
            <input type="text" name="cep">
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>