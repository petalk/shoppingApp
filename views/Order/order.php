  
    <div class="container">
        <div class="col-md-1"></div>
        <div id="OrderDetail" class="col-md-10">
            <div id="prodImage">
                <img src="<?php echo base_url()?>images/<?php echo $product[0]['MainImage'] ?>"> 
            </div>
             <div id="prodQty">
                <h4>Qty</h4> 
                <?php echo $quantity ?>
            </div>   
            <div id="prodName">
                <h4>Item Description</h4> 
                <?php echo $product[0]['name'] ?>
            </div> 
             <div id="prodPrice">
                <h4>Price</h4>
                <?php echo $product[0]['price'] ?>
            </div>
            <div id="prodTotal">
                 <h4>Total</h4>
                <?php echo $product[0]['price'] * $quantity ?>
            </div>   
        </div>    
    </div>    

   <!----------------------Order now form------------> 
   <div id="orderNowForm"> 
       
   <?php 
        $attributes = array("class" => "well", "id" => "shopform", "name" => "shopform");
         echo form_open("Order/addOrder", $attributes);
    ?>  
        <p class="alert-danger">   
            <?php echo $this->session->flashdata('orderStatus'); ?>
        </p>  
        
        <input type="hidden" name="productID" value="<?php echo $productID ?>"/> 
        <input type="hidden" name="productID" value="<?php echo $quantity ?>"/> 
        <div id="userName" class="formDiv">
            <label for="userName">
                <i class="fa fa-user"></i> Name *
                <span class="text-danger"><?php echo form_error('userName'); ?></span>
            </label><br>
            <input type="text" name="userName" id="userNameInput"/>
        </div>

        <div id="userMail" class="formDiv">
            <label for="userMail">
               <i class="fa fa-envelope"></i> E-mail *
               <span class="text-danger"><?php echo form_error('userMail'); ?>
            </label><br>
            <input type="text" name="userMail"/>
        </div>
        <div id="userAddress" class="formDiv">
            <label for="userAddress">
                <i class="fa fa-address-book"></i> Address *
                <span class="text-danger"><?php echo form_error('userAddress'); ?>
            </label><br>
            <input type="text" name="userAddress"/>
        </div>
        <div id="userTown" class="formDiv">
            <label for="userTown">
                <i class="fa fa-address-card"></i> Town * 
                <span class="text-danger"><?php echo form_error('userTown'); ?>
            </label><br>
            <input type="text" name="userTown"/>
        </div>
        <div id="userDistrict" class="formDiv">
            <label for="userDistrict">
                <i class="fa fa-address-card"></i> District *
                <span class="text-danger"><?php echo form_error('userDistrict'); ?>
            </label><br>
            <input type="text" name="userDistrict"/>
        </div>
        <div id="userNumber" class="formDiv">
            <label for="userNumber">
                <i class="fa fa-mobile-phone"></i> Mobile Number *
                <span class="text-danger"><?php echo form_error('userNumber'); ?>
            </label>
            <br>
            <input type="number" name="userNumber"/>
        </div>
        <div class="formDiv">
            <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Submit" />
        </div>
    <?php echo form_close(); ?>  

   </div> 
   
   <style>
       body{
           
       }
       #shopform{
           margin-bottom:5%;
           border-left:solid black;
           border-right:solid black;
       }
       .well{
           background:white;
       }
       form {
            position: relative;
            width:50%;
            margin-left:25%;
            background:white;
            margin-top:2%;
            margin-bottom:5%;
            border-radius:360px 0px 360px 0px;
            border-left:skyblue;
            border-right:solid black;
        }
        input[type="text"],input[type="number"]
        {
            width:60%;
            margin-left:20%;
            border: 1px dotted orange;
            height:32px;
        }
        input[type="text"]:focus,input[type="number"]:focus{
            border:none;
            border-bottom:skyblue;
        }
        input[type="submit"]
        {
            border:1px solid black;
            background:none;
            color:#002166;
            width:60%;
            margin-left:20%;
            margin-top:2%;
            opacity: 0.5;
            font-size: 14pt;
        }
        input[type="submit"]:hover{
            opacity: 1.5;
            color: blue;
            font-size: 14pt;
            font-family: Aharoni;
        }
        label{
            margin-left:20%;
            margin-top:4%;
        }
        i{
            
        }
        #prodImage img{
            width:100px;
            height:80px;
        }
        #OrdreDetail{    
            border:1px dotted orange;
        }
        #OrderDetail div{
            margin-top:5%;
            margin-bottom:;
            padding:20pt;
            display:inline-block;
           
        }
        #OrderDetail h4{
            color:;
        }
        @media screen and (max-width:900px) {
            form{
                width:80%;
                margin-left:10%;
            }
            input[type="text"],input[type="number"]
            {
                width:90%;
                margin-left:5%;
            }
            label{
                margin-left:5%;
            }
            
        }    
   </style>    