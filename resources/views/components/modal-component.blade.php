<!-- resources/views/components/ModalComponent.blade.php -->
@props([
    'modalTitle' => '',
    'buttonText' => '',
])
<div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"
        style="margin-left: 20px;">
        <i class="bi bi-plus-circle"></i> {{ $buttonText }}
    </button>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $modalTitle }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
