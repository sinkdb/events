<html>
<head>
	<style>
		div.events 
		{
			overflow: hidden;
		    background-color:white;
		    border-style:solid;
		    border-color:black;
		    border-width:1px;
		    margin:20px;
		    width:800px;
			min-height:165px;
			display: flex;
		} 
		div.image
		{
			float:left;
			width:40%;
			height:100%;
			margin-top: 20px;
    		margin-bottom: 20px;
    		margin-right: 40px;
    		margin-left: 20px;
    		overflow: hidden;
    		position: relative;   		
		}
		div.event-date
		{
			position: absolute;
			bottom: 0;
			left: 0;
			color:white;
			width:100%;
			font-size: 200%;
			background-image: linear-gradient(to bottom,rgba(22,24,23,0),#161817);
			text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
		}
		div.info
		{
			float:left;
			width:40%;
			height:100%;
			margin-bottom:10px;
		}
		div.button
		{
			width:20%;
			float:left;
			height:100%;
			margin:10px;
		}
		form
		{
			display:inline;
			margin:1px;
		}
	</style>
</head>
<body>
<h2>Upcoming Events</h2>
<!-- BEGIN EMPTY -->
<h3>{noevent}</h3>
<!-- END EMPTY -->
<!-- BEGIN EVENTS -->
		<div class="events" style="height: auto; width: auto;">
			<div class="image">
				<img class="img-responsive" src="{imageurl}" alt="{imageurl}">
				<div class="event-date">
					{eventdate}
				</div>
			</div>
			<div class="info">
				<h3>{eventname}</h3>
				<ul>
					<li>Doors Open: {opentime}</li>
						Show Start: {starttime}

					<li>{ticketinformation} </li>
				</ul>
				{eventrestrictions}
			</div>
			<div class="button">
				<form method="post" action="./events/?action=ShowEventDetails">
				<button name="details" type="submit" class="btn btn-primary btn-block" value="{id}">Details</button>
				</form>
			</div>
		</div>
<!-- END EVENTS -->

</body>
</html>