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
           <div class="col-md-5" id="imageContainer">
               
               <?php
                    foreach($item as $i)
                    {
                        if($i['MainImage']!=null)
                        { ?> <img class="mySlides" src="<?php echo base_url();?>images/{{item.MainImage}}">    
                        <?php }
                        if($i['Image1']!=null){?>
                           <img class="mySlides" src="<?php echo base_url();?>images/{{item.Image1}}"> 
                        <?php }
                        if($i['Image2']!=null){?>
                            <img class="mySlides" src="<?php echo base_url();?>images/{{item.Image2}}"> 
                        <?php }
                        if($i['Image3']!=null){?>
                            <img class="mySlides" src="<?php echo base_url();?>images/{{item.Image3}}"> 
                        <?php }    
                    }
               ?>
<!--            <img class="mySlides" src="<?php echo base_url();?>images/{{item.MainImage}}">
                <img class="mySlides" src="<?php echo base_url();?>images/{{item.Image1}}">
                <img class="mySlides" src="<?php echo base_url();?>images/{{item.Image2}}">
                <img class="mySlides" src="<?php echo base_url();?>images/{{item.Image3}}">-->

                <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
           </div><!--End of Image Container-->

            {{messageText}}
            <div id="detContainer" class="col-md-7">
               <h2>{{item.name}}</h2>
               <hr>
               <div id="detailDescription">
                   <div>
                        <p id="price">Rs. {{item.price}}</p> 
                       
                   </div>
                   <p id="desription">{{item.description}}</p>
                   <p id="">Available units - {{item.Quantity}}</p>
<!--                   <a href="<?php echo base_url();?>index.php/OrderController/index/{{item.ID}}">Order Now</a>-->
                        <div id="sorr">
                            <div class="type-1">
                            <div>
                                <a href="" class="btn btn-1" id="iBuy" onclick="showBuynow()">
                                <span class="txt">Buy now</span>
                                <span class="round"><i class="fa fa-chevron-right"></i></span>
                                </a>
                            </div> 
                            </div> 
                        </div> 
                        <div id="sorr">
                            <div class="type-1">
                            <div>
                                <a href="" class="btn btn-1"  onclick="showPopup()">
                                <span class="txt">Add to cart</span>
                                <span class="round" id="icart"><i class="fa fa-shopping-cart"></i></span>
                                </a>
                            </div> 
                            </div> 
                        </div>
                        <div id="sorr">
                            <div class="type-1">
                            <div>
                                <a href="" class="btn btn-1" onclick="showPopup()">
                                <span class="txt">wish list</span>
                                <span class="round" id="iheart"><i class="fa fa-heart"></i></span>
                                </a>
                            </div> 
                            </div> 
                        </div>  

                     <!--button onclick="showBuynow()" id="detBut">
                        <i class="fa fa-money"></i>  Buy now</button-->
                     <!--button onclick="showPopup()" id="detBut">
                        <i class="fa fa-shopping-cart"></i> Add to Cart
                     </button>
                     <button onclick="" id="detBut">
                        <i class="fa fa-heart" id="faheart"></i> Add to wish list
                     </button-->
               
                       
                    <?php 
