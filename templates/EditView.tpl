<html>
<head>
	<style>
		div.left
		{
			float:left;
			width:45%;

		}
		div.right
		{
			float:right;
			width:45%;
		}
		form
		{
			display:inline;
		}
	</style>
</head>
<body>
<h2>Edit Event</h2>
<hr>
<!-- BEGIN DETAILS -->
<div class="left">
	<form method="post" action="./events/?action=EditEventDetails">
	<label for="event_name">Event Name:</label>
	<input name="event_name" type="text" class="form-control" id="event_name" value="{eventname}"required>

	<label for="event_location">Event Location:</label>
	<input name="event_location" type="text" class="form-control" id="event_location" value="{eventlocation}" required>

	<label>Tickets</label>
	<br />
	<label for="ticket_price">Prices:</label>
	<textarea name="ticket_prices" class="form-control" rows="3" id="ticket_prices" required>{ticketprices}</textarea>
	<label for="ticket_location">Where to Buy:</label>
	<textarea name="ticket_location" class="form-control" rows="4" id="ticket_location" required>{ticketlocation}</textarea>

	<label>Times</label>
	<br />
	<label for="open_time">Doors Open:</label>
	<input name="open_time" type="text" class="form-control" id="open_time" value="{opentime}">
	<label for="start_time">Show Start:</label>
	<input name="start_time" type="text" class="form-control" id="start_time"  value="{starttime}" required>

	<label for="event_restrictions">Restrictions:</label>
	<input name="event_restrictions" type="text" class="form-control" id="event_restrictions" value="{eventrestrictions}">
</div>

<div class="right">
	<label for="event_image">Event/Artist Image:</label>
	<input name="event_image" id="event_image" type="file" class="file">

	<label for "current_image">Current Image:</label>
	<img class="img-responsive" src="{imageurl}" height="100" width="250" alt="{imageurl}">

	<label for="event_date">Event Date:</label>
	<input name="event_date" type="date" class="form-control" id="event_date" value="{eventdate}">
	
	<label for="event_details">Event/Artist Details:</label>
	<textarea name="event_details" class="form-control" rows="6" id="event_details">{artistdetails}</textarea>
	<hr>
	
	<button name="edit" type="submit" class="btn btn-primary" value="{id}">Submit</button>
	</form>
	<form method="" action="./events/?action=ShowAdminHome">
	<button name="cancel" type="submit" class="btn btn-danger" value="">Cancel</button>
	</form>
</div>
<!-- END DETAILS -->

</body>
</html>