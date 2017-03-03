<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script src="/public/js/angular.min.js"></script>
</head>
<body>
<p>Test My AngularJS</p>
<div ng-app="fashion" ng-controller="controller">
	<p>身高(m)：<input type="text" ng-model="height"></p>
	<p>体重(kg)：<input type="text" ng-model="weight"></p>
	<!-- 
	<h1>Hello {{name}}</h1>
	<h4>你的身高是：{{height}}<br/>
	你的体重是：{{weight}}<br/>
	 -->
	<button ng-click="toggle()">计算</button><br/>
	你的bmi是：{{bmi}}，属于{{type}}</h4>
</div>

<div>
<hello></hello>
</div>

<script>
'use strict';

var app = angular.module("fashion", []);
app.controller('controller', function($scope){
	$scope.name = '刘旭雷';
	$scope.height = '1.75';
	$scope.weight = '76';
	$scope.bmi = 24.82;
	$scope.type = '正常';

	$scope.toggle = function(){
		$scope.bmi = $scope.weight/Math.pow($scope.height, 2);
		$scope.bmi = $scope.bmi.toFixed(2);
		var bmi = $scope.bmi;

		var type = '';
		if(bmi <18.5){
		  type = '过轻';
		}else if(bmi < 25){
		  type = '正常';
		}else if(bmi<28){
		  type = '过重';
		}else if(bmi<32){
		  type = '肥胖';
		}else{
		  type = '严重肥胖';
		}
		$scope.type = type;
	};
});

</script>

</body>
</html>
