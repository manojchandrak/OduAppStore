/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var app=angular.module('materialApp',[]);

app.controller('cardController',function($scope,$http){
     $http.get('js/libs/appdata.json').success(function(data){
         $scope.pages=data;
     });

}
      
            
        );


