<div>
    <div>
        <!-- Add Modal-->
        <div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="update">
                            @include('livewire.backend.about.about-form', ['id' => 'edit'])
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-warning">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add Modal-->
        </div>
</div>