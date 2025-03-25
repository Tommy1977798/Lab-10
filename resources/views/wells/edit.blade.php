<form method="POST" action="{{ isset($well) ? route('wells.update', $well->id) : route('wells.store') }}">
    @csrf
    @if(isset($well)) @method('PUT') @endif
    <input type="text" name="name" value="{{ $well->name ?? '' }}" placeholder="Well Name">
    <input type="text" name="location" value="{{ $well->location ?? '' }}" placeholder="Location">
    <input type="number" step="0.01" name="production_rate" value="{{ $well->production_rate ?? '' }}" placeholder="Production Rate">
    <select name="status">
        @foreach(['active', 'inactive', 'decommissioned'] as $status)
            <option value="{{ $status }}" {{ (isset($well) && $well->status == $status) ? 'selected' : '' }}>{{ ucfirst($status) }}</option>
        @endforeach
    </select>
    <button type="submit">{{ isset($well) ? 'Update' : 'Create' }}</button>
</form>
