<h1>Showing all Locations</h1>

@forelse ($locations as $location)
var_export($location);
die();
    <li>{{ $location->id }}</li>
@empty
    <p> 'No events yet' </p>
@endforelse