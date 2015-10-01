<?php

session_start();

include_once 'dbconnect.php';

if (!empty($_SESSION['varname'])) {
    $rate_bg = $_SESSION['varname'];
}
else{
	 $rate_bg=0;
}
if (!empty($_SESSION['varname2'])) {
    $rate_times = $_SESSION['varname2'];
}
else{
	 $rate_times=0;
}





if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
 <div id="left">
    <label>Old Dominion App Store</label>
    </div>
    <div id="right">
     <div id="content">
         Welcome, <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
    </div>
</div>
</body>
</html>-->
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>ODU AppStore</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script src="jRate.min.js"></script>
       
         
        <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.indigo-pink.min.css">
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700"  type="text/css">       
 <link href="css/stylesheet.css" rel="stylesheet" type="text/css"/>
  <link href="css/stars.css" rel="stylesheet" type="text/css"/>
 <script src="js/app.js" type="text/javascript"></script>
 <script>
 $(document).ready({
	$(.mdl-button mdl-js-button mdl-js-ripple-effect).click({
		(.mdl-card mdl-shadow--2dp demo-card-square.ng-scope).hide();
		
	}) 
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
      <span class="mdl-custom"><img src="images/oduicon.jpg" style=""></span>
       <span class="mdl-layout-title">All Categories</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Admissions</a>
      <a class="mdl-navigation__link" href="">Research</a>
      <a class="mdl-navigation__link" href="">Academics</a>
      <a class="mdl-navigation__link" href="">Library</a>
      <a class="mdl-navigation__link" href="">ITS</a>
    </nav>
  </div>
  <main class="mdl-layout__content" ng-controller="cardController">
    <div class="page-content"><!-- Your content goes here -->
	

        <!--<div class="signIn_wrapper">
           
            <a class="mdl-button mdl-js-button mdl-button--raised" href="index.php">
Sign In
</a>
            </div>-->



			<div id="right">
     <div id="content" style="text-align:center">
        <h5> Welcome, <?php echo $userRow['username']; ?></h5>&nbsp; &nbsp;&nbsp;<a class="mdl-button mdl-js-button" href="logout.php?logout" style="float:right">Sign Out</a>
        </div>
    </div>
			
        <h4 style="margin-left: 20px;">All Apps
        <button class="mdl-button mdl-js-button mdl-js-ripple-effect" style="float: right;clear: both">
  See More
        </button></h4>
       
       <hr>
        <div class="mdl-card mdl-shadow--2dp demo-card-square"  ng-repeat ="page in pages | filter:test" style="float: left;margin: 1em;padding: 15px;
    width: 220px;
    height: 300px;">
  <div class="mdl-card__title mdl-card--expand">
          <img src="{{page.image}}" style="width: 330px;height: 150px"/>
    

  </div>
   
  <div class="mdl-card__supporting-text" ng-if="page.name=='Blackboard'">
          <h2 class="mdl-card__title-text" >{{page.name}}</h2>
		  <div class="rate-result-cnt">
                <div class="rate-bg" style="width:<?php
				echo $rate_bg?>%"> </div>
                <div class="rate-stars"></div>
					<div style="margin-left:90px">(<?php echo $rate_times; ?>)</div>	
            </div>
		
		
 {{page.text}} 

  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="\OduAppStore\apps\Blackboard.php">
      Details
    </a>
	

  </div>
 

</div>
        
     <div class="mdl-card__supporting-text" ng-if="page.name=='Lynda'">
          <h2 class="mdl-card__title-text" >{{page.name}}</h2>
           <div class="rate-result-cnt">
                <div class="rate-bg" style="width:<?php
        echo $rate_bg?>%"> </div>
                <div class="rate-stars"></div>
          <div style="margin-left:90px">(<?php echo $rate_times; ?>)</div>  
            </div>
 {{page.text}} 

  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="\OduAppStore\apps\Lynda.php">
      Details
    </a>
  </div>
</div>
     <div class="mdl-card__supporting-text" ng-if="page.name=='Smart Thinking'">
          <h2 class="mdl-card__title-text" >{{page.name}}</h2>
 {{page.text}} 

  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="\OduAppStore\apps\SmartThinking.php">
      Details
    </a>
  </div>
</div>




         <div class="mdl-card__supporting-text" ng-if="page.name=='Gmail'">
              <h2 class="mdl-card__title-text" >{{page.name}}</h2>
  {{page.text}} 

  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="\OduAppStore\apps\Gmail.php">
      Details
    </a>
  </div>
</div>
         <div class="mdl-card__supporting-text" ng-if="page.name=='Degree Works'">
              <h2 class="mdl-card__title-text" >{{page.name}}</h2>
  {{page.text}} 

  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="\OduAppStore\apps\DegreeWorks.php">
      Details
    </a>
  </div>
</div>
           <div class="mdl-card__supporting-text" ng-if="page.name=='My Advisor'">
          <h2 class="mdl-card__title-text" >{{page.name}}</h2>
 {{page.text}} 

  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="\OduAppStore\apps\MyAdvisor.php">
      Details
    </a>
  </div>
 

</div>  
                     <div class="mdl-card__supporting-text" ng-if="page.name=='Monarch Link'">
          <h2 class="mdl-card__title-text" >{{page.name}}</h2>
 {{page.text}} 

  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="\OduAppStore\apps\MonarchLink.php">
      Details
    </a>
  </div>
 

</div>  
                         <div class="mdl-card__supporting-text" ng-if="page.name=='Money matters'">
          <h2 class="mdl-card__title-text" >{{page.name}}</h2>
 {{page.text}} 

  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="\OduAppStore\apps\MoneyMatters.php">
      Details
    </a>
  </div>
 

</div>

    <div class="mdl-card__supporting-text" ng-if="page.name=='Box'">
          <h2 class="mdl-card__title-text" >{{page.name}}</h2>
 {{page.text}} 

  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="\OduAppStore\apps\SmartThinking.php">
      Details
    </a>
  </div>
</div>

    <div class="mdl-card__supporting-text" ng-if="page.name=='ODU Mobile'">
          <h2 class="mdl-card__title-text" >{{page.name}}</h2>
 {{page.text}} 

  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="\OduAppStore\apps\SmartThinking.php">
      Details
    </a>
  </div>
</div>

    <div class="mdl-card__supporting-text" ng-if="page.name=='Papers'">
          <h2 class="mdl-card__title-text" >{{page.name}}</h2>
 {{page.text}} 

  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="\OduAppStore\apps\SmartThinking.php">
      Details
    </a>
  </div>
</div>



            
        </div>
       <h4 style="clear: both;margin-left: 20px;">Most Popular  <button class="mdl-button mdl-js-button mdl-js-ripple-effect" style="float: right;clear: both">
  See More
        </button></h4>
       
       <hr>
        <div class="mdl-card mdl-shadow--2dp demo-card-square"  ng-repeat ="page in pages | filter:test" style="float: left;margin: 1em;padding: 15px;
   width: 220px;
    height: 300px;">
  <div class="mdl-card__title mdl-card--expand">
          <img src="{{page.image}}" style="width: 330px;height: 150px"/>
    

  </div>
   
  <div class="mdl-card__supporting-text" ng-if="page.name=='Blackboard'">
          <h2 class="mdl-card__title-text" >{{page.name}}</h2>
 {{page.text}} 

  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-js-ripple-effect">
      Details
    </a>
  </div>
</div>
        
     <div class="mdl-card__supporting-text" ng-if="page.name=='Lynda'">
          <h2 class="mdl-card__title-text" >{{page.name}}</h2>
 {{page.text}} 
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-js-ripple-effect">
      Details
    </a>
  </div>
</div>
     <div class="mdl-card__supporting-text" ng-if="page.name=='Smart Thinking'">
          <h2 class="mdl-card__title-text" >{{page.name}}</h2>
 {{page.text}} 

  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-js-ripple-effect">
      Details
    </a>
  </div>
</div>
         <div class="mdl-card__supporting-text" ng-if="page.name=='Gmail'">
              <h2 class="mdl-card__title-text" >{{page.name}}</h2>
 {{page.text}} 

  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-js-ripple-effect">
      Details
    </a>
  </div>
</div>
         <div class="mdl-card__supporting-text" ng-if="page.name=='Degree Works'">
              <h2 class="mdl-card__title-text" >{{page.name}}</h2>
   {{page.text}} 

  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-js-ripple-effect">
      Details
    </a>
  </div>
</div>
        <div class="mdl-card__supporting-text" ng-if="page.name=='My Advisor'">
          <h2 class="mdl-card__title-text" >{{page.name}}</h2>
  {{page.text}} 

  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-js-ripple-effect">
      Details
    </a>
  </div>
 

</div>  
                     <div class="mdl-card__supporting-text" ng-if="page.name=='Monarch Link'">
          <h2 class="mdl-card__title-text" >{{page.name}}</h2>
 {{page.text}} 

  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-js-ripple-effect">
      Details
    </a>
  </div>
 

</div>  
                         <div class="mdl-card__supporting-text" ng-if="page.name=='Money matters'">
          <h2 class="mdl-card__title-text" >{{page.name}}</h2>
 {{page.text}} 

  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-js-button mdl-js-ripple-effect">
      Details
    </a>
  </div>
 

</div> </div>
          </div>
  </main>
</div>
    </body>
</html>
