

<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700' rel='stylesheet' type='text/css'>

<div class="container" >
    <?php if(!$this->cart->contents()):
    echo 'You don\'t have any items yet.';
else:
?>

<div style="">    
<?php echo form_open('cart/update_cart'); ?>
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
            <td id="tdTotal"><h2><strong>Total</strong></h2></td>
            <td id="tdTotal"><h2>Rs <?php echo $this->cart->format_number($this->cart->total()); ?></h2></td>
            
        </tr>
    </tbody>
</table>
</div>

   
<p>
    <a id="cartButcheck" href="<?php echo base_url();?>index.php/order"> Check out</a> 
</p>
<?php 
echo form_close(); 
endif;
?>


</div>
</body>
</html>

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
       background:orange;
       color:white;
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
        border-top:solid black;
       
    }
    #totalRow td{
         height:40pt;
    }
    #tdTotal{
       background:black;
       color:orange;
        text-align:center;
       
    }
    #cartBut,#updatecart,#cartButcheck{
        background:yellow;
        color:black;
        border:none;
        padding:5pt 15pt 5pt 15pt;
        text-decoration:none;
    }
    #cartButcheck{
        
        background:#00aced;
        color:white;
    }
</style>
