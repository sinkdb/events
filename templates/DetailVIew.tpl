<html>
<head>
	<style>
		div.event 
		{
		    background-color:white;
		    /*border-style:solid;
		    border-color:black;
		    border-width:1px;*/
		    margin:20px;
		    width:800px;
		    /*height:165px;*/
			
		} 
		div.image
		{
			float:right;
			/*width:380px;*/
			width:50%;
			/*background-color:black;*/
			height:260px;
			/*margin-left: 5px;*/
		}
		div.details
		{
			float:left;
			width:50%;
			height:260px;

		}
		div.description
		{
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
		Date: {eventdate}
		<br />
		<span class="glyphicon glyphicon-map-marker"></span> {eventlocation}
		<br />
		<span class="glyphicon glyphicon-time"></span>
		Doors: {opentime}
		<br />
		Show: {starttime}
		<br />
		<!--<i class="fa fa-ticket"></i>-->Tickets: {ticketinformation}
		
	</div>
	<div class="image">
		<img class="img-responsive" src="{imageurl}" alt="{imageurl}">
	</div>
	<br />
	<hr>
	<div class="video">
	</div>
	<div class="description">
		{artistdetails}
	</div>
</div>

<!-- END DETAILS -->
</body>
</html>