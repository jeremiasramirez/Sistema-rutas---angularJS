var path = angular.module("rout", ["ngRoute"]);


path.config(($routeProvider)=>{

	$routeProvider.when("home/",{
			templateUrl: "partials/home.html"
		})	

		.when("perfil/",{
			templateUrl: "partials/perfil.html"
		
		})
 

})