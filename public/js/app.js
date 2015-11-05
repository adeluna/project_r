
var main = angular.module("main",['ngAnimate']);
/*register_app.config(function($interpolateProvider) {
	$interpolateProvider.startSymbol('%%');
	$interpolateProvider.endSymbol('%%');
});*/

main.directive('a',function(){
	return {
		restrict: 'E',
		link: function(scope, elem, attrs){
			if(attrs.ngClick || attrs.href === '' || attrs.href === '#'){
				elem.on('click', function(e){
					e.preventDefault();
				});
			}
		}
	};
});