//                              $attributes = array("class" => "form-horizontal", "id" => "shopform", "name" => "shopform");
//                              echo form_open("ShoppingController/add", $attributes);
//                    ?>   
<!--                                 <input type="hidden" name="itemID" value="{{item.ID}}"/>
                             <button ng-click="addCart($item)">Add to cart</button>
                    <input onclick="showPopup()" id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Add to Cart" />-->
                   <?php echo form_close(); ?>
                  
                     
                  <div id="BuynowPopup" class="well">
                        <button class="btn-danger" onclick="hide()">x</button><br>
                        <?php
                          $attributes = array("class" => "form-horizontal", "id" => "shopform", "name" => "shopform");
                          echo form_open("Order", $attributes);
                        ?> 
                            
                        <input type="number" name="quantity" placeholder="Quantity"><br>
                        <input type="hidden" name="itemID" value="{{item.ID}}"/>
    <!--                             <button ng-click="addCart($item)">Add to cart</button>-->
                        <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Submit" />
                        <?php echo form_close(); ?>  
                  </div>
                  <!--END of Buynow POPUP, Rises when buynow is clicked-->
                     
            
                <div id="CartPopup" class="well">
                        <button class="btn-danger" onclick="hide()">x</button><br>
                        <?php
                          $attributes = array("class" => "form-horizontal", "id" => "shopform", "name" => "shopform");
                          echo form_open("ShoppingController/add", $attributes);
                        ?> 
                        <input type="number" name="quantity" placeholder="Quantity"><br>
                        <input type="hidden" name="itemID" value="{{item.ID}}"/>
    <!--                             <button ng-click="addCart($item)">Add to cart</button>-->
                        <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Add to Cart" />
                        <?php echo form_close(); ?>
                  </div>
                  <!--END of CartPopup POPUP, Rises when add to cart is clicked-->  
            </div>
            
            <div id="detDesc" class="">
                <p>Sold by : Peta.lk</p>  
                <p>Delivery : Delivery within 4 to 7 Business Days</p>
            </div>  
            
          </div>
  
        </div> <!--End of rowD1-->
       
        <div class="container">        
            <div id="detDesc" class="col-md-4" >
                <i id="faTrack" class="fa fa-truck"></i>
                <br>Island wide Delivery    
            </div>
            <div id="detDesc" class="col-md-4">        
                <i class="fa fa-money" aria-hidden="true"></i>
                <br> Cash On Delivery
            </div>
            <div id="detDesc" class="col-md-4">    
                <i class="fa fa-quora" aria-hidden="true"></i>
                <br> Quality products           
            </div> 
            
            
        </div>        
       
        
    </li><!--End of Li items-->
    <br>
    <!--div class="row" id="scroller">
        <div class="container">
            <ul id="scrollingList">
                
                   <li ng-repeat="item in AllItems" id="items" class="well">
                             
                            <img src="<?php echo base_url(); ?>/images/{{item.MainImage}}"><br>
                            <span id="itemName">{{item.name}}</span><br>
                            Stock : {{item.Quantity}} <br>
                            Price : {{item.price}} <br><br>
                            <a href="http://localhost/eCommerce/index.php/Welcome/detail/{{item.ID}}">watch</a>
                    </li>   
                    
            </ul>
        </div>
    </div-->
    </div>

    <div class="row relevant items">
        <div class="container relevantItems">
             <div class="col-md-4" id="relevantItems"><h4>OutDated</h4></div>
             <div class="col-md-4" id="activeDiv"><h4>Relevant Items</h4></div>
             <div class="col-md-4" id="relevantItems"><h4>Displayed</h4></div>       
        </div> 
        <div>              
            <?php
                $data['content']=$items;
                $this->load->view('slick/responsive.php',$data);
            ?>
        </div>
    </div>
    <!--End of row relevant items-->                


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

  <!--Link for sliders----->    
    <script src="<?php echo base_url();?>js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url();?>js/myslider.js"></script>    
  <!--End of sliders-------->
<style>
    #sorr > div {
  width: 33%;
  float:left;
}
#sorr > div > div {
  margin-bottom: 10px;
}

.btn-1 {
  background-color:none;
}
#iHeart{
    background:red;
}
#icart{
    background:orange;
}
.btn-1 .round {
  background-color:#0080ff;
}

.btn-2 {
  background-color: #00AFD1;
}
.btn-2 .round {
  background-color: #00c4eb;
}

.btn-3 {
  background-color: #5A5B5E;
}
.btn-3 .round {
  background-color: #737478;
}

#sorr a {
  text-decoration: none;
  -moz-border-radius: 30px;
  -webkit-border-radius: 30px;
  border-radius: 30px;
  padding: 12px 53px 12px 23px;
  color: black;
  text-transform: ;
  font-family: sans-serif;
  font-weight: bold;
  position: relative;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  display: inline-block;
}
 a span {
  position: relative;
  z-index: 3;
}
 a .round {
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  width: 38px;
  height: 38px;
  position: absolute;
  right: 4px;
  top: 3px;
  -moz-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  -webkit-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
  z-index: 2;
}
#sorr a .round i {
  position: absolute;
  top: 50%;
  margin-top: -6px;
  left: 40%;
  margin-left: -4px;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.txt {
  font-size: 14px;
  line-height: 1.45;
}

.type-1 a:hover {
  padding-left: 68px;
  padding-right: 28px;
}
.type-1 a:hover .round {
  width: calc(100% - 6px);
  -moz-border-radius: 30px;
  -webkit-border-radius: 30px;
  border-radius: 30px;
}
.type-1 a:hover .round i {
  position:fixed;
  display:none;
}

</style>    
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
     function showPopup()
     {
        document.getElementById('CartPopup').style.display="block";
     }
     function showBuynow()
     {
        document.getElementById('BuynowPopup').style.display="block";
     }
     
 
     
     function hide()
     {
         document.getElementById('CartPopup').style.display="none";
         document.getElementById('BuynowPopup').style.display="none";
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
