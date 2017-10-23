<!--
--><!--html>
    <header>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url(); ?>/js/ownAng.js"></script-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <!--script type="text/javascript" src="<?php echo base_url(); ?>/js/ownAng.js"></script-->
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.blueberry.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/blueberry.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/index.css">
  

    <div class="" id="container" ng-app="ItemApp" ng-controller="ItemController">
        
        <div class="container" style="width:100%;">
           
            <ul id="scrollingList" class="scrollingList" style="border:none;">
                   <li ng-repeat="item in Items" id="content">
                            <img src="<?php echo base_url(); ?>/images/{{item.MainImage}}"><br>
                            <span id="itemName">{{item.name}}</span><br>
                            Stock : {{item.Quantity}} <br>
                            <span id="price">Price : {{item.price}} <br>
                            <span id="oldprice"><i><del>Price: {{item.oldprice}}</del></i><br><br>
                            <a href="http://localhost/eCommerce/index.php/Welcome/detail/{{item.ID}}">watch</a>
                    </li> 
                  
            </ul> 
           
        </div>
        
      
     <div class="row" id="bannerRow">
         <div class="container-fluid">
             <div class="col-md-0"></div>
             <div class="col-md-9">
                     <div class="blueberry">
                      <ul class="slides">
                        <li><img src="<?php echo base_url();?>/images/banner16.jpg" class="img-responsive"/></li>
                        <li><img src="<?php echo base_url();?>/images/sense_3.jpg" /></li>
                        <li><img src="<?php echo base_url();?>/images/Slide5.jpg" /></li>
    <!--                    <li><img src="img/slide4.jpg" /></li>-->
                      </ul>
                    <!-- Optional, see options below -->
                      <ul class="pager">
                        <li><a href="#"><span></span></a></li>
                        <li><a href="#"><span></span></a></li>
                        <li><a href="#"><span></span></a></li>
                        <li><a href="#"><span></span></a></li>
                      </ul>
                    <!-- Optional, see options below -->
                    </div>
             </div> 
             <div class="col-md-3">
                 <img src="<?php echo base_url();?>/images/post1.jpg" class="img-responsive" style="margin-top:5%">
              </div>    
         </div>    
     </div>   
    
    <div class="row" id="scroller" class="">
        <div class="container" id="content">
            <li id="HeadingScrollingList" class="">Top Deals</li>
            <ul id="scrollingList">
                   <li ng-repeat="item in Items" id="content">
                            <img src="<?php echo base_url(); ?>/images/{{item.MainImage}}"><br>
                            <span id="itemName">{{item.name}}</span><br>
                            Stock : {{item.Quantity}} <br>
                            <span id="Price">Price : {{item.price}} <br><br>
                            <a href="http://localhost/eCommerce/index.php/Welcome/detail/{{item.ID}}">watch</a>
                    </li> 
                   
            </ul>
        </div>
    </div>
        
        <div class="row">
            <div class="col-md-1"></div>
            <div  class="col-md-10" id="itemsContainer">
                <li ng-repeat="item in Items" id="items" class="well">
                    <img src="<?php echo base_url(); ?>/images/{{item.MainImage}}"><br>
                    <span id="itemName">{{item.name}}</span><br>
                    Stock : {{item.Quantity}} <br>
                    <span id="price"> Price : {{item.price}} <br>
                    <span id="oldprice"><i><del class="double-strike">Price: {{item.oldprice}}</del></i><br>    
                    <a href="http://localhost/eCommerce/index.php/Welcome/detail/{{item.ID}}">Buy now</a>
                </li> 
            </div>
        </div><!--End of second Row-->
        
        
     </div> 
        
     </body>
    
    <script>
        var app = angular.module('ItemApp', []);
        app.controller('ItemController', function($scope, $http) {
            
            $http({
                method : "GET",
                url : "<?php echo base_url(); ?>index.php/ItemController/getItems"
            }).then(function mySuccess(response) {
                $scope.Items = response.data;
            }, function myError(response) {
                $scope.myWelcome = response.statusText;
            });
           
            $scope.searchBut=function()
            {
                  
            $http({
                method : "GET",
                url : "<?php echo base_url();?>index.php/ItemController/getSearch/"+$scope.searchInp
            }).then(function mySuccess(response) {
                $scope.SearchItems = response.data;
            }, function myError(response) {
                $scope.myWelcome = response.statusText;
            });
            };
            
           
           
        });
    </script>
    <script>
        $(window).load(function() {
            $('.blueberry').blueberry();
        });
    </script>
    <style>
     
    </style>
</html>
