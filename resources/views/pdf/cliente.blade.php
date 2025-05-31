<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exportar PDF</title>
    </head>
    <body>
        <pre>
            <table border="1">
                <thead>
                    <tr>
                        <th>nombres</th>
                        <th>apellido paterno</th>
                        <th>apellido materno</th>
                        <th>dni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->nombres }}</td>
                        <td>{{ $cliente->pri_ape }}</td>
                        <td>{{ $cliente->seg_ape }}</td>
                        <td>{{ $cliente->docu_num }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </pre>
    </body>
</html>