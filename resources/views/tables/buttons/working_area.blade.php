<form wire:submit.prevent="submitForm" enctype="multipart/form-data"></form>
<div class="row">

    <div class="col-md-6">
        <x-jet-label for="name" value="{{ __('Name') }}" />
        <div class="mb-3">
            <x-jet-input id="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                wire:model.defer="name" placeholder="Name" autocomplete="name" />
        </div>
        <x-jet-input-error for="name" />
    </div>

    <div class="col-md-6">
        <x-jet-label for="name" value="&nbps;" />
        <button type="submit" class="btn btn-primary btn-sm">Add Area</button>
    </div>


</div>
