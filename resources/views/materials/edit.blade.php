<!DOCTYPE html>
<html>
<head>
    <title>Editar Materia</title>
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
        <a class="navbar-brand" href="{{ route('materials.index') }}">Material</a>
    </nav>
    <div class="container mt-4">
        <h1 class="mb-4">Editar Materia</h1>
        <form action="{{ route('materials.update', $material->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{ $material->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" class="form-control">{{ $material->descripcion }}</textarea>
            </div>
            <div class="form-group">
                <label for="creditos">Créditos:</label>
                <input type="number" name="creditos" class="form-control" value="{{ $material->creditos }}" required>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <select class="form-select form-select-sm" name="tipo" aria-label=".form-select-sm example" required>
                    <option value="" disabled>Seleccione el tipo de materia</option>
                    <option value="basica" {{ $material->tipo == 'basica' ? 'selected' : '' }}>Básica</option>
                    <option value="formacion" {{ $material->tipo == 'formacion' ? 'selected' : '' }}>Formación</option>
                    <option value="titulacion" {{ $material->tipo == 'titulacion' ? 'selected' : '' }}>Titulación</option>
                </select>
            </div>
            <div class="form-group">
                <label for="valor_hora">Valor por Hora:</label>
                <input type="number" step="0.01" name="valor_hora" class="form-control" value="{{ $material->valor_hora }}" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <select class="form-select form-select-sm" name="estado" aria-label=".form-select-sm example" required>
                    <option value="" disabled>Seleccione el estado</option>
                    <option value="Activo" {{ $material->estado == 'Activo' ? 'selected' : '' }}>Activo</option>
                    <option value="Inactivo" {{ $material->estado == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
