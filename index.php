<!DOCTYPE html>
<html>
	<head>
		<title>Calculator</title>
		<link rel="stylesheet" href="style.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script src="java.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	</head>
<body>
<div id="total"><h1>Hi</h1></div>
		<div id="calculator" >
			<div id="numbers">
					<a class="btn btn-outline-danger">1</a>
					<a class="btn btn-outline-primary">2</a>
					<a class="btn btn-outline-danger">3</a>
					<a class="btn btn-outline-primary">4</a>
					<a class="btn btn-outline-danger">5</a>
					<a class="btn btn-outline-primary">6</a>
					<a class="btn btn-outline-danger">7</a>
					<a class="btn btn-outline-primary">8</a>
					<a class="btn btn-outline-danger">9</a>
					<a class="btn btn-dark" id="clear">C</a>
					<a class="btn btn-danger">0</a>
					<a class="btn btn-dark" id="clearall">AC</a>
			</div>
			<div id="operators">
					<a class="btn btn-warning">-</a>
					<a class="btn btn-success" id="equals">=</a>
					<a class="btn btn-warning">/</a>
					<a class="btn btn-warning">*</a>
					<a class="btn btn-secondary" id="delete">&#8592;</a>
					<a class="btn btn-warning">+</a>
			</div>
		</div>
</body>
</html>