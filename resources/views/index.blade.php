<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>inShore.je - Laravel Bookwhen PHP API SDK</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased bg-white box-border text-gray-800 font-poppins text-base font-normal leading-6 m-0 text-left">
	<h1 class="flex items-center justify-center mb-10 mt-10">
		<span class="text-gray-800 font-light text-4xl leading-15 mb-0 text-left box-border">inShore.je - Laravel Bookwhen PHP API SDK</span>
	</h1>
	<div class="flex items-center justify-center mb-10">
		<a href="https://github.com/inshore/laravel-bookwhen/releases">
			<img
			src="https://img.shields.io/github/release/inshore/laravel-bookwhen.svg?style=flat-square"
			alt="Latest Version" class="ml-2" />
		</a> 
		<a href="LICENSE.md">
			<img
			src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square"
			alt="Software License" class="ml-2" />
		</a> 
		<a
			href="https://scrutinizer-ci.com/g/inshore/laravel-bookwhen/code-structure">
			<img
			src="https://img.shields.io/scrutinizer/coverage/g/inshore/laravel-bookwhen.svg?style=flat-square"
			alt="Coverage Status" class="ml-2" />
		</a> 
		<a href="https://scrutinizer-ci.com/g/inshore/laravel-bookwhen"">
			<img
			src="https://img.shields.io/scrutinizer/g/inshore/laravel-bookwhen.svg?style=flat-square"
			alt="Quality Score" class="ml-2" />
		</a> 
		<a href="https://packagist.org/packages/inshore/laravel-bookwhen">
			<img
			src="https://img.shields.io/packagist/dt/inshore/laravel-bookwhen.svg?style=flat-square"
			alt="Total Downloads" class="ml-2" />
		</a>
	</div>
	<section class="ml-5 mb-5">
    	<h2>
    		<span class="text-gray-800 font-light text-3xl leading-15 mb-0 text-left box-border">Usage</span>
    	</h2>
    	<div class="mt-4">
    		<a href="https://www.bookwhen.com"
    			class="text-green-600 no-underline bg-transparent">https://www.bookwhen.com</a>
    	</div>
    
    	<div class="mt-4">
    		<a href="https://api.bookwhen.com/v2"
    			class="text-green-600 no-underline bg-transparente">https://api.bookwhen.com/v2</a>
    	</div>
    	<div class="mt-4">
        	<p>Your key is installed correctly Now simply add your Bookwhen API key
        		to your .env
        	</p>
        </div>
    </section>
	<section class="ml-5 mb-5">
		<h3 class="mb-4 mt-4">
			<span class="text-gray-800 font-light text-2xl leading-15 mb-0 text-left box-border">Attachments</span>
		</h3>
		<p>
			implements <a href="https://api.bookwhen.com/v2#tag/Attachment">https://api.bookwhen.com/v2#tag/Attachment</a>
		</p>
		<h4 class="mb-3 mt-3">
			<span class="text-gray-800 font-light text-1xl leading-15 mb-0 text-left box-border">Attachments</span>
		</h4>
		<p>https://api.bookwhen.com/v2#tag/Attachment/paths/~1attachments/get</p>
		<p>Preview 
			<a href="/bookwhen/attachments"
			class="text-green-600 no-underline bg-transparent">Attachments</a></p>
		<pre>
			<code>		
// Fetch attachments accessible by the API token.
$attachments = Bookwhen::attachments());
			</code>
		</pre>
		<h5 class="mb-3 mt-3">
			<span class="text-gray-800 font-light text-m leading-15 mb-0 text-left box-border">Filters</span>
		</h5>
		<p>The filter parameters can be passed in as function
		parameters. 
		<ul class="mb-1 mt-1">
			<li><span class="text-m"><b>title</b> - Filter on the file title text.</span</li>
			<li><span class="text-m"><b>fileName</b> - Filter on the file name.</span></li>
			<li><span class="text-m"><b>fileType</b> - Filter on the file type.</span></li>
		</ul>
		<pre>
			<code>
// Fetch attachments accessible by the API token.
$attachments = Bookwhen::attachments(fileName: 'CV'));
$attachments = Bookwhen::attachments(fileType: 'pdf'));
$attachments = Bookwhen::attachments(title: 'Title to filter by'));
$attachments = Bookwhen::attachments(fileName: 'CV', fileType: 'pdf', title: 'Title to filter by'));
			</code>
		</pre>
		<h4 class="mb-3 mt-3">
			<span class="text-gray-800 font-light text-1xl leading-15 mb-0 text-left box-border">Attachment</span>
		</h4>
		<p>https://api.bookwhen.com/v2#tag/Attachment/paths/~1attachments~1%7Battachment_id%7D/g
		<pre>
			<code>
