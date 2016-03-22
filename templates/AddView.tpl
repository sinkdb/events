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
		div.bottom
		{

			
		}
		form
		{
			display:inline;
		}
	</style>
</head>
<body>
<h2>Add Event</h2>
<hr>
<div class="left">
	<form method="post" action="./events/?action=AddEvent">
	<label for="event_name">Event Name:</label>
	<input name="event_name" type="text" class="form-control" id="event_name">

	<label for="event_location">Event Location:</label>
	<input name="event_location" type="text" class="form-control" id="event_location">

	<label>Tickets</label>
	<br />
	<label for="ticket_price">Prices:</label>
	<textarea name="ticket_prices" class="form-control" rows="3" id="ticket_prices"></textarea>
	<label for="ticket_location">Where to Buy:</label>
	<textarea name="ticket_location" class="form-control" rows="4" id="ticket_location"></textarea>

	<label>Times</label>
	<br />
	<label for="open_time">Doors Open:</label>
	<input name="open_time" type="text" class="form-control" id="open_time">
	<label for="start_time">Show Start:</label>
	<input name="start_time" type="text" class="form-control" id="start_time">

	<label for="event_restrictions">Restrictions:</label>
	<input name="event_restrictions" type="text" class="form-control" id="event_restrictions">
</div>

<div class="right">
	<label for="event_image">Event/Artist Image:</label>
	<input name="event_image" id="event_image" type="file" class="file">

	<label for="event_date">Event Date:</label>
	<input name="event_date" type="text" class="form-control" id="event_date">

	<label for="event_details">Event/Artist Details:</label>
	<textarea name="event_details" class="form-control" rows="6" id="event_details"></textarea>
	<hr>
	
	<button name="add" type="submit" class="btn btn-primary" value="">Submit</button>
	</form>
	<form method="post" action="">
	<button name="add" type="submit" class="btn btn-danger" value="">Cancel</button>
	</form>
</div>

<div class="bottom">
	
</div>


</body>
</html>