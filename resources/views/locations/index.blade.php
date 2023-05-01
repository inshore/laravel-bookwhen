<h1>Showing all Locations</h1>

@forelse ($locations as $location)
<li><a href="./locations/{{ $location->id }}">{{ $location->addressText }}</a></li>
@empty
    <p> 'No locations yet' </p>
@endforelse