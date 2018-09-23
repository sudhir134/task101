var MyApp = angular.module("MyApp", []);

 MyApp.filter('range', function(){
    return function(n) {
      var res = [];
      for (var i = 0; i < n; i++) {
        res.push(i);
      }
      return res;
	};
});
 MyApp.controller("AppController", function($scope) {
   
 });

 MyApp.controller("TaskController", function($scope) {
 	//combo box option for mood
    $scope.ansTypes = [
    	{Id:"0",Name:"Select",fieldType:"0",totalFields:"0"},
    	{Id:"multiline",Name:"Multiline Text",fieldType:"textarea",totalFields:"1"},
    	{Id:"single",Name:"Single Choice",fieldType:"text",totalFields:"1"},
    	{Id:"multichoice",Name:"Multiple Choice",fieldType:"text",totalFields:"5"}
    ];

    $scope.Questions = [
    	{Question:"",AnsTypes:$scope.ansTypes,subQuestions:[],Answers:[]}
    ];

    $scope.subQuestions = {Question:"",AnsTypes:$scope.ansTypes}

    $scope.addSubq = function(index){
    	$scope.Questions[index].subQuestions.push($scope.subQuestions);
    }

    $scope.getNumber = function(num) {
	    return new Array(num);   
	}

	$scope.submitTasks = function(){
		console.log($scope.Questions);
	}
 });