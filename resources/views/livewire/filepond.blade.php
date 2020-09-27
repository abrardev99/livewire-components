<div class="content">
    <div class="title m-b-md">
        Filepond with Livewire
        <br>
        <x-filepond wire:model="avatar" multiple />
        @error('avatar') {{ $message }} @enderror
{{--        <x-filepond wire:model="avatars" multiple />--}}
    </div>
</div>
