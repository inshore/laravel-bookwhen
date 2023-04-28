<h1>Showing all Locations</h1>

@forelse ($locations as $location)
    <li>{{ ($location->addressText) }}</li>
@empty
    <p> 'No locations yet' </p>
@endforelse