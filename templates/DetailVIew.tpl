<html>
<head>
	<style>
		div.event 
		{
		    background-color:white;
		    margin:20px;
		    width:800px;
		} 
		div.image
		{
			float:right;
			width:50%;
			height: auto;
		}
		div.details
		{
			float:left;
			width:50%;
			height: auto;

		}
		div.description
		{
			clear: both;
			word-wrap: break-word;
		}
	</style>
</head>
<body>

<!-- BEGIN DETAILS -->
<div class="event" >
	<div class="details">
		<h2>{eventname}</h2>
		<hr>

		<ul>
			<li>Date: {eventdate}</li>
			<li>Doors Open: {opentime} <br />
				Show Start: {starttime}</li>
			<li>Tickets: {ticketinformation}</li>
		</ul>
		
	</div>
	<div class="image">
		<img class="img-responsive" src="{imageurl}" alt="{imageurl}">
	</div>
	<br />
	<hr>
	<div class="description">
		<hr>
		{artistdetails}
		<hr>
		<form method="" action="./events/?action=ShowAdminHome">
		<button name="details" type="submit" class="btn btn-primary btn-md">Back to Events</button>
		</form>
	</div>
</div>
<!-- END DETAILS -->
</body>
</html>