<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Weather Prediction</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/weather.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->	
  </head>
  <body>
	<div class="container text-center">
	    <div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1 class='white'>Weather Prediction</h1>
				<p class='lead white'>Enter the name of the city to get an info about the weather.</p>
				<form role="form">
					<div class="form-group">
						<input class="form-control" type="text" name="city" id="city" placeholder="e.g. Barcelona, London, Marseille..."/>
					</div>
					<button class="btn btn-success btn-lg" id="show">Show me the weather!</button>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="alert alert-success" id="success"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="alert alert-danger" id="fail">I couldn't get the forecast for this city. Try to write the name differently.</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="alert alert-danger" id="empty">Enter the name of the city!</div>
			</div>
		</div>
	</div>
	
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
		$('.alert').hide();
		$('#show').click(function(event) {
			event.preventDefault();
			$('.alert').hide();
			if ($('#city').val()!="") {
				$.get('weather.php?city='+$('#city').val(), function(data) {
					if (data=="") {
						
						$('#fail').fadeIn();
					} else {
						
						$('#success').html(data).fadeIn();
					}
					
				});
			} else {
				
				$('#empty').fadeIn();
			}
		});
	</script>
  </body>
</html>