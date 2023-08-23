<div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="bi bi-plus-circle"></i> Agregar Nuevo Mueble
    </button><br>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ 'categorias' }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Nombre">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Enviar">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
