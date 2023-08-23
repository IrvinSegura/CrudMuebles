<div>
    <!-- Botón que abre el modal -->
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editarModal{{ $mueble->id }}">Editar</a>

    <!-- Modal -->
    <div class="modal fade" id="editarModal{{ $mueble->id }}" tabindex="-1" role="dialog"
        aria-labelledby="editarModalLabel{{ $mueble->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarModalLabel{{ $mueble->id }}">Editar Mueble
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('furniture.update', $mueble->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <b>Nombre: <input type="hidden" name="name" class="form-control"
                                    id="name{{ $mueble->id }}">{{ $mueble->name }}</b>
                            <br>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Nombre">
                        </div>
                        <div class="mb-3">
                            <label for="material" class="form-label">Material:
                                <input type="hidden" name="material" class="form-control"
                                    id="material{{ $mueble->id }}">{{ $mueble->material }}</label>
                            <input type="text" name="material" class="form-control" id="material"
                                placeholder="Material">
                        </div>
                        <div class="mb-3">
                            <label for="tamaño" class="form-label">Tamaño:
                                <input type="hidden" name="size" class="form-control"
                                    id="size{{ $mueble->id }}">{{ $mueble->size }}</label>
                            <input type="text" name="size" class="form-control" id="size"
                                placeholder="Tamaño">
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">Color:
                                <input type="hidden" name="color" class="form-control"
                                    id="color{{ $mueble->id }}">{{ $mueble->color }}</label>
                            <input type="text" name="color" class="form-control" id="color"
                                placeholder="Color">
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio:
                                <input type="hidden" name="price" class="form-control"
                                    id="price{{ $mueble->id }}">{{ $mueble->price }}</label>
                            <input type="text" name="price" class="form-control" id="price"
                                placeholder="Precio">
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
