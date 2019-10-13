<!DOCTYPE html>
<html lang="es" ng-app="rout">
<head>

	<!-- set all character  -->
	<meta charset="UTF-8">

	<!-- title of page -->
	<title>System of routes</title>

	<!-- viewport mobile -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<!-- library angularJS -->
	<script src="node_modules/angular/angular.min.js"></script>

	<!-- library angularJS > routes -->
	<script src="public/js/lib/angular.routes.js"></script>

	<!-- main js -->
	<script src="public/js/main.js"></script>

	<!-- config angularJS -->
	<script src="public/js/config.js"></script>



</head>


<body>


<!-- menu of navigation -->
	<div>
		<ul>

			
			<!-- redirect to public/js/config.js -->
			<li><a href="#!/home">Home</a></li>
			<li><a href="#!/perfil">Perfil</a></li>
			<li><a href="#!/config">Config</a></li>


		</ul>
	</div>



<!-- view of page navigation (routes) -->
	<div ng-view>
		
	</div>



	
</body>
</html>