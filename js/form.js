(function(){
	var app = angular.module('form', []);

	app.controller(FormCtrl, ['http', 'scope' , function($http, $scope) {
	    
	    $scope.addEmail = function() {
	      
	      $http.post('controller.php', {'email': $scope.email})
	     
		}

	}]);

})();