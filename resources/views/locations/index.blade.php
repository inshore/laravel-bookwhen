<h1>Showing all Locations</h1>

@forelse ($locations as $location)
    <li>{{ $locations->addressText }}</li>
@empty
    <p> 'No events yet' </p>
@endforelse