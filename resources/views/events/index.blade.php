<h1>Showing all Events</h1>

@forelse ($events as $event)
    <li><a href="./events/{{ $event->id }}">{{ $event->title }}</a></li>
@empty
    <p> 'No events yet' </p>
@endforelse