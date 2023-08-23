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
        <x-header title="Articulo {{$furniture->name}}" />
        <br>
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <div class="card shadow border-0 mb-7">
                    <x-card name="{{$furniture->name}}" material="{{$furniture->material}}" description="{{$furniture->description}}" size="{{$furniture->size}}" price="{{$furniture->price}}" image=""   />
                </div>
            </div>
        </main>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>