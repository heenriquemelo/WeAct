(function(){
	app = angular.module('form', []);
	
	// Controller para salvar em JSON os dados do formulário 

	app.controller('FormCtrl', function($scope, $http) {

	    $scope.addEmail = function() {
	      
	      $http.post('controller.php', {'email': $scope.email, 'date': Date()})
	      .success(function(data,status,header,config) {
	      	console.log(status);
	      })
	      .error(function(data,status,header,config) {
	      	console.log(status);
	      })
	     
		}

	});

	// Controller para recuperar dados JSON com HTTP get

	/* app.controller('TestCtrl', function($scope, $http) {
		
		$scope.getEmails = function() {
	    	$http.get('emails.json')
	    	.success(function(data,status,header,config) {
	    		//$scope.users = data;
	    		console.log(data);
	    		console.log(status);
	    	})
	    	.error(function(data,status,header,config) {
	    		console.log(data);
	    		console.log(status);
	    	})
	    }

	}); */

})();