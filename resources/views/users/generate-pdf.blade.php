<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBord</title>
</head>
<body>
    <h2>Usuário</h2>
    ID: {{ $user->id }}<br>
    NOME: {{ $user->name }}<br>
    E-MAIL: {{ $user->email }}<br>
    DATA DE CADASTRO: {{ $user->created_at->format('d/m/Y H:i') }}<br>
</body>
</html>