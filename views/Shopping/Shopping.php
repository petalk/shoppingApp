

<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url()?>css/form.css"/>



<div class="container" style="height:;">
<div style="" id="cartTable">    
<?php echo form_open('ShoppingController/updateCart'); ?>
<table width="100%" cellpadding="0" cellspacing="0" class="well">
    <thead>
        <tr id="headerCart">
            <td ></td>
            <td >Qty</td>
            <td >Item Description</td>
            <td >Item Price</td>
            <td>Sub-Total</td>
            <td>Cancel</td>
        </tr>
    </thead>
    <tbody>
    
        <?php $i = 1; ?>
        <?php foreach($this->cart->contents() as $items): ?>
         
        <?php echo form_hidden('rowid[]', $items['rowid']); ?>
        <tr id="1stRow" <?php if($i&1){ echo 'class="alt"'; }?>>
           
             <?php
                
               $this->load->model('ItemModel');
               $i=$this->ItemModel->getAllDetailById($items['id']);
            ?>
            <td><img width="80pt" height="50pt" src="<?php echo base_url();?>images/<?php echo $i[0]['MainImage']; ?>"></td>
            
            <td>
                <?php echo form_input(array('name' => 'qty[]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
            </td>
           
            <td><?php echo $items['name']; ?></td>
             
            <td>Rs <?php echo $this->cart->format_number($items['price']); ?></td>
            <td>Rs <?php echo $this->cart->format_number($items['qty']*$items['price']); ?></td>
            
            <td><a href="<?php echo base_url();?>index.php/ShoppingController/remove_items/<?php echo $items['rowid']; ?>">
               <i class="fa fa-trash"></i> 
            </a></td>
        </tr>
         

        <?php $i++; ?>
        <?php endforeach; ?>
        
        <tr id="totalRow">
            <td><?php echo form_submit('', 'Update Cart','id="updatecart"');?></td>
            <td><?php echo anchor('ShoppingController/emptyCart', 'Empty Cart', 'id="cartBut"');?></td><!--
-->         
            <td></td>
            <td id="tdTotal"><h3><strong>Total</strong></h3></td>
            <td id="tdTotal"><h3>Rs <?php echo $this->cart->format_number($this->cart->total()); ?></h3></td>
            
        </tr>
        <?php    
            // endif;
        ?>
    </tbody>
    </table>
 
    <?php echo form_close(); ?>  
</div><!--end of cartTabe-->

    <div id="cartTableMobile" class="well">
        <h5>Items in the cart</h5>
        <?php echo form_open('ShoppingController/updateCart'); ?>
            <?php $i = 1; ?>
            <?php foreach($this->cart->contents() as $items): ?>
         
            <?php echo form_hidden('rowid[]', $items['rowid']); ?>
            <div id="eachRow" <?php if($i&1){ echo 'class="alt"'; }?>>
            <?php 
                  $this->load->model('ItemModel');
                  $i=$this->ItemModel->getAllDetailById($items['id']);
            ?>
                <br>
                <img id="cartMobileImage" src="<?php echo base_url();?>images/<?php echo $i[0]['MainImage']; ?>">
                
                <div id=""> <h4 style="text-align:center"><?php echo $items['name']; ?></h4>
                </div>
                <hr>
                <div id="tLeft">Quantity : </div>
                <div id="tRight">
                    <?php echo form_input(array('name' => 'qty[]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
                </div>
                <hr>
                <div id="tLeft">Price : </div>
                <div id="tRight">Rs <?php echo $this->cart->format_number($items['price']); ?>
                </div>   
                <hr>
                <div id="tLeft">SubTotal : </div>
                <div id="tRight">
                    Rs <?php echo $this->cart->format_number($items['qty']*$items['price']); ?>
                </div>    
                <hr>
            </div>
         
            <?php $i++; 
                  endforeach;
                  echo form_close(); ?>
            
            <div id="orderSummaryTotal" >
                <div id="tLeft">Total : </div>
                <div id="tRight"> Rs 
                    <?php
                    echo $this->cart->total();
                     ?>.00
                </div>     
            </div>      
    </div><!--END OF CART TABLE MOBILE-->
   
<p>

    
    <a class="btn" href="<?php echo base_url(); ?>" id="checkOutBtn" class="btn-primary">
        <i class="fa fa-chevron-left" area-hidden="true"></i> Continue Shopping
    </a>
    
    <?php if(!$this->cart->contents()){
    echo '<div class="alert-info container" id="emptyMesage">
        <i class="fa fa-refresh"></i> <br>   
        Your cart is empty</div>';
    }
    else{
        ?>              
    <button id="checkOutBtn" onclick="showOrderForm()" class="btn"> 
        <i class="fa fa-shopping-cart" area-hidden="true"></i>  Check out
    </button>
    
    <!--a href="<?php echo base_url();?>index.php/order"> Check out</a--> 
</p>
   


<div class="container">
    <p class="alert-success">   
        <h2><?php echo $this->session->flashdata('orderStatus'); ?></h2>
    </p>
</div>  
</div>
       <div class="container" style="margin-top:40pt;">
       <div class="col-md-8">     
        <div id="orderNowForm" class="well"> 
               
                <button class="btn-danger" onclick="hideOrderForm()"><i class="fa fa-remove"></i></button>
                <?php 
                $attributes = array("class" => "", "id" => "shopform", "name" => "shopform");
                echo form_open("ShoppingController/check_out", $attributes);
                ?>     
                  
                <div id="orderNowFormHeader">
                    Please fill in to Check Out
                </div>
        <!--        <input type="hidden" name="productID" value="<?php echo $productID ?>"/> -->
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
                    <input id="checkOutBtn" name="btn_login" type="submit" class="btn btn-default" value="Check Out" />
                </div>
            <?php echo form_close(); ?>  
        </div><!--End of OrderNow form-->
     </div> <!--End of first column (col-md-7)-->
     <div class="col-md-4">
            <div id="orderSummary"  class="well">
               <div id="">
                    
                    <div id="tLeft">Order Subtotal</div>
                    <div id="tRight">
                        Rs  <?php echo $this->cart->total(); ?>
                    </div>
                </div>
                <hr>
                <div>
                    <div id="tLeft">Delivery Charge</div>
                    <div id="tRight">Rs 0.00</div>
                </div>    
               <hr>
                <div>
                    <div id="tLeft">Discounts</div>
                    <div id="tRight">Rs 0.00</div> 
                </div>
                <hr>
                <div id="orderSummaryTotal">
                    <div id="tLeft" >Order Total</div><div id="tRight">
                        Rs  <?php echo $this->cart->total(); ?>
                    </div>
                </div> 
            </div>    
            <?php } ?> 
     </div> <!--End of second column-->  
        
    </div>   
   </div> 
         

</body>
</html>
<script>
    function showOrderForm()
    {
        document.getElementById('orderNowForm').style.display="block";
    }
    function hideOrderForm()
    {
        document.getElementById('orderNowForm').style.display="none";
    }
</script>    
<style>
   
    body{
        background:#f7f7f7;
    }
    table{
        margin-top:4%;
        
    }
    #1stRow{
        margin-top:2%;
    }
    td{
        border:;
    }
    thead{
        height:20px;
        
    }
    #headerCart{
        height:40pt;
        
    }
    #headerCart td{
       background:#00aced;
       color:white;
       font-family: Cooper Std Black;
    }
    tbody tr td{
        height:70pt;
       
    }
    tbody tr{
         border-top: ;
    }
    .well{
        background:white;
    }
    #totalRow{
        border-top:solid #000033;
        height:30pt;
    }
    #totalRow td{
         height:30pt;
    }
    #tdTotal{
        background:#000033;
       color:white;
        text-align:center;
      border-radius:;
       font-family: Arial Rounded MT Bold;
      

       
    }
    #cartBut,#updatecart,#cartButcheck{
        background:#00aced;
        color:black;
        border:none;
        border-radius: 360pt;
        padding:5pt 15pt 5pt 15pt;
        text-decoration:none;
        opacity: 0.6;
    }
    #cartBut,#updatecart,#cartButcheck:hover{
        opacity: 1;
        color: white;
        background:#00aced;
    }
    #updatecart{
        opacity: 0.6;
    }
    #updatecart:hover{
        opacity: 1;
    }
   
    #cartButcheck{
        
        background:#00aced;
        color:white;
    }

    #orderNowForm{
        display:none;
    }
    .alert-info{
        margin-top:60pt;
        bottom:0;
        text-align:center;
        height:auto;
        height:auto;
        font-size:32pt;
        text-align:center;
        background:transparent;
    }   
    .alert-info i{
        font-size:64pt;
    } 
    #orderNowForm
    {
    
    }
    #orderSummary{
        
        height:auto;
    }
    #tLeft,#tRight{
        font-size:12pt;
        display:inline;
        list-style:none;
        
    }
    #tLeft{   
    }
    #tRight{
        float:right;
    }
    
    #orderSummaryTotal{
        background:#efefef;
        padding:10 5pt 10pt 5pt;
        font-size:14pt;
    }
    #orderSummaryTotal span{
        font-size:14pt;
    }
    #cartMobileImage{
        width:60%;
        margin-left:20%;
    }
    #cartTableMobile{
        background:white;
        display:none;
    }
    #eachRow{
        border-bottom:solid black;
    }
    @media screen and (max-width:700px) {
        #cartTable{
            display:none;
        }
        #cartTableMobile{
            display:block;
        }
        #cartTableMobile h5{
            text-align:center;
            font-size:18pt;
            background:#efefef;
        }
        #checkOutBtn{
            margin-top:2%;
            
        }
        
    }
</style>
