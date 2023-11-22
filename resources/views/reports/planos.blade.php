<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório de Planos</title>
</head>
<body>
    <h1>Relatório de Planos</h1>
    <hr>
    <table border="1" cellpadding="0" cellspacing="0" style="width:100%">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
        </tr>
        @forelse ($planos as $plano)
            <tr>
                <td>{{ $plano->id }}</td>
                <td>{{ $plano->nome }}</td>
                <td>{{ $plano->descricao }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Nenhum plano cadastrada</td>
            </tr>
        @endforelse
    </table>
</body>
</html>
