<div
    wire:ignore
    x-data
    x-init="new Pikaday({ field: $refs.input, format: 'MM/DD/YYYY' })"
    @change="$dispatch('input', $event.target.value)">

    <input {{ $attributes }} x-ref="input"/>
</div>
