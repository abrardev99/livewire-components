<div
    wire:ignore
    x-data
    x-init="($refs.select).select2();"
>
    <select name="state" x-ref="select">
        <option value="AL">Alabama</option>
        <option value="WY">Wyoming</option>
    </select>
</div>
