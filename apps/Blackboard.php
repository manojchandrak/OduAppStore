<?php
include_once '../Dbconnect.php';
$post_id = '1'; 
session_start();
$rate_bg=1;
setcookie("blcookie", $rate_bg, time() + (86400 * 30), "/"); 

$appid=1;
$_SESSION['appidsession']=$appid;

$userid=$_SESSION['user'];



if (isset($_POST["btn-submit"])&&$_POST['reviewText']!=""){
 $reviewText = mysql_real_escape_string($_POST['reviewText']);
 $res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
 $user=$userRow['username'];
 mysql_query("insert into reviews(reviewText,user,app_id,user_id) values('$reviewText','$user','$appid','$userid')");
 header("Location:Blackboard.php");

 unset($_POST);

 //$query = "select * from Reviews ";

 
 

}

/*if(mysql_query("insert into Reviews(reviewText,user) values('$reviewText','$user')")
{ 
?>
	<script>alert('successfully revirewed');</script>
	<?php
 }
 else
 {
  ?>
        <script>alert('error while reviewing.');</script>
        <?php
 }
}*/

?>
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
 <link href="../css/stylesheet.css" rel="stylesheet" type="text/css"/>
 <link href="../css/stars.css" rel="stylesheet" type="text/css"/>
 <script src="../js/app.js" type="text/javascript"></script>
 <style>
 .mdl-layout__header{
       background-color:#003366;
     
  }
 </style>
 <script>
 /*$(document).ready(function(){

 $("#reviewArea").hide();
 $("#reviewButton").click(function(){
 $("#reviewArea").show();});
 
 });*/
 $(function(){ 
            $('.rate-btn').hover(function(){
                $('.rate-btn').removeClass('rate-btn-hover');
                var therate = $(this).attr('id');
                for (var i = therate; i >= 0; i--) {
                    $('.rate-btn-'+i).addClass('rate-btn-hover');
                };
            });
			
			 $('.rate-btn').click(function(){    
                var therate = $(this).attr('id');
                var dataRate = 'act=rate&post_id=<?php echo $post_id; ?>&rate='+therate; //
                $('.rate-btn').removeClass('rate-btn-active');
                for (var i = therate; i >= 0; i--) {
                    $('.rate-btn-'+i).addClass('rate-btn-active');
                };
                $.ajax({
                    type : "POST",
                    url : "http://localhost/OduAppStore/ajax.php",
                    data: dataRate,
                    success:function(){}
                });
                
            });
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
  <main class="mdl-layout__content"  >
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="page-content" ng-controller="cardControler">
      <div style="float:left;margin: 1em;">
	<h3 style="margin-left:7px">Blackboard</h3>
<img src="../images/blackboard.png"  style="margin-left:7px">
<br><br><br>&nbsp; &nbsp;&nbsp;<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" >
  Start
</button>
	<hr>
</div>
    <div style="float:left;margin: 4em; margin-top:60px;">
	<h4  style="margin-left:7px">Description</h4>
	<hr>

	<p>Black board is a common platform where students can access course material,submit assignments and take online tests.<br/>
The company's CEO is Jay Bhatt, who has led Blackboard since October 2012.<br/>
 The firm provides education, mobile, communication, and commerce software and related services to clients including education providers, corporations and government organizations.<br/> 
 The software consists of seven platforms called Learn, Transact, Engage, Connect, Mobile, Collaborate and Analytics that are offered as bundled software. <br/>
 The firm was founded by Michael Chasen, Matthew Pittinsky, Stephen Gilfus and Daniel Cane in 1997, and became a public company in 2004.<br/>
  It operated publicly until it was purchased by Providence Equity Partners in 2011. <br/>
  As of January 2014, its software and services are used by approximately 17,000 schools and organizations in 100 countries.<br/>
  Seventy-five percent of US colleges and universities and more than half of K–12 districts in the United States use its products and services.


 </p>
</div>
<div style="clear:left;">
	<h4  style="margin-left:7px">Screenshots</h4>
	<img src="../images/bbscreen.png"  style="margin-left:7px">

	<hr>
</div>
      <h4  style="margin-left:7px">Rate App</h4>  
      
<div class="rate-ex2-cnt">

  
            <div id="1" class="rate-btn-1 rate-btn"></div>
            <div id="2" class="rate-btn-2 rate-btn"></div>
            <div id="3" class="rate-btn-3 rate-btn"></div>
            <div id="4" class="rate-btn-4 rate-btn"></div>
            <div id="5" class="rate-btn-5 rate-btn"></div>
        </div>
    
        <div class="box-result-cnt">
            <?php
                $query = mysql_query("SELECT * FROM wcd_rate where app_id='$appid'"); 
                while($data = mysql_fetch_assoc($query)){
                    $rate_db[] = $data;
                    $sum_rates[] = $data['rate'];
                }
                if(@count($rate_db)){
                    $rate_times = count($rate_db);
                    $sum_rates = array_sum($sum_rates);
                    $rate_value = $sum_rates/$rate_times;
                    $rate_bg = (($rate_value)/5)*100;
                }else{
                    $rate_times = 0;
                    $rate_value = 0;
                    $rate_bg = 0;
                }
        $_SESSION['varname'] = $rate_bg;
        $_SESSION['varname2']=$rate_times;
        
            ?>
            <hr>
      <h4  style="margin-left:7px">Overall Rating</h4>  
            <h5  style="margin-left:7px">The content was rated by <?php echo $rate_times; ?> users.</h5>
           
            <h5  style="margin-left:7px">The rating is at <strong><?php echo round($rate_value,2); ?></strong> .</h5>
           
            <div class="rate-result-cnt">
                <div class="rate-bg" style="width:<?php echo $rate_bg; ?>%"></div>
                <div class="rate-stars"></div>
            </div>
            <hr>

        </div><!-- /rate-result-cnt -->








		<div class="reviewDiv"><h4  style="margin-left:7px">User Reviews</h4>
		<div><h5 style="margin-left:7px">Write a Review</h5></div>
		<!--<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" id="reviewButton" 
		style="margin-left:40px">
  Write Review
</button>-->
		
	


<div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows= "3" id="reviewArea" name="reviewText" style="width:600px;"></textarea>



  </div>
  		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" id="submitButton" name="btn-submit"
		style="margin-left:5px">
  Submit
</button>
  <br><br><br><br>
  
  <?php
$result = mysql_query("select * from Reviews where app_id='$appid'");
if(mysql_num_rows($result)==0)
echo' No Reviews yet ';
else{
echo'<table class="mdl-data-table mdl-js-data-table  mdl-shadow--2dp"  style="margin-left:7px;width:800px;"><th style="text-align: center;" class="mdl-data-table__cell--non-numeric">Review</th><th>By</th>';
  while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) { 

echo'<tr><td  style="text-align: center;">';echo $line['reviewText'];echo'</td><td>' ;echo $line['user'];echo'</td>';
 //echo "<br>\n";
  }
  echo'</td></tr></table>';
}
  ?>
  </div>

		<hr>
	 	





			
	
	
	
	
	</div>
	</form>
</main>
</body>
</html>