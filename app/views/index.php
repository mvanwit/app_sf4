<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel and Angular SF4 App</title>

	<!-- CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
	<style>
		body 		{ padding-top:30px; }
		form 		{ padding-bottom:20px; }
		.match 	{ padding-bottom:20px; }
	</style>

</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="sf4MatchApp" ng-controller="mainController">
<div class="col-md-8 col-md-offset-2">

	<!-- PAGE TITLE =============================================== -->
	<div class="page-header">
		<h2>Laravel and Angular Single Page Application</h2>
		<h4>Match History</h4>
	</div>

	<!-- NEW MATCH FORM =============================================== -->
	<form ng-submit="submitMatch()"> <!-- ng-submit will disable the default form action and use our function -->

		<!-- MY CHARACTER -->
		<div class="form-group">
			<select ng-options="char for char in ['juri', 'akuma', 'ibuki', 'bison', 'chun-li', 'guile']" ng-model="matchData.my_char">
				<option value="" selected>--Please select a character--</option>
			</select>
		</div>

		<!-- OPPONENT CHARACTER -->
		<div class="form-group">
			<select ng-options="char for char in ['juri', 'akuma', 'ibuki', 'bison', 'chun-li', 'guile']" ng-model="matchData.op_char">
				<option value="" selected>--Please select a character--</option>
			</select>
		</div>
		
		<!-- RESULT -->
		<select ng-options="result for result in ['win', 'loss', 'draw']" ng-model="matchData.result">
				<option value="" selected>--Please select a result--</option>
			</select>

		<!-- SUBMIT BUTTON -->
		<div class="form-group text-right">	
			<button type="submit" class="btn btn-primary btn-lg">Submit</button>
		</div>
	</form>

	<!-- LOADING ICON =============================================== -->
	<!-- show loading icon if the loading variable is set to true -->
	<p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

	<!-- THE MATCHES =============================================== -->
	<!-- hide these matches if the loading variable is true -->
	<div class="match"  ng-repeat="match in matches">
		<h3>Match #{{ match.id }}</h3>
		<p>{{ match.my_char }} VS. {{ match.op_char }} | {{ match.result }}</p>

		<p><a href="#" ng-click="deleteMatch(match.id)" class="text-muted">Delete</a></p>
	</div>

</div>

<!-- JS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.js"></script> <!-- load angular -->
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular-route.js"></script> <!-- load angular-route -->

	<!-- ANGULAR -->
	<!-- all angular resources will be loaded from the /public folder -->
		<script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
		<script src="js/services/matchService.js"></script> <!-- load our service -->
		<script src="js/app.js"></script> <!-- load our application -->
</body>
</html>