<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Restabook -   Responsive Restaurant / Cafe / Pub Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <!-- lodaer  -->
        <div class="loader-wrap">
            <div class="loader-item">
                <div class="cd-loader-layer" data-frame="25">
                    <div class="loader-layer"></div>
                </div>
                <span class="loader"></span>
            </div>
        </div>
        <!-- loader end  -->
        <!-- main start  -->
        <div id="main">
            <!-- header  -->
             <?php require_once 'header.php'; ?>
            <!--header end -->	
            <!-- wrapper  -->	
            <div id="wrapper">
                <!-- content  -->	
                <div class="content">
                    <!--  section  -->  
                    <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="images/bg/1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="section-title">
                                <h4>Special menu offers.</h4>
                                <h2>Discover Our menu</h2>
                                <div class="dots-separator fl-wrap"><span></span></div>
                            </div>
                        </div>
                        <div class="brush-dec"></div>
                    </section>
                    <!--  section  end-->  
                    <!--  section  -->   
                    <section class="small-top-padding">
                        <div class="brush-dec2 brush-dec_bottom"></div>
                        <div class="container">
                            <!--  hero-menu_header  end-->
                              <!--  section  -->
                    <section class="parallax-section dark-bg hidden-section" data-scrollax-parent="true">
                        <div class="brush-dec2"></div>
                        <div class="brush-dec"></div>
                        <div class="bg par-elem bg_tabs"   data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="cd-tabs-layer" data-frame="10">
                            <div class="tabs-layer"></div>
                        </div>
                        <div class="overlay op7"></div>
                        <div class="container">
                            <div class="section-title">
                                <h4>Special menu offers.</h4>
                                <h2>Enjoy Restaurants Specialties</h2>
                                <div class="dots-separator fl-wrap"><span></span></div>
                            </div>
                            <!--  hero-menu_header  end-->
                            <div class="hero-menu tabs-act fl-wrap">
                                <div class="row">
                                    <!--  hero-menu_header-->
<div class="col-md-3">
    <div class="hero-menu_header fl-wrap">
        <ul class="tabs-menu     no-list-style change_bg">
            <li class="current"><a href="#tab-0" >ZAFRAN Specials BBQ</a></li>
            <li><a href="#tab-1" >APPETIZERS</a></li>
            <li><a href="#tab-2" >MAIN COURSE GOAT</a></li>
            <li><a href="#tab-3" >MUTTON/LAMB</a></li>
            <li><a href="#tab-4" >BEEF</a></li>
            <li><a href="#tab-5" >CHICKEN</a></li>
            <li><a href="#tab-6" >PESHAWAREE NAMAK MANDI/ Clay oven (TANDOORI)barbecue</a></li>
            <li><a href="#tab-7" >RICE DISHES/DUM
 BIRYANI</a></li>

            <li><a href="#tab-8" >BBQ TO GO</a></li>
  <li><a href="#tab-9" >DUM BIRYANI FAMILY PACK
GROUP OF (4 PEOPLE)</a></li>
  <li><a href="#tab-10" >VEGETARIAN</a></li>
  <li><a href="#tab-11" >NAAN</a></li>
  <li><a href="#tab-12" >Drinks</a></li>
  <li><a href="#tab-13" >Desserts</a></li>
  <li><a href="#tab-14" >KIDS MENU </a></li>



        </ul>
    </div>
</div>
                                    <!--  hero-menu_header  end-->
                                    <!--  hero-menu_content   -->
<div class="col-md-9">
    <div class="hero-menu_content fl-wrap">
        <div class="tabs-container">
           
                <!--tab -->
                <?php 
                $link           = "js/a.json";
        $json           = file_get_contents($link);

  $data = json_decode($json, true);
    
   //echo(sizeof($data));
