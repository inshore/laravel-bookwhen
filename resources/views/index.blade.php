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
		<a href="https://scrutinizer-ci.com/g/inshore/laravel-bookwhen">
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
			<a href="https://www.bookwhen.com" class="text-green-600 no-underline bg-transparent">https://www.bookwhen.com</a>
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
		<p>https://api.bookwhen.com/v2#tag/Attachment/paths/~1attachments~1%7Battachment_id%7D/g</p>
		<pre>
			<code>
// Returns the attachment for the provided attachment ID. 
$attachment  = Bookwhen::attachment('ev-smij-20200530100000' )
			</code>
		</pre>
	</section>
	<section class="ml-5 mb-5">
		<h3 class="mb-4 mt-4">
			<span class="text-gray-800 font-light text-2xl leading-15 mb-0 text-left box-border">Class Passes</span>
		</h3>
		<p>
			implements <a href="https://api.bookwhen.com/v2#tag/ClassPass">https://api.bookwhen.com/v2#tag/ClassPass</a>
		</p>
		<h4 class="mb-3 mt-3">
			<span class="text-gray-800 font-light text-1xl leading-15 mb-0 text-left box-border">Class Passes</span>
		</h4>
		<p>https://api.bookwhen.com/v2#tag/ClassPass/paths/~1class_passes/get</p>
		<p>Preview 
			<a href="/bookwhen/class-passes"
			class="text-green-600 no-underline bg-transparent">ClassPasses</a></p>
		<pre>
			<code>		
// Fetch class passes accessible by the API token.
$classPasses = Bookwhen::classPasses());
			</code>
		</pre>
		<h5 class="mb-3 mt-3">
			<span class="text-gray-800 font-light text-m leading-15 mb-0 text-left box-border">Filters</span>
		</h5>
		<p>The filter parameters can be passed in as function
		parameters. 
		<ul class="mb-1 mt-1">
			<li><span class="text-m"><b>title</b> - Filter on the file title text.</span</li>
			<li><span class="text-m"><b>detail</b> - Filter on the details text.</span></li>
			<li><span class="text-m"><b>usageType</b> - Filter on the type of the pass: personal or any.</span></li>
			<li><span class="text-m"><b>cost</b> - Filter on the cost with an exact value or use a comparison operator. e.g. filter[cost][gte]=2000</span></li>
			<li><span class="text-m"><b>gte</b> - greater than</span></li>
			<li><span class="text-m"><b>gte</b> - greater than or equal</span></li>
			<li><span class="text-m"><b>lt</b> - less than</span></li>
			<li><span class="text-m"><b>lte</b> - less than or equal</span></li>
			<li><span class="text-m"><b>eq</b> - equal to</span></li>
			<li><span class="text-m"><b>usageAllowance</b> - Filter on pass usage allowance. This also accepts a comparison operator like cost.</span></li>
			<li><span class="text-m"><b>useRestrictedForDays</b> - Filter on pass days restriction. This also accepts a comparison operator like cost.</span></li>
		</ul>
		<pre>
			<code>
// Fetch class passes accessible by the API token.
$classPasses = Bookwhen::classPasses());
$classPasses = Bookwhen::classPasses(title: 'Title to filter by'));
			</code>
		</pre>
		<h4 class="mb-3 mt-3">
			<span class="text-gray-800 font-light text-1xl leading-15 mb-0 text-left box-border">ClassPass</span>
		</h4>
		<p>https://api.bookwhen.com/v2#tag/ClassPass/paths/~1class_passes~1%7Bclass_pass_id%7D/get</p>
		<pre>
			<code>
