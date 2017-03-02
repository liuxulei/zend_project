<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<!-- <script src="/public/js/angular.min.js"></script> -->
</head>
<body ng-app="app">
<!-- <p>This is view view.</p> -->
<p>Test My AngularJS</p>
<div ng-app="fashion">
     <p>名字 : <input type="text" ng-model="name"></p>
     <h1>Hello {{name}}</h1>
     <h4>我的第一个表达式：{{ 5+5 }}</h4>
</div>

<div>
<hello></hello>
</div>

<script>
'use strict';

var height = parseFloat(prompt('请输入身高(m):'));
var weight = parseFloat(prompt('请输入体重(kg):'));

var bmi = weight/Math.pow(height, 2);
if(bmi <18.5){
  alert('过轻');
}else if(bmi < 25){
  alert('正常');
}else if(bmi<28){
  alert('过重');
}else if(bmi<32){
  alert('肥胖');
}else{
  alert('严重肥胖');
}


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
