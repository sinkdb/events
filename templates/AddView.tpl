<!DOCTYPE html>
<html lang="en">

<!-- include libraries(jQuery, bootstrap) -->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

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
<h2>Add Event</h2>
<hr>
<div class="left">
	<form method="post" action="./events/?action=AddEvent" enctype="multipart/form-data">
		
	<label for="event_name">Event Name:</label>
	<input name="event_name" type="text" class="form-control" id="event_name">

	<label for="event_location">Event Location:</label>
	<input name="event_location" type="text" class="form-control" id="event_location" required>
	<br />

	<label>Tickets</label>
	<br />
	<label for="ticket_price">Prices:</label>
	<textarea name="ticket_prices" class="form-control" rows="3" id="ticket_prices" required></textarea>
	<script>
    	$(document).ready(function() {
        	$('#ticket_prices').summernote({
        		toolbar: [
        		['style', ['bold', 'italic', 'underline', 'clear']],
        		['fontsize', ['fontsize']],
        		['fontname', ['fontname']],
        		['para', ['ul', 'ol']],
        		['insert', ['link']]
        		],
        		height: 50
        	});
    	});
  	</script>

	<label for="ticket_location">Where to Buy:</label>
	<textarea name="ticket_location" class="form-control" rows="4" id="ticket_location" required></textarea>
	<script>
    	$(document).ready(function() {
        	$('#ticket_location').summernote({
        		toolbar: [
        		['style', ['bold', 'italic', 'underline', 'clear']],
        		['fontsize', ['fontsize']],
        		['fontname', ['fontname']],
        		['para', ['ul', 'ol']],
        		['insert', ['link']]
        		],
        		height: 50
        	});
    	});
  	</script>

	<label>Times</label>
	<br />
	<label for="open_time">Doors Open:</label>
	<input name="open_time" type="text" class="form-control" id="open_time">
	<label for="start_time">Show Start:</label>
	<input name="start_time" type="text" class="form-control" id="start_time" required>

	<label for="event_restrictions">Restrictions:</label>
	<input name="event_restrictions" type="text" class="form-control" id="event_restrictions">
	<br />
</div>

<div class="right">
	<label for="event_image">Event/Artist Image:</label>
	<input name="event_image" id="event_image" type="file" class="form-control">

	<label for="event_date">Event Date:</label>
	<input name="event_date" type="date" class="form-control" id="event_date">

	<label for="event_details">Event/Artist Details:</label>
	<textarea name="event_details" class="form-control" rows="6" id="summernote"></textarea>
	<script>
    	$(document).ready(function() {
        	$('#summernote').summernote({
        		toolbar: [
        		['style', ['bold', 'italic', 'underline', 'clear']],
        		['fontsize', ['fontsize']],
        		['fontname', ['fontname']],
        		['para', ['ul', 'ol']],
        		['insert', ['link']]
        		],
        		height: 200
        	});
    	});
  	</script>
  	
	<hr>
	
	<button name="add" type="submit" class="btn btn-primary" value="">Submit</button>
	</form>
	<form method="" action="./events/?action=ShowAdminHome">
	<button name="cancel" type="submit" class="btn btn-danger" value="">Cancel</button>
	</form>
</div>

</body>
</html>