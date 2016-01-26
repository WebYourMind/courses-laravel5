angular.module('myApp', [])
	.controller('myController', ['$scope', function($scope){
		$scope.controllerValue = "Controller value";
	}])
	.directive('myCustomDirective', function(){
		return {
			link: function(scope, elem, attrs){
				elem.text('New Directive Value');
			}
		}
	});