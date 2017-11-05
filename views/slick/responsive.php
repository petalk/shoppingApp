 <section class="responsive slider">
        <?php foreach($content as $i)
            {
        ?>
        <a href="http://localhost/eCommerce/index.php/Welcome/detail/<?php echo $i['ID'] ?>">
        <div class="well" id="sliderDiv">
            <img src="<?php echo base_url();?>images/<?php echo $i['MainImage'] ?>"><br>
            <span id="itemName"><?php echo $i['name'] ?></span><br>
           
               
               <?php if($i['Quantity']==0){ ?>
                     <span id="" style="color:red">Stock : 0</span><br>
                <?php } //end of if
                    else{ ?>
                     <span id="" style="">Stock : <?php echo $i['Quantity']?></span><br> 
                <?php } //end of else?> 
                 
                <?php if($i['oldprice']!=0){ ?>
                    <span id=""><i><del><?php echo $i['oldprice']?></del></i></span><br>
                <?php } else{?><br><?php }?>
                
                <span id="">Rs <?php echo $i['price']?><span><br>
                  
        </div>
        </a> 
        <?php
            } //end of foreach
        ?>
    </section>
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

        .slider a{
            text-decoration:none;
            color:black;
        }
        #sliderDiv{
            height:220pt;
        }
        #sliderDiv:hover{
            border:1px solid skyblue;
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
          color: blue;
          margin-top:-10%;
          font-size:;
          
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