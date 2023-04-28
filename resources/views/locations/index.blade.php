<h1>Showing all Locations</h1>

@forelse ($locations as $location)
<li><a href="./locations/{{ $location->addressText }}">{{ $location->addresText }}</a></li>
@empty
    <p> 'No locations yet' </p>
@endforelse