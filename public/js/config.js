

path.config(function($routeProvider){

	$routeProvider

		.when("/perfil",{
			templateUrl: 'partials/perfil.html'
		
		})

		.when("/home",{
			templateUrl: "partials/home.html"
		})	
 		.when("/config", {
 			templateUrl: "partials/config.html"
 		}) 
 		.otherwise({
 			redirectTo: "/"
 		})

});
 