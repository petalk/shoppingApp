 <section class="single-item-rtl slider" id="slider">
                
                        <div>
                            <img src="<?php echo base_url();?>/images/banner16.jpg">
                        </div>
                        <div>
                            <img src="<?php echo base_url();?>/images/sense_3.jpg">
                        </div>
                        <div>
                            <img src="<?php echo base_url();?>/images/Slide5.jpg">
                        </div>
                       
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
        .slider {
            width: 80%;
            margin:30px auto;
            height:220pt;
            position:relative;
        }

        #slider{
          width:100%;
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

        .slick-prev i{
          color:skyblue;
        }
        .slick-prev:before,
        .slick-next:before {
          color: black;
          margin-top:-10%;
        }

        .slick-prev:before,
        .slick-next:before {
          color:skyblue;
          font-size:32px;
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
        .dots{
          font-size:14pt;
        }
        .slick-dots li button {
        background: url('../../../images/61b.jpg');
        text-indent: -9999px;
        overflow:hidden;
    /* more CSS */
      }
        

   </style>     
