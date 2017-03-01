<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script src="/public/js/angular.min.js"></script>
</head>
<body ng-app="app">
<!-- <p>This is view view.</p>
<p>Test My AngularJS</p>
<div ng-app="fashion">
     <p>名字 : <input type="text" ng-model="name"></p>
     <h1>Hello {{name}}</h1>
     <h4>我的第一个表达式：{{ 5+5 }}</h4>
</div> -->

<div>
<hello></hello>
</div>

<script>
var app = angular.module("app", []);
app.directive("hello", function(){
	return {
		// restrict: 'A',
		template : "Hello World!",
		// replace : true
	};
});

</script>

</body>
</html>
