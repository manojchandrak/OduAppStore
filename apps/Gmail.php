<html>
    <head>
        <title>ODU AppStore</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
		

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       
         
        <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.indigo-pink.min.css">
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700"  type="text/css">       
 <link href="css/stylesheet.css" rel="stylesheet" type="text/css"/>
 <script src="js/app.js" type="text/javascript"></script>
 <style>
 .mdl-layout__header{
       background-color:#003366;
     
  }
 </style>
 <script>
 $(document).ready(function(){

 $("#reviewArea").hide();
 $("#reviewButton").click(function(){
 $("#reviewArea").show();});
 });
 </script>
 
 
    </head>
    <body ng-app="materialApp">
        <!-- The drawer is always open in large screens. The header is always shown,
  even in small screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
         <span class="mdl-layout-title">ODU App Store</span>
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
        <label class="mdl-button mdl-js-button mdl-button--icon"
               for="fixed-header-drawer-exp">
          <i class="material-icons">search</i>
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="fixed-header-drawer-exp" ng-model="test" placeholder="Search Store"/>
        </div>
      </div>
	
    </div>
  </header>
  <div class="mdl-layout__drawer">
      <span class="mdl-custom"><img src="../images/oduicon.jpg" style=""></span>
       <span class="mdl-layout-title">All Categories</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Admissions</a>
      <a class="mdl-navigation__link" href="">Research</a>
      <a class="mdl-navigation__link" href="">Academics</a>
      <a class="mdl-navigation__link" href="">Library</a>
      <a class="mdl-navigation__link" href="">ITS</a>
    </nav>
  </div>
  <main class="mdl-layout__content" >
    <div class="page-content" ng-controller="cardControler">
	<h3>Gmail</h3>
<img src="../images/gm.png" style="">
<br><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" >
  Start
</button>
	<hr>
	<h4>Description</h4>
	<hr>
	<p>ODU gmail is the student and faculty mail system </p>
	<h4>Screenshots</h4>
	<hr>
		<div class="reviewDiv"><h4>User Reviews</h4>
		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" id="reviewButton" 
		style="margin-left:40px">
  Write Review
</button>
<div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows= "3" id="reviewArea" ></textarea>

  </div></div>

		<hr>
			<h4>Ratings</h4>
			<hr>
	
	
	
	
	</div>
</main>
</body>
</html>