// Returns the class pass for the provided class pass ID.
$classPass = Bookwhen::classPass('ev-smij-20200530100000');
			</code>
		</pre>
	</section>
	<section class="ml-5 mb-5">
		<h3 class="mb-4 mt-4">
			<span class="text-gray-800 font-light text-2xl leading-15 mb-0 text-left box-border">Events</span>
		</h3>
		<p>
			implements <a href="https://api.bookwhen.com/v2#tag/Events">https://api.bookwhen.com/v2#tag/Event</a>
		</p>
		<h4 class="mb-3 mt-3">
			<span class="text-gray-800 font-light text-1xl leading-15 mb-0 text-left box-border">Events</span>
		</h4>
		<p>https://api.bookwhen.com/v2#tag/Event/paths/~1events/get</p>
		<p>Preview 
			<a href="/bookwhen/events"
			class="text-green-600 no-underline bg-transparent">Events</a></p>
		<pre>
			<code>		
// Fetch events accessible by the API token.
$events = Bookwhen::events());
			</code>
		</pre>
		<h5 class="mb-3 mt-3">
			<span class="text-gray-800 font-light text-m leading-15 mb-0 text-left box-border">Filters</span>
		</h5>
		<p>The filter parameters can be passed in as function
		parameters.</p> 
		<ul class="mb-1 mt-1">
			<li><span class="text-m"><b>calendar</b> - Restrict to events on the given calendars (schedule pages).</span</li>
			<li><span class="text-m"><b>entry</b> -  Restrict to given entries.</span></li>
			<li><span class="text-m"><b>location</b> - Array of location slugs to include.</span></li>
			<li><span class="text-m"><b>tag</b> - Array of tag words to include.</span></li>
			<li><span class="text-m"><b>title</b> -  Array of entry titles to search for.</span></li>
			<li><span class="text-m"><b>detail</b> - Array of entry details to search for.</span></li>
			<li><span class="text-m"><b>from</b> - Inclusive time to fetch events from in format YYYYMMDD or YYYYMMDDHHMISS. Defaults to today.</span></li>
			<li><span class="text-m"><b>to</b> - Non-inclusive time to fetch events until in format YYYYMMDD or YYYYMMDDHHMISS</span></li>
			<li><span class="text-m"><b>compact</b> - Boolean: Combine events in a course into a single virtual event.</span></li>
		</ul>
		<h5 class="mb-3 mt-3">
			<span class="text-gray-800 font-light text-m leading-15 mb-0 text-left box-border">Includes</span>
		</h5>		
		<p>By default the event will NOT have its attachments, location and tickets populated. 
			<br>To retrieve an event with the included relationships, simply pass boolean true for the relationship that is required.
			<br>includeAttachments includeLocation includeTickets includeTickets.class_passes includeTickets.events
			<br> for example to retrieve the event with its location and tickets.
		</p>
		<pre>
			<code>
// Returns the event for the provided event ID.
$events = Bookwhen::events(includeLocation: true, includeTickets: true);
			</code>
		</pre>
		<h4 class="mb-3 mt-3">
			<span class="text-gray-800 font-light text-1xl leading-15 mb-0 text-left box-border">Event</span>
		</h4>
		<p>https://api.bookwhen.com/v2#tag/Event/paths/~1events~1%7Bevent_id%7D/get</p>
		<pre>
			<code>
// Returns the event for the provided event ID.
$event = Bookwhen::event('ev-smij-20200530100000');
			</code>
		</pre>
		<h5 class="mb-3 mt-3">
			<span class="text-gray-800 font-light text-m leading-15 mb-0 text-left box-border">Includes</span>
		</h5>		
		<p>By default the event will NOT have its attachments, location and tickets populated. 
			<br>To retrieve an event with the included relationships, simply pass boolean true for the relationship that is required.
			<br>includeAttachments includeLocation includeTickets includeTickets.class_passes includeTickets.events
			<br> for example to retrieve the event with its location and tickets.
		</p>
		<pre>
				<code>
