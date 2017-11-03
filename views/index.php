<!--
-->
<html>
<head>
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url(); ?>/js/ownAng.js"></script
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--script type="text/javascript" src="<?php echo base_url(); ?>/js/ownAng.js"></script-->
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.blueberry.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/blueberry.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/index.css">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/application/views/slick/slicker/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/application/views/slick/slicker/slick/slick-theme.css"/>
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>/application/views/slick/slicker/slick/slick.js" type="text/javascript" charset="utf-8"></script>
    
    </head>
    <body>
        
    <div class="" id="container" ng-app="ItemApp" ng-controller="ItemController">
        
        <!--div class="container" style="width:100%;" >
            <button class="lefter">></button>
            <ul id="scrollingList" class="scrollingList" style="border:none;" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
                   <li ng-repeat="item in Items" id="content" class="content well">
                            <img src="<?php echo base_url(); ?>/images/{{item.MainImage}}"><br>
                            <span id="itemName">{{item.name}}</span><br>
                           Stock : {{item.Quantity}} <br>
                            <span ng-hide="item.oldprice==0" id="oldprice"><i><del>Rs.  {{item.oldprice}}.00</del></i></span><br>
                            <span id="price">Rs.   {{item.price}}.00 <br><br>
                            <a href="http://localhost/eCommerce/index.php/Welcome/detail/{{item.ID}}">Watch</a>
                    </li> 
            </ul> 
        </div-->
    <section class="responsive slider">
        <?php foreach($items as $i)
            {
        ?>
        <div class="well" id="scrollingList">
            <img src="<?php echo base_url();?>images/<?php echo $i['MainImage'] ?>"><br>
            <span id="itemName"><?php echo $i['name'] ?></span><br>
           
               
               <?php if($i['Quantity']==0){ ?>
                     <span id="" style="color:red">Stock : 0</span><br>
                <?php } //end of if
                    else{ ?>
                     <span id="" style="">Stock : <?php echo $i['Quantity']?></span><br> 
                <?php } //end of else?> 
                 
                <?php if($i['oldprice']!=0){ ?>
                    <span id="oldprice"><i><del><?php echo $i['oldprice']?></del></i></span><br>
                <?php } else{?><br><?php }?>
                
                <span id="price">Rs <?php echo $i['price']?><span><br>
                <a href="http://localhost/eCommerce/index.php/Welcome/detail/{{item.ID}}">Watch</a>    
        </div>
        <?php
            } //end of foreach
        ?>
    </section>

        
     <div class="row" id="bannerRow">
         <div class="container-fluid">
            
             <div class="col-md-9">
                     <!--div class="blueberry">
                      <ul class="slides">
                        <li><img id="blueB" src="<?php echo base_url();?>/images/banner16.jpg" /></li>
                        <li><img id="blueB" src="<?php echo base_url();?>/images/sense_3.jpg" /></li>
                        <li><img id="blueB" src="<?php echo base_url();?>/images/Slide5.jpg" /></li>
                        <li><img src="img/slide4.jpg" /></li>
                      </ul>
                    <!-- Optional, see options below>
                      <ul class="pager">
                        <li><a href="#"><span></span></a></li>
                        <li><a href="#"><span></span></a></li>
                        <li><a href="#"><span></span></a></li>
                        <li><a href="#"><span></span></a></li>
                      </ul>
                    <!-- Optional, see options below>
                    </div-->
                    <section class="single-item-rtl slider">
                        <div>
                            <img src="<?php echo base_url();?>/images/banner16.jpg">
                        </div>
                        <div>
                            <img src="<?php echo base_url();?>/images/sense_3.jpg">
                        </div>
                        <div>
                            <img src="<?php echo base_url();?>/images/Slide5.jpg">
                        </div>
                       
                    </section-->
             </div> 
             <div class="col-md-3">
                 <img src="<?php echo base_url();?>/images/post1.jpg" class="img-responsive" style="margin:30px auto">
              </div>    
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
     <style>
           html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }
    .well{
        background:white;
    }
    .slider {
        width: 80%;
        margin:30px auto;
        height:240pt;
        position:relative;
    }

    

    .slider img{
        width:120pt;
        height:100pt;
    }

    .single-item-rtl img{
        width:100%;
        height:auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
      margin-top:-10%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
      margin-top:-10%;
    }

    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: 1;
    }
    
    .slick-active {
      opacity: 1;
    }

    .slick-current {
      opacity: 1;
    }
    </style>  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>slick/slick/slick.min.js"></script>  
     
  

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>/application/views/slick/slicker/slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
     $(window).load(function() {
        $('.blueberry').blueberry(); 
        });

    $(document).on('ready', function() {
        $('.single-item-rtl').slick({
            autoplay:true,
            dots:false,
            slidesToShow: 1,
            slidesToScroll:1
        });  
      $(".vertical-center-4").slick({
        autoplay:true,
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 2
      });
      $(".vertical-center-3").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".vertical-center-2").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 2,
        slidesToScroll: 2
      });
      $(".vertical-center").slick({
        dots: true,
        vertical: true,
        centerMode: true,
      });
      $(".vertical").slick({
        dots: true,
        vertical: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".regular").slick({
        dots: false,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll:1
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
$('.responsive').slick({
  dots:true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


    });
</script>





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
       
    </script>
  
</html>
