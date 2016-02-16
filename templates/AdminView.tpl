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
			margin-right:20px;
		}
	</style>
</head>
<body>
<h2>Upcoming Events</h2>
<!-- BEGIN EVENTS -->
		<div class="events">
			<div class="image">
			</div>
			<div class="info">
				<h3>{eventname}</h3>
				<ul>
					<li>Show Start: {starttime} </li>
						Doors Open: {opentime}
					<li>Ticket Price: ${ticketprices} </li>
				</ul>
				{eventrestrictions}
			</div>
			<div class="button">
				<button type="submit" class="btn btn-primary">Details</button>
				<button type="submit" class="btn btn-danger">Edit</button>
			</div>
		</div>
<!-- END EVENTS -->
</body>
</html>