<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
<!-- Incluye las hojas de estilo de Bootstrap -->

<!-- Incluye jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Incluye los scripts de Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Banner -->

<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->
    <x-navbar-vertical />

    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <x-header title="CRUD SOBRE UNA MUEBLERIA" />
        <br>
        <x-modal />
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <div class="card shadow border-0 mb-7">
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Material</th>
                                    <th scope="col">Tamaño</th>
                                    <th scope="col">Color</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Acciones</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($furniture as $mueble)
                                    <tr>
                                        <td>{{ $mueble->id }}</td>
                                        <td>{{ $mueble->name }}</td>
                                        <td>{{ $mueble->material }}</td>
                                        <td>{{ $mueble->size }}</td>
                                        <td>{{ $mueble->color }}</td>
                                        <td>{{ $mueble->price }}</td>
                                        <td>
                                            <div class="d-flex justify-content-between align-items-center" style="margin-left: 20px;">
                                                <!-- Botón que abre el modal -->
                                                <a href="#" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#editarModal{{ $mueble->id }}">Editar</a>

                                                <!-- Modal -->
                                                <div class="modal fade" id="editarModal{{ $mueble->id }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="editarModalLabel{{ $mueble->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="editarModalLabel{{ $mueble->id }}">Editar
                                                                    Mueble
                                                                </h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Cerrar">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ route('furniture.update', $mueble->id) }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @method('PUT')
                                                                    @csrf
                                                                    <div class="mb-3">
                                                                        <b>Nombre: <input type="hidden" name="name"
                                                                                class="form-control"
                                                                                id="name{{ $mueble->id }}">{{ $mueble->name }}</b>
                                                                        <br>
                                                                        <input type="text" name="name"
                                                                            class="form-control" id="name"
                                                                            placeholder="Nombre">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="material"
                                                                            class="form-label">Material:
                                                                            <input type="hidden" name="material"
                                                                                class="form-control"
                                                                                id="material{{ $mueble->id }}">{{ $mueble->material }}</label>
                                                                        <input type="text" name="material"
                                                                            class="form-control" id="material"
                                                                            placeholder="Material">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="tamaño" class="form-label">Tamaño:
                                                                            <input type="hidden" name="size"
                                                                                class="form-control"
                                                                                id="size{{ $mueble->id }}">{{ $mueble->size }}</label>
                                                                        <input type="text" name="size"
                                                                            class="form-control" id="size"
                                                                            placeholder="Tamaño">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="color" class="form-label">Color:
                                                                            <input type="hidden" name="color"
                                                                                class="form-control"
                                                                                id="color{{ $mueble->id }}">{{ $mueble->color }}</label>
                                                                        <input type="text" name="color"
                                                                            class="form-control" id="color"
                                                                            placeholder="Color">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="precio" class="form-label">Precio:
                                                                            <input type="hidden" name="price"
                                                                                class="form-control"
                                                                                id="price{{ $mueble->id }}">{{ $mueble->price }}</label>
                                                                        <input type="text" name="price"
                                                                            class="form-control" id="price"
                                                                            placeholder="Precio">
                                                                    </div>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Enviar</button>
                                                                </form>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <form action="{{ route('furniture.destroy', $mueble->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-danger">Eliminar</button>
                                                    </form>
                                                </div>
                                                <div>   
                                                    <form action="{{ route('furniture.show', $mueble->id) }}"
                                                        method="GET">
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-success">Ver</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>