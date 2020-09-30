<div class="content">
    <div class="title m-b-md">
        Filepond with Livewire
        <br>
        <x-filepond wire:model="avatar" multiple />
        @error('avatar') {{ $message }} @enderror
{{--        <x-filepond wire:model="avatars" multiple />--}}
        <button type="button" wire:click="save('success')">Success</button>
        <button type="button" wire:click="save('error')">Error</button>
        <button type="button" wire:click="save('warning')">Warning</button>
        <button type="button" wire:click="save('info')">Info</button>
    </div>
</div>
