var app = angular.module('myApp', []);

app.factory('appFactory', ['$http', function($http){
    return{
        recupData: function(url){
        return $http.get(url);
    }
    }
}]);

app.controller('appCTRL',['$scope', 'appFactory', function appCtrl($scope, appFactory){
    
    appFactory.recupData('competition.json').success(function(data){

    $scope.competition = data;

  });
    
}])

app.directive('groupsList', function(){
    return {
        templateUrl: "list.html"
    }
    
})
