'use strict';

angular.module('customers', ['ngTable']);

//Routers
myApp.config(function($stateProvider) {
  
  //Search Customers
  $stateProvider.state('customers', {
	url: '/customers',
    templateUrl: 'partials/customers/customers.html',
	data:{
		auth:true
	}
  });
  
  //Add Customer
  $stateProvider.state('addCustomer', {
	url: '/addCustomer',
    templateUrl: 'partials/customers/addCustomer.html',
	data:{
		auth:true
	}
  });
  
  //Customer Tab
  $stateProvider.state('customer', {
    url: '',
	abstract:true,
    templateUrl: 'partials/customers/customerTab.html',
	data:{
		auth:true
	}
  });

  //View customer
  $stateProvider.state('customerview', {
    url: '/customerview',
    templateUrl: 'partials/customers/customers.html',
	data:{
		auth:true
	}
  });

  //Edit customer
  $stateProvider.state('customer.edit', {
    url: "/edit/{id}",
    views: {
      "editCustomer": {
        templateUrl: "partials/customers/editCustomer.html",
        controller: 'editCustomerController'
      }
    },
    resolve: {
      customerResolved: function(customerServices, $stateParams) {
      	console.log($stateParams.id);
        return $stateParams.id;
      }
    },
	data:{
		auth:true
	}
  });  
    
});

//Factories
myApp.factory('customerServices', ['$http', function($http) {

    var factoryDefinitions = {
	  getCustomers: function() {
        return $http.get('http://localhost:3030/send').success(function(data) { 
        	return data.data; });
      },
	  addCustomer: function(customerReq) {
		$.ajax({
	  		url:'http://localhost:3030/insert',
	  		type:'post',
	  		datatype:'json',
	  		data: {'data': customerReq}
	  	})        
	  	// return $http.post('partials/common/mock/success.json', customerReq).success(function(data) { return data; });
      },
	  editCustomer: function($scope,customerId) {
        return $.ajax({
	  		url:'http://localhost:3030/select',
	  		type:'post',
	  		datatype:'json',
	  		data: {'data': customerId}
	  	})
	  	.done(function(data){
	  		var result=data.data[0];
	  		$scope.customer=result;
	  		return result;
	  	})
      },
	  updateCustomer: function(customerReq) {
	  	$.ajax({
	  		url:'http://localhost:3030/update',
	  		type:'post',
	  		datatype:'json',
	  		data: {'data': customerReq}
	  	})
        // return $http.get('http://localhost:3030/update', customerReq).success(function(data) { return data; });
      },
      deleteCustomer: function(customerId) {
	  	$.ajax({
	  		url:'http://localhost:3030/delete',
	  		type:'post',
	  		datatype:'json',
	  		data: {'data': customerId}
	  	})
      },
	}
	
    return factoryDefinitions;
  }
]);

//Controllers
myApp.controller('getCustomersController', ['$scope', 'customerServices', 'dataTable', '$location', function($scope, customerServices, dataTable, $location) {
	customerServices.getCustomers().then(function(result){
		$scope.data = result.data.data;
		if (!result.data.error) {			
			dataTable.render($scope, '', "customerstList", result.data.data);
		}	
	});
	$scope.delete=function(id){
		customerServices.deleteCustomer(id);
		$location.path("/customers");

	}
}]);

myApp.controller('addCustomerController', ['$scope', 'customerServices', '$location', function($scope, customerServices, $location) {
	$scope.addCustomer = function() {
		if ($scope.addCustomerForm.$valid) {	
			customerServices.addCustomer($scope.customer);
			$location.path("/customers");
		}
	}
	
	$scope.cancel = function() {
		$location.path("/customers");
	}
}]);

myApp.controller('viewCustomerController', ['$scope', 'customerResolved', 'customerServices', '$location', function($scope, customerResolved, customerServices, $location) {
	// var id=customerResolved;
	// var data=customerServices.editCustomer($scope,id);
	var cancel = function() {
		$location.path("/customers");
  	}
}]);

myApp.controller('editCustomerController', ['$scope', 'customerResolved', 'customerServices', '$location', '$state', function($scope, customerResolved, customerServices, $location, $state) {
  var id=customerResolved;
  var data=customerServices.editCustomer($scope,id);
  $scope.updateCustomer = function() {
    if ($scope.editCustomerForm.$valid) {	     
	 customerServices.updateCustomer($scope.customer);
	 $location.path("/customers");
	 // .then(function(result){
		// $scope.data = result.data.data;
		// if (!result.data.error) {
		//    $state.transitionTo('customer.view', {
		// 		id: $state.params.id
		// 	});
		// }
	 // });			
    }
  };
  
  $scope.cancel = function() {
		$location.path("/customers");
  }
}]);


// myApp.directive("datepicker", function () {
//   return {
//     restrict: "A",
//     require: "ngModel",
//     link: function (scope, elem, attrs, ngModelCtrl) {
//       var updateModel = function (dateText) {
//         scope.$apply(function () {
//           ngModelCtrl.$setViewValue(dateText);
//         });
//       };
//       var options = {
//         dateFormat: "dd/mm/yy",
//         onSelect: function (dateText) {
//           updateModel(dateText);
//         }
//       };
//       elem.datepicker(options);
//     }
//   }
// });