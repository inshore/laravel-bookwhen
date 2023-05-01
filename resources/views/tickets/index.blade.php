<h1>Showing all Tickets</h1>

@forelse ($tickets as $ticket)
<li><a href="./tickes/{{ $ticket->id }}">{{ $ticket->title }}</a></li>
@empty
    <p> 'No tickets yet' </p>
@endforelse