// Returns the event for the provided event ID.
$event = Bookwhen::event(eventId: 'ev-smij-20200530100000', includeLocation: true, includeTickets: true);
		</pre>
		</code>
	</section>
	<section class="ml-5 mb-5">
		<h3 class="mb-4 mt-4">
			<span class="text-gray-800 font-light text-2xl leading-15 mb-0 text-left box-border">Locations</span>
		</h3>
		<p>
			implements <a href="https://api.bookwhen.com/v2#tag/Locations">https://api.bookwhen.com/v2#tag/Location</a>
		</p>
		<h4 class="mb-3 mt-3">
			<span class="text-gray-800 font-light text-1xl leading-15 mb-0 text-left box-border">Locations</span>
		</h4>
		<p>https://api.bookwhen.com/v2#tag/Location/paths/~1locations/get</p>
		<p>Preview 
			<a href="/bookwhen/locations" class="text-green-600 no-underline bg-transparent">Locations</a></p>
		<pre>
			<code>
// Fetch events accessible by the API token.
$locations = Bookwhen::locations());
// Returns the location for the provided location ID.
			</code>
		</pre>
		<h5 class="mb-3 mt-3">
			<span class="text-gray-800 font-light text-m leading-15 mb-0 text-left box-border">Filters</span>
		</h5>
		<p>The filter parameters can be passed in as function
		parameters. 
		<ul class="mb-1 mt-1">
			<li><span class="text-m"><b>addressText</b> - Restrict to locations containing the address text filter.</span></li>
			<li><span class="text-m"><b>additionalInfo</b> - Filter by the text contained in the additional info.</span></li>
		</ul>
		<pre>
			<code>
// Fetch events accessible by the API token.
$locations = Bookwhen::locations(addressText: 'Remote'));
// Returns the location for the provided location ID.
			</code>
		</pre>
		<h4 class="mb-3 mt-3">
			<span class="text-gray-800 font-light text-1xl leading-15 mb-0 text-left box-border">Location</span>
		</h4>
		<p>https://api.bookwhen.com/v2#tag/Location/paths/~1locations~1%7Blocation_id%7D/get</p>
		<pre>
			<code>
// Returns the location for the provided location ID.
$location = Bookwhen::location('ev-smij-20200530100000');
			</code>
		</pre>
	</section>
	<section class="ml-5 mb-5">
		<h3 class="mb-4 mt-4">
			<span class="text-gray-800 font-light text-2xl leading-15 mb-0 text-left box-border">Tickets</span>
		</h3>
		<p>
			implements <a href="https://api.bookwhen.com/v2#tag/Locations">https://api.bookwhen.com/v2#tag/Ticket</a>
		</p>
		<h4 class="mb-3 mt-3">
			<span class="text-gray-800 font-light text-1xl leading-15 mb-0 text-left box-border">Tickets</span>
		</h4>
		<p>https://api.bookwhen.com/v2#tag/Ticket/paths/~1tickets/get</p>
		<p>Preview 
			<a href="/bookwhen/tickets"
			class="text-green-600 no-underline bg-transparent">Tickets</a></p>
		<pre>
			<code>
// Fetch tickets for the given event.
$eventId = 'ev-smij-20200530100000';
$client->tickets($eventId);
			</code>
		</pre>
		<h5 class="mb-3 mt-3">
			<span class="text-gray-800 font-light text-m leading-15 mb-0 text-left box-border">Includes</span>
		</h5>
		<p>By default the tickets will NOT have its attachments, events and location populated.<br>
		To retrieve an event withg the included relationships, simply pass boolean true for the relationship that is required.<br>
		includeAttachments includeLocation includeTickets.class_passes includeTickets.events</p>
		<pre>
			<code>
// Fetch tickets for the given event.
$eventId = 'ev-smij-20200530100000';
$client->tickets($eventId, includeAttachments: true);
			</code>
		</pre>
		<h4 class="mb-3 mt-3">
			<span class="text-gray-800 font-light text-1xl leading-15 mb-0 text-left box-border">Ticket</span>
		</h4>
		<p>https://api.bookwhen.com/v2#tag/Ticket/paths/~1tickets~1%7Bticket_id%7D/get</p>
		<pre>
			<code>
