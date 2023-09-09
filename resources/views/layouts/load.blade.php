<!-- Archivo CSS de Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('load.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Introduce el título" required>
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea name="descripcion" id="descripcion" class="form-control" rows="4" placeholder="Describe el libro" required></textarea>
    </div>

    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <input type="file" name="imagen" id="imagen" class="form-control" accept="image/*" required>
    </div>

    <div class="mb-3">
        <label for="pdf" class="form-label">PDF</label>
        <input type="file" name="pdf" id="pdf" class="form-control" accept="application/pdf" required>
    </div>

    <div class="mb-3">
        <label for="id_categories" class="form-label">Categoría</label>
        <select name="id_categories" id="id_categories" class="form-select" required>
            @foreach(App\Models\Category::all() as $category)
                <option value="{{ $category->id }}">{{ $category->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="id_autors" class="form-label">Autores</label>
        <select name="id_autors[]" id="id_autors" class="form-select" required>
            @foreach(App\Models\Autor::all() as $autor)
                <option value="{{ $autor->id }}">{{ $autor->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
<!-- Archivos JS de Bootstrap 5 al final antes de cerrar la etiqueta </body> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</form>
