<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório de Perfis</title>
</head>
<body>
    <h1>Relatório de Perfis</h1>
    <hr>
    <table border="1" cellpadding="0" cellspacing="0" style="width:100%">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
        </tr>
        @forelse ($nossosperfis as $nossosperfil)
            <tr>
                <td>{{ $nossosperfil->id }}</td>
                <td>{{ $nossosperfil->nome }}</td>
                <td>{{ $nossosperfil->descricao }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Nenhum perfil cadastrada</td>
            </tr>
        @endforelse
    </table>
</body>
</html>
