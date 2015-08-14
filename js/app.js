/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var app=angular.module('materialApp',[]);
app.controller('cardController',function($scope){
    $scope.pages=[{name:'Blackboard',image:'images/bb.jpeg'},
            {name:'Lynda',image:'images/ly.jpg'},
                {name:'Smart Thinking',image:'images/smart.jpg'},
                    {name:'Gmail',image:'images/gm.png'},
                        {name:'Degree Works',image:'images/dw.jpg'},
                        {name:'My Advisor',image:'images/advisor.png'},
                          {name:'Monarch Link',image:'images/Monarch.png'},
                            {name:'Money matters',image:'images/money.jpg'}
    
    

    
    ];
}
      
            
        );


$(document).ready(function(){
//  Check Radio-box
    $(".rating input:radio").attr("checked", false);
    $('.rating input').click(function () {
        $(".rating span").removeClass('checked');
        $(this).parent().addClass('checked');
    });

    $('input:radio').change(
    function(){
        var userRating = this.value;
        alert(userRating);
    }); 
});
