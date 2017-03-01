<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script src="/public/js/angular.min.js"></script>
</head>
<body>
<div ng-app="app" ng-controller="controller">
名：<input type="text" ng-model="first_name" />
姓：<input type="text" ng-model="last_name" />
姓名：{{first_name +" "+ last_name}}
</div>


<script>
var app = angular.module("app", []);
app.controller('controller', function($scope){
	$scope.first_name = "XULEI";
	$scope.last_name = "LIU";
});
</script>

</body>
</html>
