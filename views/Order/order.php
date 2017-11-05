  
    <link rel="stylesheet" href="<?php echo base_url()?>css/form.css"/>

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
    
   </style>    