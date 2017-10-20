<!--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link href="<?php echo base_url();?>/js/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url();?>/js/js-image-slider.js" type="text/javascript"></script>
-->
<link href="<?php echo base_url();?>/css/detail.css" rel="stylesheet" type="text/css" />
<div id="thisPage" ng-app="ItemApp" ng-controller="ItemController">
    <li ng-repeat="item in Items" id="itemDetailLi">
        <div class="row rowD1">
          <div class="container"> 
           <div class="col-md-1"></div>

           <div class="col-md-4" id="imageContainer">
                <img class="mySlides" src="<?php echo base_url();?>images/{{item.MainImage}}">
                <img class="mySlides" src="<?php echo base_url();?>images/{{item.Image1}}">
                <img class="mySlides" src="<?php echo base_url();?>images/{{item.Image2}}">
                <img class="mySlides" src="<?php echo base_url();?>images/{{item.Image3}}">

                <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
           </div><!--End of Image Container-->

            {{messageText}}
           <div id="detContainer" class="col-md-6">
               <h2>{{item.name}}</h2>
               <hr>
               <div id="detailDescription">
                   <p id="price">Just Rs {{item.price}} only</p>
                   <p id="desription">{{item.description}}</p>
                   <p id="">Stock - {{item.Quantity}}</p>
                   <button>Order Now</button>
                   <?php 
                              $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
                              echo form_open("ShoppingController/add", $attributes);
                    ?>   
                                 <input type="hidden" name="itemID" value="{{item.ID}}"/>
<!--                             <button ng-click="addCart($item)">Add to cart</button>-->
                                 <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Add to Cart" />
                    <?php echo form_close(); ?>           
                  
               </div>
           </div>
          </div>
        </div> <!--End of rowD1-->
    </li><!--End of Li items-->
    <br>
    <div class="row" id="scroller">
        <div class="container">
            <ul id="scrollingList">
                
                   <li ng-repeat="item in AllItems" id="items">
                             
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
      <div class="container">  
        <div class="col-md-12">
            <div id="displayButton">
                <button onclick="showSpec()">Specification</button>
                <button onclick="showDesc()">Description</button>
                <button onclick="showFeatures()" ng-click="getFeature()">Features</button>
            </div>
            <div id="Specification">
                <li ng-repeat="sp in Specification">
                    <ul id="desList">
                       <li><span id="specheader">{{sp.Header1}}</span> : {{sp.Feature1}}</li><hr>
                       <li><span id="specheader">{{sp.Header2}}</span> : {{sp.Feature2}}</li><hr>
                       <li><span id="specheader">{{sp.Header3}}</span> : {{sp.Feature3}}</li><hr>
                       <li><span id="specheader">{{sp.Header4}}</span> : {{sp.Feature4}}</li><hr>
                    </ul>    
                </li>
            </div>
            <div id="Features">
                <li ng-repeat="f in Features">
                    <ul id="desList">
                        <li>{{f.Feature1}}</li><hr>
                        <li>{{f.Feature2}}</li><hr>
                        <li>{{f.Feature3}}</li><hr>
                        <li>{{f.Feature4}}</li><hr>
                    </ul>
                </li>
            </div>
            <div id="Description">
                <li ng-repeat="item in Items">
                    {{item.description}}
                </li>
            </div> 
        </div>
   </div>
   </div>
    
</div>

<script>
    var app = angular.module('ItemApp', []);
        app.controller('ItemController', function($scope, $http) {
            
            $scope.GICount;
            
            $http({
                method : "GET",
                url : "<?php echo base_url();?>index.php/ItemController/getDetail/<?php echo $id ?>"
            }).then(function mySuccess(response) {
                $scope.Items = response.data;
            }, function myError(response) {
                $scope.myWelcome = response.statusText;
            });
            
            $http({
                method : "GET",
                url : "<?php echo base_url(); ?>index.php/ItemController/getItems"
            }).then(function mySuccess(response) {
                $scope.AllItems = response.data;
            }, function myError(response) {
                $scope.myWelcome = response.statusText;
            });
            
            
            $http({
                method : "GET",
                url : "<?php echo base_url();?>index.php/ItemController/getSpecification/<?php echo $id ?>"
            }).then(function mySuccess(response) {
                $scope.Specification = response.data;
            }, function myError(response) {
                $scope.myWelcome = response.statusText;
            });
            
            $scope.getFeature=function(){
               $http({
                    method : "GET",
                    url : "<?php echo base_url();?>index.php/ItemController/getFeatures/<?php echo $id ?>"
                }).then(function mySuccess(response) {
                    $scope.Features = response.data;
                }, function myError(response) {
                    $scope.myWelcome = response.statusText;
                });
              
            };
            
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
            
            ////adding products into cart////////////
            $scope.addCart=function(item)
            {       
                $http({
                    method:'post',
                    url:'<?php echo base_url();?>index.php/ShoppingController/add',
                    data : item, //forms user object
                    headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                }).then(function mySuccess(response)
                {
                    $scope.messageText="Item added successfully";
                });
            };
        });
//        
     function showSpec()
     {
         document.getElementById('Specification').style.display="block";
         document.getElementById('Features').style.display="none";
         document.getElementById('Description').style.display="none";
     }  
     function showDesc()
     {
         document.getElementById('Description').style.display="block";
         document.getElementById('Features').style.display="none";
         document.getElementById('Specification').style.display="none";
     }
     function showFeatures()
     {
         document.getElementById('Features').style.display="block";
         document.getElementById('Specification').style.display="none";
         document.getElementById('Description').style.display="none";
          
     }
     
     var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
}
</script> 
