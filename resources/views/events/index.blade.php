<h1>Showing all Events</h1>

@forelse ($events as $event)
    <li>{{ $event->title }}</li>
@empty
    <p> 'No events yet' </p>
@endforelse