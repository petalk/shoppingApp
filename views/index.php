<!--
<html>
    <header>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url(); ?>/js/ownAng.js"></script>
     <link rel="stylesheet" href="<?php echo base_url(); ?>/css/index.css">
     <link rel="Stylesheet" type="text/css" href="<?php echo base_url();?>/css/css/smoothDivScroll.css" />
    </header>
    <body>
        <style>
            	
	</style>
        </style>-->
    <div class="" id="container" ng-app="ItemApp" ng-controller="ItemController">
        
        <div class="container" style="width:100%;">
           
            <ul id="scrollingList" class="scrollingList" style="border:none;">
                   <li ng-repeat="item in Items" id="content">
                            <img src="<?php echo base_url(); ?>/images/{{item.MainImage}}"><br>
                            <span id="itemName">{{item.name}}</span><br>
                            Stock : {{item.Quantity}} <br>
                            Price : {{item.price}} <br><br>
                            <a href="http://localhost/eCommerce/index.php/Welcome/detail/{{item.ID}}">watch</a>
                    </li> 
                  
            </ul> 
           
        </div>
        
      
        

          <script>
        
        </script>

        
    
    <div class="row" id="scroller" class="">
        <div class="container" id="content">
            <li id="HeadingScrollingList" class="">Top Deals</li>
            <ul id="scrollingList">
                   <li ng-repeat="item in Items" id="content">
                            <img src="<?php echo base_url(); ?>/images/{{item.MainImage}}"><br>
                            <span id="itemName">{{item.name}}</span><br>
                            Stock : {{item.Quantity}} <br>
                            Price : {{item.price}} <br><br>
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
                    Price : {{item.price}} <br>
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
    <style>
     
    </style>
</html>