// Returns the attachment for the provided attachment ID. 
$attachment  = Bookwhen::attachment('ev-smij-20200530100000' )
			</code>
		</pre>
	</section>
		
		
		
		
		
		###Class Passes implements
		[https://api.bookwhen.com/v2#tag/ClassPass](https://api.bookwhen.com/v2#tag/ClassPass)

		ClassPasses

		https://api.bookwhen.com/v2#tag/ClassPass/paths/~1class_passes/get

		<pre>
				<code>

// Fetch class passes accessible by the API token.

$classPasses = Bookwhen::classPasses());


			
			
		
		
		
		</pre>
		</code>

		**Filters** The filter parameters can be passed in as function
		parameters **title** - Filter on the title text of the pass.

		**detail** - Filter on the details text. **usageType** - Filter on the
		type of the pass: personal or any. **cost** - Filter on the cost with
		an exact value or use a comparison operator. e.g.
		filter[cost][gte]=2000 **gt** - greater than **gte** - greater than or
		equal **lt** - less than **lte** - less than or equal **eq** - equal
		to **usageAllowance** - Filter on pass usage allowance. This also
		accepts a comparison operator like cost. **useRestrictedForDays** -
		Filter on pass days restriction. This also accepts a comparison
		operator like cost.

		<pre>
				<code>

// Fetch class passes accessible by the API token.

$classPasses = Bookwhen::classPasses());

$classPasses = Bookwhen::classPasses(title: 'Title to filter by'));

			
			
		
		
		
		</pre>
		</code>

		ClassPass

		https://api.bookwhen.com/v2#tag/ClassPass/paths/~1class_passes~1%7Bclass_pass_id%7D/get

		<pre>
				<code>

// Returns the class pass for the provided class pass ID.

$classPass = Bookwhen::classPass('ev-smij-20200530100000');


			
			
		
		
		
		</pre>
		</code>

		### Events

		[https://api.bookwhen.com/v2#tag/Event](https://api.bookwhen.com/v2#tag/Event)

		Events

		[https://api.bookwhen.com/v2#tag/Event/paths/~1events/get](https://api.bookwhen.com/v2#tag/Event/paths/~1events/get)

		<pre>
				<code>

// Returns the event for the provided event ID.

$event = Bookwhen::events();


			
			
		
		
		
		</pre>
		</code>

		**Filters** **calendar** - Restrict to events on the given calendars
		(schedule pages). **entry** - Restrict to given entries. **location**
		- Array of location slugs to include. **tag** - Array of tag words to
		include. **title** - Array of entry titles to search for. **detail** -
		Array of entry details to search for. **from** - Inclusive time to
		fetch events from in format YYYYMMDD or YYYYMMDDHHMISS. Defaults to
		today. **to** - Non-inclusive time to fetch events until in format
		YYYYMMDD or YYYYMMDDHHMISS **compact** - Boolean: Combine events in a
		course into a single virtual event. **Includes** By default the event
		will NOT have its attachments, location and tickets populated. To
		retrieve an event with the included relationships, simply pass boolean
		true for the relationship that is required. includeAttachments
		includeLocation includeTickets includeTickets.class_passes
		includeTickets.events for example to retrieve the event with its
		location and tickets.

		<pre>
				<code>

// Returns the event for the provided event ID.

$event = Bookwhen::events(title: 'Title to filter by'));


			
			
		
		
		
		</pre>
		</code>

		Event

		[https://api.bookwhen.com/v2#tag/Event/paths/~1events~1%7Bevent_id%7D/get](https://api.bookwhen.com/v2#tag/Event/paths/~1events~1%7Bevent_id%7D/get)

		<pre>
				<code>

// Returns the event for the provided event ID.

$event = Bookwhen::event('ev-smij-20200530100000');


			
			
		
		
		
		</pre>
		</code>


		<pre>
				<code>

// Returns the event for the provided event ID.

$event = Bookwhen::event(eventId: 'ev-smij-20200530100000', includeLocation: true, includeTickets: true);


			
			
		
		
		
		</pre>
		</code>

		###Events###

		<pre>
				<code>

// Fetch events accessible by the API token.

$events = Bookwhen::events());


			
			
		
		
		
		</pre>
		</code>

		**Filters** The event list can be filtered as per the api
		documentation **Includes** By default the event will NOT have its
		attachments, location and tickets populated. To retrieve an event
		withg the included relationships, simply pass boolean true for the
		relationship that is required. **includeAttachments**
		**includeLocation** **includeTickets.class_passes**
		**includeTickets.events** for example to retrieve the event with its
		location and tickets.



		<pre>
				<code>

// Fetch events accessible by the API token.

$events = Bookwhen::events(location: true, includeTickets: true);));


			
			
		
		
		
		</pre>
		</code>


		### Locations Implements
		[https://api.bookwhen.com/v2#tag/Location](https://api.bookwhen.com/v2#tag/Location)

		Locations

		[https://api.bookwhen.com/v2#tag/Location/paths/~1locations/get](https://api.bookwhen.com/v2#tag/Location/paths/~1locations/get)

		<pre>
				<code>

// Fetch events accessible by the API token.

$locations = Bookwhen::locations());

// Returns the location for the provided location ID.


			
			
		
		
		
		</pre>
		</code>

		**Filters** **addressText** - Restrict to locations containing the
		address text filter. **additionalInfo** - Filter by the text contained
		in the additional info.

		<pre>
				<code>

// Fetch events accessible by the API token.

$locations = Bookwhen::locations(addressText: 'Remote'));