$array = (is_object($data)) ? array($data) : (array) $data;
//echo($array[0][0]['title']);
  for ($x=0;$x<sizeof($array);$x++) {
    $value = $array[$x];

    ?>
     <div class="tab">
        <?if ($x==0){
?>
<div id='<?echo 'tab-'.$x;?>' class="tab-content first-tab">
<?
        }
        else{
            ?>
<div id='<?echo 'tab-'.$x;?>' class="tab-content">
            <?
        }
        ?>
    

 <?   for($i=0;$i<sizeof($value);$i++){


  
?>
                
                    <!-- header-menu-item-->
                    <div class="hero-menu-item">
                        <div class="hero-menu-item-title fl-wrap">
                            <h6><span><?echo $i+1;?></span><?echo $value[$i]['title']?></h6>
                            <div class="hmi-dec"></div>
                            <span class="hero-menu-item-price"><?echo $value[$i]['price']?></span>
                        </div>
                        <div class="hero-menu-item-details">
                            <p><?echo $value[$i]['description']?></p>
                        </div>
                    </div>
                    <!-- header-menu-item end-->
                                                                          
               

                <?

    }
    ?>
      </div>
     </div>
     <?
  }

?>


                <!--tab end -->
                                                           
          
            <!--tabs end -->
        </div>
    </div>
