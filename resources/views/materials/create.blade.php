<!DOCTYPE html>
<html>

<head>
    <title>Crear Materia</title>
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
            font-size: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="{{ route('materials.index') }}">Materiales</a>
    </nav>
    <div class="container mt-4">
        <h1 class="mb-4">Crear Materia</h1>
        <form action="{{ route('materials.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="creditos">Créditos:</label>
                <input type="number" name="creditos" class="form-control" required>
            </div>
            <div class="form-group">
                <select class="form-select form-select-sm" name="tipo" aria-label=".form-select-sm example">
                    <option selected>Seleccione el tipo de materia</option>
                    <option value="basica">Básica </option>
                    <option value="formacion">Formación</option>
                    <option value="titulacion">Titulación</option>
                </select>
            </div>

            <div class="form-group">
                <label for="valor_hora">Valor por Hora:</label>
                <input type="number" step="0.01" name="valor_hora" class="form-control" required>
            </div>

            <div class="form-group">
                <select class="form-select form-select-sm" name="estado" aria-label=".form-select-sm example">
                    <option selected>Estado</option>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>

                </select>

            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
