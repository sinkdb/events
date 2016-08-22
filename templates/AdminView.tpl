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
			/*clear:both;*/
			/*height: auto;*/
			/*height: 1%;*/
			
			/*display: table;*/
		} 
		div.events:after
		{
			/*display: table;
			clear : both;*/
		}
		div.image
		{
			/*background-color:black;*/
			float:left;
			width:40%;
			/*max-height:120px;*/
			/*min-height: 100px;*/
			height:100%;
			margin-top: 20px;
    		margin-bottom: 20px;
    		margin-right: 40px;
    		margin-left: 20px;
    		overflow: hidden;
		}
		div.info
		{
			float:left;
			width:40%;
			/*height:auto;*/
			height:100%;
			margin-bottom:10px;
			/*height:120px;*/
		}
		div.button
		{
			width:20%;
			float:left;
			height:100%;
			/*display:inline;*/
			/*vertical-align: middle;*/
			margin:10px;
			/*padding: 10px 24px*/
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
<form method="post" action="./events/?action=ShowAddEvent">
<button name="test" type="submit" class="btn btn-primary" value="{id}">Add Event</button>
</form>
<!-- BEGIN EVENTS -->
		<div class="events" style="height: auto;">
			<div class="image">
				<img class="img-responsive" src="{imageurl}" height="100" width="250" alt="{imageurl}">
			</div>
			<div class="info">
				<h3>{eventname}</h3>
				<ul>
					<li>Show Start: {starttime} </li>
						Doors Open: {opentime}
					<li>{ticketprices} </li>
				</ul>
				{eventrestrictions}
				
				
			</div>
			<div class="button">
				<form method="post" action="./events/?action=ShowEventDetails">
				<button name="details" type="submit" class="btn btn-primary btn-block" value="{id}">Details</button>
				</form>
				<form method="post" action="./events/?action=ShowEditEvent">
				<button name="edit" type="submit" class="btn btn-danger btn-block" value="{id}">Edit</button>
				</form>
			</div>
		</div>
<!-- END EVENTS -->
</body>
</html>