</div>
                                    <!--  hero-menu_content end  -->
                                    <div class="clearfix"></div>
                                    <a href="menu.html" class="hero_btn" style="margin-left:30px;">View Full Menu <i class="fal fa-long-arrow-right"></i></a>
                                    <a href="#" class="pdf-link">Dowload PDF</a>
                                </div>
                            </div>
                            <!--  hero-menu  end-->
                        </div>
                    </section>
                    <!--  section  end-->
                            <!--  hero-menu  end-->                                
                            <div class="clearfix"></div>
                            <div class="bold-separator bold-separator_dark"><span></span></div>
                            <div class="clearfix"></div>
                            <a href="#" class="btn  ">Download menu in PDF<i class="fal fa-long-arrow-right"></i></a>                       
                        </div>
                        <div class="section-bg">
                            <div class="bg"  data-bg="images/bg/dec/section-bg.png"></div>
                        </div>
                    </section>
                </div>
                <!-- content end  -->
                <!-- footer -->
                <div class="height-emulator fl-wrap"></div>
                <footer class="fl-wrap dark-bg fixed-footer">
                    <div class="container">
                        <div class="footer-top fl-wrap">
                            <a href="index.html" class="footer-logo"><img src="images/logo2.png" alt=""></a>
                            <div class="lang-wrap"><a href="#" class="act-lang">En</a><span>/</span><a href="#">Fr</a></div>
                            <div class="footer-social">
                                <span class="footer-social-title">Follow us :</span>
                                <ul>
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- footer-widget-wrap -->
                        <div class="footer-widget-wrap fl-wrap">
                            <div class="row">
                                <!-- footer-widget -->
                                <div class="col-md-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">About us</div>
                                        <div class="footer-widget-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eaque ipsa quae ab illo inventore veritatis et quasi architecto. </p>
                                            <a href="about.html" class="footer-widget-content-link">Read more</a>                                                    	
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-md-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Contact info  </div>
                                        <div class="footer-widget-content">
                                            <div class="footer-contacts footer-box fl-wrap">
                                                <ul>
                                                    <li><span>Call :</span><a href="#">+489756412322</a> , <a href="#">+56897456123</a></li>
                                                    <li><span>Write  :</span><a href="#">yourmail@domain.com</a></li>
                                                    <li><span>Find us : </span><a href="#">USA 27TH Brooklyn NY</a></li>
                                                </ul>
                                            </div>
                                            <a href="contacts.html" class="footer-widget-content-link">Get in Touch</a>                                                    	
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-md-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Subscribe</div>
                                        <div class="footer-widget-content">
                                            <div class="subcribe-form fl-wrap">
                                                <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                                <form id="subscribe" class="fl-wrap">
                                                    <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                                    <button type="submit" id="subscribe-button" class="subscribe-button color-bg">Send </button>
                                                    <label for="subscribe-email" class="subscribe-message"></label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                            </div>
                        </div>
                        <!-- footer-widget-wrap end-->
                        <div class="footer-bottom fl-wrap">
                            <div class="copyright">&#169; Restabook 2020 . All rights reserved. </div>
                            <div class="to-top"><span>Back To Top </span><i class="fal fa-angle-double-up"></i></div>
                        </div>
                    </div>
                </footer>
                <!-- footer end-->                                
            </div>
            <!-- wrapper end -->
            <!-- reservation-modal-wrap-->          
            <div class="reservation-modal-wrap">
                <div class="reserv-overlay crm">
                    <div class="cd-reserv-overlay-layer" data-frame="25">
                        <div class="reserv-overlay-layer"></div>
                    </div>
                </div>
                <div class="reservation-modal-container bot-element">
                    <div class="reservation-modal-item fl-wrap">
                        <div class="close-reservation-modal crm"><i class="fal fa-times"></i></div>
                        <div class="reservation-bg"></div>
                        <div class="section-title">
                            <h4>Don't forget to book a table</h4>
                            <h2>Table Reservations</h2>
                            <div class="dots-separator fl-wrap"><span></span></div>
                        </div>
                        <div class="reservation-wrap">
                            <div id="reserv-message"></div>
                            <form  class="custom-form" action="php/reservation.php" name="reservationform" id="reservationform">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" name="name" id="name" placeholder="Your Name *" value=""/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text"  name="email" id="email" placeholder="Email Address *" value=""/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text"  name="phone" id="phone" placeholder="Phone *" value=""/>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="fl-wrap">
                                                <select name="numperson" id="persons" data-placeholder="Persons" class="chosen-select no-search-select">
                                                    <option data-display="Persons">Any</option>
                                                    <option value="1">1 Person</option>
                                                    <option value="2">2 People</option>
                                                    <option value="3">3 People</option>
                                                    <option value="4">4 People</option>
                                                    <option value="5">5 People</option>
                                                    <option value="Banquet">Banquet</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-6">
                                            <div class="date-container2 fl-wrap">
                                                <input type="text" placeholder="Date" id="res_date"     name="resdate"   value=""/>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="fl-wrap">
                                                <select name="restime" id="resrv-time" data-placeholder="Time" class="chosen-select no-search-select">
                                                    <option data-display="Time">Any</option>
                                                    <option value="10:00am">10:00 am</option>
                                                    <option value="11:00am">11:00 am</option>
                                                    <option value="12:00pm">12:00 pm</option>
                                                    <option value="1:00pm">1:00 pm</option>
                                                    <option value="2:00pm">2:00 pm</option>
                                                    <option value="3:00pm">3:00 pm</option>
                                                    <option value="4:00pm">4:00 pm</option>
                                                    <option value="5:00pm">5:00 pm</option>
                                                    <option value="6:00pm">6:00 pm</option>
                                                    <option value="7:00pm">7:00 pm</option>
                                                    <option value="8:00pm">8:00 pm</option>
                                                    <option value="9:00pm">9:00 pm</option>
                                                    <option value="10:00pm">10:00 pm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <textarea name="comments"  id="comments" cols="30" rows="3" placeholder="Your Message:"></textarea>
                                    <div class="clearfix"></div>
                                    <button class="btn color-bg" id="reservation-submit">Reserve Table  <i class="fal fa-long-arrow-right"></i></button>
                                </fieldset>
                            </form>
                        </div>
                        <!-- reservation-wrap end-->
                    </div>
                </div>
            </div>
            <!-- reservation-modal-wrap end-->  
            <!-- cursor-->
            <div class="element">
                <div class="element-item"></div>
            </div>
            <!-- cursor end-->                                                    
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="js/jquery.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/scripts.js"></script>
        <script type="text/javascript" src="js/a.js"></script>
        <script type="text/javascript">
           // var mydata = JSON.parse(data);
           
            
alert(txt.data.length);
        </script>
    </body>
</html>