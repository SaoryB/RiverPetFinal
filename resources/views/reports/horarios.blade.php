<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório de Horarios</title>
</head>
<body>
    <h1>Relatório de Horarios</h1>
    <hr>
    <table border="1" cellpadding="0" cellspacing="0" style="width:100%">
        <tr>
            <th>ID</th>
            <th>Data</th>
            <th>Horario</th>
        </tr>
        @forelse ($horarios as $horario)
            <tr>
                <td>{{ $horario->id }}</td>
                <td>{{ $horario->data }}</td>
                <td>{{ $horario->hora }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Nenhum horario cadastrada</td>
            </tr>
        @endforelse
    </table>
</body>
</html>
