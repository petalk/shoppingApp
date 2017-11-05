

<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url()?>css/form.css"/>

<div class="container" >
    <?php if(!$this->cart->contents()):
    echo 'You don\'t have any items yet.';
else:
?>

<div style="">    
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
    </tbody>
</table>
    <?php
        echo form_close(); 
        endif;
    ?>
</div>

   
<p>
    <button id="cartButcheck" onclick="showOrderForm()">Check out</button>
    <!--a href="<?php echo base_url();?>index.php/order"> Check out</a--> 
</p>

</div>

<div class="container">
    <p class="alert-success">   
        <h2><?php echo $this->session->flashdata('orderStatus'); ?></h2>
    </p>
</div>  

<div id="orderNowForm"> 

   <?php 
        $attributes = array("class" => "well", "id" => "shopform", "name" => "shopform");
         echo form_open("ShoppingController/check_out", $attributes);
    ?>  
        
        
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
            <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Submit" />
        </div>
    <?php echo form_close(); ?>  

   </div> 


</body>
</html>
<script>
    function showOrderForm()
    {
        document.getElementById('orderNowForm').style.display="block";
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
</style>
