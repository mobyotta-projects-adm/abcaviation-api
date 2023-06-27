<form wire:submit.prevent="addArea" enctype="multipart/form-data">
    <div class="row">

        <div class="col-md-8">

            <div class="mb-3">
                <x-jet-input id="name" type="text"
                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" wire:model.defer="name"
                    placeholder="Name" autocomplete="name" />
            </div>
            <x-jet-input-error for="name" />
        </div>
        <div class="col-md-4 ">
            <div class="d-grid gap-2">
                <button type="submit" name="" id="" class="btn btn-primary">Add Area</button>
            </div>
        </div>

    </div>
</form>
