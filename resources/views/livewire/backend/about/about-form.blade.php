<div class="form-group" wire:ignore>
    <label for="description">About</label>
    <textarea  wire:model="description" class="form-control" cols="50px" id="{{ $id }}">{{ $description ?? old('description') }}</textarea>
    @error('description')
        <small class="text-danger font-italic">{{ $message }}</small>
    @enderror
</div>