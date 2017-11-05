<!--
-->
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>/css/index.css">
    </head>
    
    <body>
        
    <div class="" id="container" ng-app="ItemApp" ng-controller="ItemController">
      
        <?php
            $data['content']=$items;
            $this->load->view('slick/responsive',$data);
        ?>
        
     <div class="row" id="bannerRow">
         <div class="container">
            
             <div class="col-md-12">
                   <?php
                        $this->load->view('slick/central');
                   ?>
             </div> 
<!--             <div class="col-md-0">
                 <img src="<?php echo base_url();?>/images/post1.jpg" class="img-responsive" style="margin:30px auto">
              </div>    -->
         </div>    
     </div>   
    
    <div class="row" id="scroller" class="">
        <div class="container" id="content">
            <li id="HeadingScrollingList" class="">Top Deals<hr></li>
            <ul id="scrollingList">
                   <li ng-repeat="item in Items" class="well" id="content">
                            <img src="<?php echo base_url(); ?>/images/{{item.MainImage}}"><br>
                            <span id="itemName">{{item.name}}</span><br>
<!--                            Stock : {{item.Quantity}} <br>-->
                            <span id="Price">Rs.  {{item.price}}.00 <br><br>
                            <a href="http://localhost/eCommerce/index.php/Welcome/detail/{{item.ID}}">Watch</a>
                    </li> 
                   
            </ul>
        </div>
    </div>
        
    <div class="container-fluid">
        <div class="col-md-0"></div>
        <div  class="col-md-12" id="itemsContainer">
            <li ng-repeat="item in Items" id="items" class="well">
                <img src="<?php echo base_url(); ?>/images/{{item.MainImage}}"><br><br>
                <span id="itemName">{{item.name}}</span><br>
                <span id="stock">Stock : {{item.Quantity}}</span> <br>
                <span ng-hide="item.oldprice==0" id="oldprice"><i><del class="double-strike">Rs.  {{item.oldprice}}.00</del></i></span><br>
                <span id="price"> Rs.  {{item.price}}.00 <br><br>

                <a href="http://localhost/eCommerce/index.php/Welcome/detail/{{item.ID}}">Buy now</a>
            </li> 
        </div>
    </div><!--End of second Row-->
        
        
     </div> 
    
    <!--Link for sliders----->    
    <script src="<?php echo base_url();?>js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url();?>js/myslider.js"></script>    
    <!--End of sliders-------->
    
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

</html>
