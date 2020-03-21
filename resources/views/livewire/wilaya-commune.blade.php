<div>
    <h1>Stay at home</h1>
    <select name="" id="" wire:model="wilaya_id">
        <option value="">Wilayas</option>
        @foreach ($wilayas as $item)
            <option value="{{ $item->id }}">{{ $item->nom }}</option>
        @endforeach
    </select>

    <select name="" id="">
        <option value="">Communes</option>
        @foreach ($communes as $item)
            <option value="{{ $item->id }}">{{ $item->nom }}</option>
        @endforeach
    </select>
    {{-- In work, do what you enjoy. --}}
</div>
