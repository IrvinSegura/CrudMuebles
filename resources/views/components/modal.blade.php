<div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"
        style="margin-left: 20px;">
        <i class="bi bi-plus-circle"></i> Agregar Nuevo Mueble
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Mueble</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/crearMueble') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Nombre">
                        </div>
                        <div class="mb-3">
                            <label for="material" class="form-label">Material</label>
                            <input type="text" name="material" class="form-control" id="material"
                                placeholder="Material">
                        </div>
                        <div class="mb-3">
                            <label for="tamaño" class="form-label">Tamaño</label>
                            <input type="text" name="size" class="form-control" id="size"
                                placeholder="Tamaño">
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" name="color" class="form-control" id="color"
                                placeholder="Color">
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="text" name="price" class="form-control" id="price"
                                placeholder="Precio">
                        </div>
                        <br>
                        <center>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