// Retrieve a single ticket.
$ticketId = 'ti-sboe-20200320100000-tk1m';
$client->ticket($ticketId);
			</code>
		</pre>
		<h5 class="mb-3 mt-3">
			<span class="text-gray-800 font-light text-m leading-15 mb-0 text-left box-border">Includes</span>
		</h5>
		<p>By default the tickets will NOT have its attachments, events and location populated.<br>
		To retrieve an event withg the included relationships, simply pass boolean true for the relationship that is required.<br>
		includeAttachments includeLocation includeTickets.class_passes includeTickets.events</p>
		<pre>
			<code>
// Retrieve a single ticket.
$client->ticket('ti-sboe-20200320100000-tk1m', includeAttachments: true););
			</code>
		</pre>
	</section>
	<section class="ml-5 mb-5">
		<h3 class="mb-4 mt-4">
			<span class="text-gray-800 font-light text-2xl leading-15 mb-0 text-left box-border">Logging</span>
		</h3>
		<p>Full syslog level logging is available and can be enabled by passing a level in when instatiating the Client. As illustrated in RFC 5424 which describes the syslog protocol, the following levels of intensity are applied.</p>
		<p>DEBUG: Detailed debugging information. INFO: Handles normal events. Example: SQL logs NOTICE: Handles normal events, but with more important events WARNING: Warning status, where you should take an action before it will become an error. ERROR: Error status, where something is wrong and needs your immediate action CRITICAL: Critical status. Example: System component is not available ALERT: Immediate action should be exercised. This should trigger some alerts and wake you up during night time. EMERGENCY: It is used when the system is unusable.</p>
		<p>$bookwhen = new Bookwhen()->debug('Debug');</p>
	</section>
	<section class="ml-5 mb-5">
		<h3 class="mb-4 mt-4">
			<span class="text-gray-800 font-light text-2xl leading-15 mb-0 text-left box-border">Testing</span>
		</h3>
		<h4 class="mb-3 mt-3">
			<span class="text-gray-800 font-light text-m leading-15 mb-0 text-left box-border">WIP</span>
		</h4>
		<pre>
			<code>
$ composer phpunit
			</code>
		</pre>
	</section>
	<section class="ml-5 mb-5">
		<h3 class="mb-4 mt-4">
			<span class="text-gray-800 font-light text-2xl leading-15 mb-0 text-left box-border">Contributing</span>
		</h3>
		<p>
			Please see <a href="https://github.com/inshore/laravel-bookwhen/blob/main/CONTRIBUTING.md">https://github.com/inshore/laravel-bookwhen/blob/main/CONTRIBUTING.md</a> for details.
		</p>
	</section>
	<section class="ml-5 mb-5">
		<h3 class="mb-4 mt-4">
			<span class="text-gray-800 font-light text-2xl leading-15 mb-0 text-left box-border">Support</span>
		</h3>
		<p>
			If you require assistance with this package or implementing in your own project or business...
		</p>
		<p>
			<a href="https://bookwhen.com/inshore">https://bookwhen.com/inshore</a>
	</p>
	<script type="text/javascript"
		src="https://cdnjs.buymeacoffee.com/1.0.0/button.prod.min.js"
		data-name="bmc-button" data-slug="danielmullin" data-color="#FFDD00"
		data-emoji="" data-font="Cookie" data-text="Buy me a coffee"
		data-outline-color="#000000" data-font-color="#000000"
		data-coffee-color="#ffffff"></script>
	</section>
	<section class="ml-5 mb-5">
		<h3 class="mb-4 mt-4">
			<span class="text-gray-800 font-light text-2xl leading-15 mb-0 text-left box-border">Credits</span>
		</h3>
		<p>
		Daniel Mullin inshore@danielmullin.com<br>
		Brandon Lubbehusen inshore@danielmullin.com
		</p>
	</section>
</body>
</html>