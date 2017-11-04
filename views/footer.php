    <?php
?>
        <div id="footer-navbar" class="">
            <div class="raw1">
            <div class="container">
                <div class="col-md-3" id="footerCol1">
                   <a href="<?php echo base_url();?>" id="siteName">
                        <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()"><img id="ftlogo" src="<?php echo base_url();?>logo/LOGO1.png" id></span></h2>
                        <h1 style="margin:0px;"><span class="largenav"><img id="ftlogo" src="<?php echo base_url();?>logo/LOGO1.png" id></span></h1>
                        <h3 id="ft-h3"><b>Online Shopping In Srilanka<b><br>
                                    <br>#326, Main Street, Colombo 11<br><br>
                            Hot Line : 077 3200625<br><br>
                            © peta.lk 2017 - 2027 - All Rights Reserved
                        </h3>
                    </a>
                </div>
              
                <div class="col-md-3" id="raw2">
                    <h3 style="text-align:center">Stay Connected<hr></h3>
                    <ul class="list-inline">
                        <li><a href="https://www.facebook.com/Petalk-2046551062235157/"target="_blank"><i id="fIcon" class="fa fa-facebook"></i></a></li>
                        <li><i id="wIcon" class="fa fa-whatsapp"></i></li>
                        <li><a href="https://twitter.com/peta_lk"target="_blank"><i id="tIcon" class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/u/2/101223230172545134012"target="_blank"><i id="gIcon" class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                
                
                
                <div class="col-md-3">
                    <h3 style="text-align:center">Information<hr></h3>
                    <ul class="info">
                        <li>About Us</li>
                        <li>Contact Us</li>
                        <li>Terms and Conditions</a></li>
                        <li>Privacy Policy</li>
                        <li>Careers</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 style="text-align:center">Our Service<hr> </h3>
                    <ul class="service">
                        <li>FAQ</li>
                        <li>Contact Us </li>
                        <li>Offers</li>
                </div>
                
          
                
         
            </div>
        </div>
        </div> <!--
footer-navbar end-->
        
        <style>
            #footer-navbar{
                  background-color:white;
                  border-top:solid skyblue;
                  color: black;
                  height:auto;
                  
            }   
            #ftlogo{
                margin-top: 10pt;
                width:100pt;
                height: 60pt;
                margin-left: -20pt;
               
            }
            #ft-h3{
                color: gray;
                font-size: 12pt;
                margin-left: -40pt;
                font-family: Adobe Garamond Pro Bold;
            }
            #fticons{
                width :40pt;
                height:40pt;
                margin-left: -20pt;
            }
/*            #raw2{
                margin-top: 15pt;
                margin-left: -20pt;
            }*/
            #raw2 ul{
                list-style-type: none;
                margin: 0;
                padding: 0;
                
            }
            #footerCol1{
                border-right:none;
            }
            #fIcon,#tIcon,#wIcon,#gIcon{
                padding:10px 15px 10px 15px;
                border-radius:360px;
                border:solid gray;
                font-size:14pt;
                color:black;
            }
            .list-inline{
                margin-left:5%;
                margin-top:0%;
            }
            #gIcon{
                padding:8px 6px 8px 6px;
            }
            #wIcon{
                padding:10px 12px 10px 12px;
            }
            #tIcon{
                padding:10px 12px 10px 12px;
            }
            #tIcon:hover{
                color:white;
                background: #66ccff;
                border:solid #66ccff;
            }
            #iIcon{
                padding:10px 12px 10px 12px;
            }
            #gIcon:hover{
                color:white;
                background:#cc0000;
                border:solid #cc0000;
            }
            #fIcon:hover{
                color:white;
                background:#000066;
                border:solid #000066;
            }
            #wIcon:hover{
                color:white;
                background:green;
                border:solid green; 
            }
            .info,.service{
                font-family: Adobe Garamond Pro Bold;   
            }
            .info li,.service li{
                color:gray;
                list-style-type: circle;
            }
            @media screen and (max-width: 768px){
                #footerCol1{
                    margin-left: 14%;
                    border-right: none;
                }
                #fIcon,#tIcon,#wIcon,#gIcon{
                    font-size: 12px;
                    padding: 4px 6px 4px 6px;
                }
                #gIcon{
                    padding: 5px 6px 5px 6px;
                }
                #raw2 ul {
                    text-align: center;
                }
            }
            
        </style>
