<div>
    <div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="update">
                        <div class="form-group">
                            <label for="name">nama</label>
                            <input type="text" wire:model.debonce.500ms="name" id="name" class="form-control" autocomplete="off">
                            @error('name')
                                <small class="text-danger font-italic">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" wire:model.debonce.500ms="email" id="email" class="form-control" autocomplete="off">
                            @if ($errors->has('email'))
                                <small class="text-danger font-italic">{{ $errors->first('email') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="oldPassword">old password</label>
                            <input type="password" wire:model.debonce.500ms="oldPassword" id="oldPassword" class="form-control" autocomplete="off">
                            @error('oldPassword')
                                <small class="text-danger font-italic">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="newPassword">new password</label>
                            <input type="password" wire:model.debonce.500ms="newPassword" id="newPassword" class="form-control" autocomplete="off">
                            @error('newPassword')
                                <small class="text-danger font-italic">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-warning">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>