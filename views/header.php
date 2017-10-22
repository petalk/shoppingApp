    <?php
?>
<html>
    <header>
         <link rel="stylesheet" href="<?php echo base_url(); ?>/css/bootstrap.css"/>
         <link rel="stylesheet" href="<?php echo base_url(); ?>/css/bootstrap.min.css"/>
         <link rel="stylesheet" href="<?php echo base_url(); ?>/awesome/css/font-awesome.min.css">
         <link rel="stylesheet" href="<?php echo base_url(); ?>/css/header.css">
         <link rel="stylesheet" href="<?php echo base_url(); ?>/css/common.css">
         <script type="text/javascript" src="<?php echo base_url(); ?>/js/bootstrap.js"></script>
         <script type="text/javascript" src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
         <script type="text/javascript" src="<?php echo base_url(); ?>/js/angular.js"></script>
         <script type="text/javascript" src="<?php echo base_url(); ?>/js/ownAng.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </header>
    <body>
    <div ng-app="ItemApp" ng-controller="ItemController">    
    <div id="flipkart-navbar" class="" >
            <div class="container">
                <div class="row row1">
                    <ul class="largenav pull-right">
                        <li class="upper-links"><b><a class="links" href="http://clashhacks.in/">Home</a><b></li>
                        <li class="upper-links"><a class="links" href="https://campusbox.org/">Contact us</a></li>
                        <li class="upper-links"><a class="links" href="http://clashhacks.in/">About</a></li>
                        <li class="upper-links"><a class="links" href="http://clashhacks.in/">Location</a></li>
<!--                        <li class="upper-links"><a class="links" href="http://clashhacks.in/">Link 5</a></li>
                        <li class="upper-links"><a class="links" href="http://clashhacks.in/">Link 6</a></li>-->
                        <li class="upper-links">
                            <a class="links" href="http://clashhacks.in/">
                                <svg class="" width="16px" height="12px" style="overflow: visible;">
                                    <path d="M8.037 17.546c1.487 0 2.417-.93 2.417-2.417H5.62c0 1.486.93 2.415 2.417 2.415m5.315-6.463v-2.97h-.005c-.044-3.266-1.67-5.46-4.337-5.98v-.81C9.01.622 8.436.05 7.735.05 7.033.05 6.46.624 6.46 1.325v.808c-2.667.52-4.294 2.716-4.338 5.98h-.005v2.972l-1.843 1.42v1.376h14.92v-1.375l-1.842-1.42z" fill="#fff"></path>
                                </svg>
                            </a>
                        </li>
<!--                        <li class="upper-links dropdown"><a class="links" href="http://clashhacks.in/">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li class="profile-li"><a class="profile-links" href="http://yazilife.com/">Link</a></li>
                                <li class="profile-li"><a class="profile-links" href="http://hacksociety.tech/">Link</a></li>
                                <li class="profile-li"><a class="profile-links" href="http://clashhacks.in/">Link</a></li>
                                <li class="profile-li"><a class="profile-links" href="http://clashhacks.in/">Link</a></li>
                                <li class="profile-li"><a class="profile-links" href="http://clashhacks.in/">Link</a></li>
                                <li class="profile-li"><a class="profile-links" href="http://clashhacks.in/">Link</a></li>
                                <li class="profile-li"><a class="profile-links" href="http://clashhacks.in/">Link</a></li>
                            </ul>
                        </li>-->
                    </ul>
                </div>
                <!--End of row1------------>
                
                <div class="row row2">
                    <div class="col-sm-2">
                        <a href="<?php echo base_url();?>" id="siteName">
                        <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()"><img id="logo" src="<?php echo base_url();?>logo/LOGO.png" id></span></h2>
                        <h1 style="margin:0px;"><span class="largenav"><img id="logo" src="<?php echo base_url();?>logo/LOGO.png" id></span></h1>
                        </a>
                    </div>
                    <div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-11">
                        <div class="row">
                            <input  ng-model="searchInp" class="flipkart-navbar-input col-xs-11" type="" placeholder="Search for Products, Brands and more" name="">
                            <button ng-click="searchBut()" onclick="showSearch()" class="flipkart-navbar-button col-xs-1">
                                <svg width="15px" height="15px">
                                    <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="cart largenav col-sm-2">
                        <a class="cart-button">
                            <svg class="cart-svg " width="16 " height="16 " viewBox="0 0 16 16 ">
                                <path d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86 " fill="#fff "></path>
                            </svg> Link
                            <span class="item-number ">
                                <?php echo $count; ?>
                            </span>
                        </a>
                    </div>
                </div><!--End of row2------------------------>
            
            </div><!--End of Container---->
    </div><!--End of Flipkart--->
        
    <div id="mySidenav" class="sidenav">
        <div class="container" style="background-color: #2874f0; padding-top: 10px;">
            <span class="sidenav-heading">Home</span>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        </div>
        <a href="http://clashhacks.in/">Link</a>
        <a href="http://clashhacks.in/">Link</a>
        <a href="http://clashhacks.in/">Link</a>
        <a href="http://clashhacks.in/">Link</a>
    </div>
    
    <div class="row row3"> 
        <div class="col-md-4"></div>    
        <div class="container" id="searchResult" style="width:100%;" ng-hide="SearchItems===NULL">      
            <br>
            <li>
                <button class="bg-danger" onclick="hideSearch()">x</button> Search Results - {{SearchItems.length}}
            </li><br>
            <ul id="scrollingList" style="border:none; width:">
                   <li ng-repeat="item in SearchItems" id="content">
                            <img src="<?php echo base_url(); ?>/images/{{item.MainImage}}"><br>
                            <span id="itemName">{{item.name}}</span><br>
                            Stock : {{item.Quantity}} <br>
                            Price : {{item.price}} <br><br>
                            <a href="http://localhost/eCommerce/index.php/Welcome/detail/{{item.ID}}">watch</a>
                   </li>   
            </ul>
       </div> <!--End of SearchItems-->
    </div><!--End of row 3-->
    
    <script>
        function hideSearch()
        {
            document.getElementById('searchResult').style.display="none";
        }
        function showSearch()
        {
            document.getElementById('searchResult').style.display="block";
        }
        function openNav() {
            document.getElementById("mySidenav").style.width = "70%";
            // document.getElementById("flipkart-navbar").style.width = "50%";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.body.style.backgroundColor = "rgba(0,0,0,0)";
        }
    </script>    

