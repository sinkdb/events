<!DOCTYPE html>
<html lang="en">

<!-- include libraries(jQuery, bootstrap) -->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 

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
<h2>Edit Event</h2>
<hr>
<!-- BEGIN DETAILS -->
<div class="left">
	<form method="post" action="./events/?action=EditEventDetails"  enctype = "multipart/form-data">
	<label for="event_name">Event Name:</label>
	<input name="event_name" type="text" class="form-control" id="event_name" value="{eventname}"required>
	<br />

	<label for="ticket_information">Ticket Information:</label>
	<textarea name="ticket_information" class="form-control" rows="4" id="ticket_information" required>{ticketinformation}</textarea>
	<script>
    	$(document).ready(function() {
        	$('#ticket_information').summernote({
        		toolbar: [
        			['style', ['bold', 'italic', 'underline', 'clear']],
        			['para', ['ul', 'ol']],
        			['insert', ['link']]
        		],
        		height: 100
        	});
    	});
  	</script>

	<label for="open_time">Doors Open:</label>
	<input name="open_time" type="text" class="form-control" id="open_time" value="{opentime}">
	<label for="start_time">Show Start:</label>
	<input name="start_time" type="text" class="form-control" id="start_time"  value="{starttime}" required>

	<label for="event_restrictions">Restrictions:</label>
	<input name="event_restrictions" type="text" class="form-control" id="event_restrictions" value="{eventrestrictions}">
	<br />
</div>

<div class="right">
	<label for="event_image">Event/Artist Image:</label>
	<input name="event_image" id="event_image" type="file" class="form-control">

	<input hidden name="test_name" id="test_name" value="{imageurl}">

	<label for "current_image">Current Image:</label>
	<img class="img-responsive" src="{imageurl}" height="100" width="250" alt="{imageurl}">

	<label for="event_date">Event Date:</label>
	<input name="event_date" type="date" class="form-control" id="event_date" value="{eventdate}">
	
	<label for="event_details">Event/Artist Details:</label>
	<textarea name="event_details" class="form-control" rows="6" id="summernote">{artistdetails}</textarea>
	<script>
    	$(document).ready(function() {
        	$('#summernote').summernote({
        		toolbar: [
        		['style', ['bold', 'italic', 'underline', 'clear']],
        		['fontsize', ['fontsize']],
        		['para', ['ul', 'ol']],
        		['insert', ['link']]
        		],
        		height: 200
        	});
    	});
  	</script>

	<hr>
	
	<button name="edit" type="submit" class="btn btn-primary" value="{id}">Submit</button>
	</form>
	<form method="" action="./events/?action=ShowAdminHome">
		<button name="cancel" type="submit" class="btn btn-warning" value="">Cancel</button>
	</form>
	<form method="post" action="./events/?action=DeleteEvent">
		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
  			Delete
		</button>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog modal-sm" role="document">
		    <div class="modal-content">
		      <div class="modal-body">
		        Are you sure?
		      </div>
		      <div class="modal-footer">
		      	<button name="delete" type="submit" class="btn btn-danger" value="{id}">Delete Event</button>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
	</form>
</div>
<!-- END DETAILS -->

</body>
</html>