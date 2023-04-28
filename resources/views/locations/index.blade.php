<h1>Showing all Locations</h1>
{{ var_export($locations) }}
@forelse ($locations as $location)
    <li>{{ ($location) }}</li>
@empty
    <p> 'No locations yet' </p>
@endforelse