<html>
<head>
	<style>
		div.events 
		{
		    background-color:white;
		    border-style:solid;
		    border-color:black;
		    border-width:1px;
		    margin:20px;
		    width:100%;
			height:165px;
		} 
		div.image
		{
			background-color:black;
			float:left;
			width:50%;
			height:120px;
			margin-top: 20px;
    		margin-bottom: 20px;
    		margin-right: 40px;
    		margin-left: 20px;
		}
		div.info
		{
			float:right;
			width:40%;
			height:120px;
		}
		div.button
		{
			float:right;
			display:inline;
			vertical-align: middle;
			margin-right:20px;
		}
		form
		{
			display:inline;
		}
	</style>
</head>
<body>
<h2>Upcoming Events</h2>
<form method="post" action="./events/?action=ShowAddEvent">
<button name="test" type="submit" class="btn btn-primary" value="{id}">Add Event</button>
</form>
<!-- BEGIN EVENTS -->
		<div class="events">
			<div class="image">
			</div>
			<div class="info">
				<h3>{eventname}</h3>
				<ul>
					<li>Show Start: {starttime} </li>
						Doors Open: {opentime}
					<li>Ticket Price: {ticketprices} </li>
				</ul>
				{eventrestrictions}
			</div>
			<div class="button">
				<form method="post" action="./events/?action=ShowEventDetails">
				<button name="test" type="submit" class="btn btn-primary" value="{id}">Details</button>
				</form>
				<form method="post" action="./events/?action=EditEventDetails">
				<button name="test" type="submit" class="btn btn-danger" value="{id}">Edit</button>
				</form>
			</div>
		</div>
<!-- END EVENTS -->
</body>
</html>