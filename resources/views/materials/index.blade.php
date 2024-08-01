<!DOCTYPE html>
<html>

<head>
    <title>Lista de Materias</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
          
        }

        .navbar,
        .btn-primary {
            background-color: #468585;
            color: #000000;
        }

        .table thead {
            background-color: #50B498;
            color: #000000;
        }

        .btn-primary:hover,
        .btn-danger:hover,
        .btn-warning:hover {
            background-color: #9CDBA6;
            color: #000000;
        }
        th{
            font-size: 25px;
        }
        td{
            font-size: 15px;
        }
        
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="{{ route('materials.index') }}">Materias</a>
        <a class="navbar-brand" href="{{ route('materials.create') }}">Crear Materias</a>
        

    </nav>
    <div class="container mt-4">
        <h1 class="mb-4">Lista de Materias<h1>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Créditos</th>
                    <th>Tipo</th>
                    <th>Valor por Hora</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materials as $material)
                    <tr>
                        <td>{{ $material->nombre }}</td>
                        <td>{{ $material->descripcion }}</td>
                        <td>{{ $material->creditos }}</td>
                        <td>{{ $material->tipo }}</td>
                        <td>{{ $material->valor_hora }}</td>
                        <td>{{ $material->estado }}</td>
                        <td>
                            <a href="{{ route('materials.edit', $material->id) }}"
                                class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('materials.destroy', $material->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/boot
