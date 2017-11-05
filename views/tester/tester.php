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
                       
</section>

<div class="type-1">
  <div>
    <a href="" class="btn btn-1">
      <span class="txt">Hover me</span>
      <span class="round"><i class="fa fa-chevron-right"></i></span>
    </a>
  </div>
  <style>
      body {
  margin: 10px;
  text-align: center;
}
body > div {
  width: 33%;
  float: left;
}
body > div > div {
  margin-bottom: 15px;
}

.btn-1 {
  background-color: #F27935;
}
.btn-1 .round {
  background-color: #f59965;
}

.btn-2 {
  background-color: #00AFD1;
}
.btn-2 .round {
  background-color: #00c4eb;
}

.btn-3 {
  background-color: #5A5B5E;
}
.btn-3 .round {
  background-color: #737478;
}

a {
  text-decoration: none;
  -moz-border-radius: 30px;
  -webkit-border-radius: 30px;
  border-radius: 30px;
  padding: 12px 53px 12px 23px;
  color: #fff;
  text-transform: uppercase;
  font-family: sans-serif;
  font-weight: bold;
  position: relative;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  display: inline-block;
}
a span {
  position: relative;
  z-index: 3;
}
a .round {
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  width: 38px;
  height: 38px;
  position: absolute;
  right: 3px;
  top: 3px;
  -moz-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  -webkit-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
  z-index: 2;
}
a .round i {
  position: absolute;
  top: 50%;
  margin-top: -6px;
  left: 50%;
  margin-left: -4px;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.txt {
  font-size: 14px;
  line-height: 1.45;
}

.type-1 a:hover {
  padding-left: 48px;
  padding-right: 28px;
}
.type-1 a:hover .round {
  width: calc(100% - 6px);
  -moz-border-radius: 30px;
  -webkit-border-radius: 30px;
  border-radius: 30px;
}
.type-1 a:hover .round i {
  left: 12%;
}

.type-2 a:hover .round {
  background: none;
}
.type-2 a:hover .round i {
  left: 70%;
}

.type-3 .round {
  background: transparent;
}
.type-3 a {
  position: relative;
  overflow: hidden;
}
.type-3 a.btn-1:after {
  background-color: #f59965;
}
.type-3 a.btn-2:after {
  background-color: #00c4eb;
}
.type-3 a.btn-3:after {
  background-color: #737478;
}
.type-3 a:after {
  content: "";
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  width: 37px;
  height: 38px;
  position: absolute;
  right: 3px;
  top: 3px;
  -moz-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  -webkit-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}
.type-3 a:hover:after {
  right: 100%;
  width: 50%;
}
.type-3 a:hover i {
  margin-left: 4px;
}
  </style>    