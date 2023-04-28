<h1>Showing all Locations</h1>

@forelse ($locations as $location)
<li><a href="./{{ $location->id }}">{{ $location->addressText }}</a></li>
@empty
    <p> 'No locations yet' </p>
@endforelse