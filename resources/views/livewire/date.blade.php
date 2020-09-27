<div class="content">
    <div class="title m-b-md">
        Datepicker with Pick a day
        <br>
        <x-date  wire:model="birthday" id="birthday" placeholder="MM/DD/YYYY" />
        @error('birthday') {{ $message }} @enderror
        {{--        <x-filepond wire:model="avatars" multiple />--}}
    </div>
</div>

