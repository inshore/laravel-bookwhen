<h1>Showing all Locations</h1>

@forelse ($locations as $location)
    <li>{{ var_export($location)$location->addressText }}</li>
@empty
    <p> 'No locations yet' </p>
@endforelse