<!DOCTYPE html>
<html lang="es" ng-app="rout">
<head>
	<meta charset="UTF-8">
	<title>System of routes</title>
	<script src="node_modules/angular/angular.min.js"></script>
	<script src="public/js/lib/angular.routes.js"></script>
	<script src="public/js/main.js"></script>
</head>
<body>

<div>
	<ul>
		<li><a href="#!/home">Home</a></li>
		<li><a href="#!/perfil">Perfil</a></li>
	</ul>
</div>


<div ng-view>
	
</div>



	
</body>
</html>