// Returns the location for the provided location ID.


			
			
		
		
		
		</pre>
		</code>

		Location

		[https://api.bookwhen.com/v2#tag/Location/paths/~1locations~1%7Blocation_id%7D/get](https://api.bookwhen.com/v2#tag/Location/paths/~1locations~1%7Blocation_id%7D/get)

		</pre>
		</code>
		php // Returns the location for the provided location ID. $location =
		Bookwhen::location('ev-smij-20200530100000');

		</pre>
		</code>

		### Tickets Implements
		[https://api.bookwhen.com/v2#tag/Ticket](https://api.bookwhen.com/v2#tag/Ticket)

		Tickets

		[https://api.bookwhen.com/v2#tag/Ticket/paths/~1tickets/get](https://api.bookwhen.com/v2#tag/Ticket/paths/~1tickets/get)


		<pre>
				<code>

// Fetch tickets for the given event.

$eventId = 'ev-smij-20200530100000';

$client->tickets($eventId);

			
			
		
		
		
		</pre>
		</code>

		**Includes** By default the tickets will NOT have its attachments,
		evetns and location populated. To retrieve an event withg the included
		relationships, simply pass boolean true for the relationship that is
		required. **includeAttachments** **includeLocation**
		**includeTickets.class_passes** **includeTickets.events**

		<pre>
				<code>

// Fetch tickets for the given event.

$eventId = 'ev-smij-20200530100000';

$client->tickets($eventId, includeAttachments: true);

			
			
		
		
		
		</pre>
		</code>

		Ticket

		[https://api.bookwhen.com/v2#tag/Ticket/paths/~1tickets~1%7Bticket_id%7D/get](https://api.bookwhen.com/v2#tag/Ticket/paths/~1tickets~1%7Bticket_id%7D/get)

		<pre>
				<code>
// Retrieve a single ticket.

$ticketId = 'ti-sboe-20200320100000-tk1m';

$client->ticket($ticketId);


			
			
		
		
		
		</pre>
		</code>

		**Includes** By default the tickets will NOT have its attachments,
		evetns and location populated. To retrieve an event withg the included
		relationships, simply pass boolean true for the relationship that is
		required. **includeAttachments** **includeLocation**
		**includeTickets.class_passes** **includeTickets.events**

		<pre>
				<code>
// Retrieve a single ticket.

$client->ticket('ti-sboe-20200320100000-tk1m', includeAttachments: true););


			
			
		
		
		
		</pre>
		</code>

		</p>


		## Contributing Please see
		[https://github.com/inshore/laravel-bookwhen/blob/main/CONTRIBUTING.md](https://github.com/inshore/laravel-bookwhen/blob/main/CONTRIBUTING.md)
		for details. ## Support If you require assistance with this package or
		implementing in your own project or business...

		[https://bookwhen.com/inshore](https://bookwhen.com/laravel-inshore)

		<script type="text/javascript"
			src="https://cdnjs.buymeacoffee.com/1.0.0/button.prod.min.js"
			data-name="bmc-button" data-slug="danielmullin" data-color="#FFDD00"
			data-emoji="" data-font="Cookie" data-text="Buy me a coffee"
			data-outline-color="#000000" data-font-color="#000000"
			data-coffee-color="#ffffff"></script>

		[https://www.buymeacoffee.com/danielmullin](https://www.buymeacoffee.com/danielmullin)

		## Credits - Daniel Mullin inshore@danielmullin.com - Brandon
		Lubbehusen inshore@danielmullin.com ## License MIT

		[https://github.com/inshore/laravel-bookwhen/blob/main/LICENSE.md](https://github.com/inshore/laravel-bookwhen/blob/main/LICENSE.md)

		</p>

</body>
</html>