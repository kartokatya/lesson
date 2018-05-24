<?php

 /*@this yii\web\view*/
 $this->registerCssFile('css/flexslider.css',['position'=>\yii\web\View::POS_READY]);
$this->registerCssFile('css/jquery.flexslider.css',['position'=>\yii\web\View::POS_READY]);
$this->title=$roduct->title?:"Товары в Москве";

?>


<div class="single-sec">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Products</li>
        </ol>
        <!-- start content -->
        <div class="col-md-9 det">
            <div class="single_left">
                <div class="flexslider">
                    <ul class="slides">
                        <li data-thumb="images/s11.jpeg">
                            <img src="images/s11.jpeg" />
                        </li>
                        <li data-thumb="images/s22.jpeg">
                            <img src="images/s22.jpeg" />
                        </li>
                        <li data-thumb="images/s33.jpeg">
                            <img src="images/s33.jpeg" />
                        </li>
                        <li data-thumb="images/s44.jpeg">
                            <img src="images/s44.jpeg" />
                        </li>
                    </ul>
                </div>
                <!-- FlexSlider -->
                <script defer src="js/jquery.flexslider.js"></script>
                <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

                <script>
                    // Can also be used with $(document).ready()
                    $(window).load(function() {
                        $('.flexslider').flexslider({
                            animation: "slide",
                            controlNav: "thumbnails"
                        });
                    });
                </script>
            </div>
            <div class="single-right">
                <h3><?=$product->name?></h3>
                <div class="id"><h4>ID: SB2379</h4></div>
                <form action="" class="sky-form">
                    <fieldset>
                        <section>
                            <div class="rating">
                                <input type="radio" name="stars-rating" id="stars-rating-5">
                                <label for="stars-rating-5"><i class="icon-star"></i></label>
                                <input type="radio" name="stars-rating" id="stars-rating-4">
                                <label for="stars-rating-4"><i class="icon-star"></i></label>
                                <input type="radio" name="stars-rating" id="stars-rating-3">
                                <label for="stars-rating-3"><i class="icon-star"></i></label>
                                <input type="radio" name="stars-rating" id="stars-rating-2">
                                <label for="stars-rating-2"><i class="icon-star"></i></label>
                                <input type="radio" name="stars-rating" id="stars-rating-1">
                                <label for="stars-rating-1"><i class="icon-star"></i></label>
                                <div class="clearfix"></div>
                            </div>
                        </section>
                    </fieldset>
                </form>
                <div class="cost">
                    <div class="prdt-cost">
                        <ul>
                            <li>MRP: <del>Rs 55000</del></li>
                            <li>Sellling Price:</li>
                            <li class="active">Rs 35000</li>
                            <a href="#">BUY NOW</a>
                        </ul>
                    </div>
                    <div class="check">
                        <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Enter pin code for delivery & availability</p>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Pin code">
                            </div>
                            <button type="submit" class="btn btn-default">Verify</button>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="item-list">
                    <ul>
                        <li>Material: Silver,Gold</li>
                        <li>Color: Red</li>
                        <li>Type: Earring & Pendant Set</li>
                        <li>Brand: American Diamond</li>
                        <li><a href="#">Click here for more details</a></li>
                    </ul>
                </div>
                <div class="single-bottom1">
                    <h6>Details</h6>
                    <p class="prod-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam. Ut wisi enim ad minim veniam iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="sofaset-info">
               <?=$product->description?>
            </div>
            <!---->
            <div class="product-table">
                <h3>Specifications of American Diamond Famina Ruby Copper, Brass Jewel Set</h3>
                <div class="item-sec">
                    <h4>Features</h4>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td><p>Pearl Type</p></td>
                            <td><p>Plastic</p></td>
                        </tr>
                        <tr>
                            <td><p>Color</p></td>
                            <td><p>Gold</p></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="item-sec">
                    <h4>General</h4>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td><p>Base Material</p></td>
                            <td><p>Alloy</p></td>
                        </tr>
                        <tr>
                            <td><p>Brand</p></td>
                            <td><p>Ethnic Jewels</p></td>
                        </tr>
                        <tr>
                            <td><p>Precious/Artificial Jewellery</p></td>
                            <td><p>Fashion Jewellery</p></td>
                        </tr>
                        <tr>
                            <td><p>Model Number</p></td>
                            <td><p>ID 4523</p></td>
                        </tr>
                        <tr>
                            <td><p>Occasion</p></td>
                            <td><p>Wedding & Engagement</p></td>
                        </tr>
                        <tr>
                            <td><p>Type</p></td>
                            <td><p>Earring & Necklace Set</p></td>
                        </tr>
                        <tr>
                            <td><p>Ideal For</p></td>
                            <td><p>Women</p></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="arrivals">
                <h3>Related Products</h3>
                <div class="arrival-grids">
                    <ul id="flexiselDemo1">
                        <li>
                            <a href="product.html"><img src="images/p2.jpg" alt=""/>
                                <div class="arrival-info">
                                    <h4>Jewellerys #1</h4>
                                    <p>Rs 12000</p>
                                    <span class="pric1"><del>Rs 18000</del></span>
                                    <span class="disc">[12% Off]</span>
                                </div>
                                <div class="viw">
                                    <a href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Quick View</a>
                                </div></a>
                        </li>
                        <li>
                            <a href="product.html"><img src="images/p3.jpg" alt=""/>
                                <div class="arrival-info">
                                    <h4>Jewellerys #1</h4>
                                    <p>Rs 14000</p>
                                    <span class="pric1"><del>Rs 15000</del></span>
                                    <span class="disc">[10% Off]</span>
                                </div>
                                <div class="viw">
                                    <a href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Quick View</a>
                                </div></a>
                        </li>
                        <li>
                            <a href="product.html"><img src="images/p4.jpg" alt=""/>
                                <div class="arrival-info">
                                    <h4>Jewellerys #1</h4>
                                    <p>Rs 4000</p>
                                    <span class="pric1"><del>Rs 8500</del></span>
                                    <span class="disc">[45% Off]</span>
                                </div>
                                <div class="viw">
                                    <a href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Quick View</a>
                                </div></a>
                        </li>
                        <li>
                            <a href="product.html"> <img src="images/p5.jpg" alt=""/>
                                <div class="arrival-info">
                                    <h4>Jewellerys #1</h4>
                                    <p>Rs 18000</p>
                                    <span class="pric1"><del>Rs 21000</del></span>
                                    <span class="disc">[8% Off]</span>
                                </div>
                                <div class="viw">
                                    <a href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Quick View</a>
                                </div></a>
                        </li>
                    </ul>
                    <script type="text/javascript">
                        $(window).load(function() {
                            $("#flexiselDemo1").flexisel({
                                visibleItems: 4,
                                animationSpeed: 1000,
                                autoPlay: true,
                                autoPlaySpeed: 3000,
                                pauseOnHover:true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint:480,
                                        visibleItems: 1
                                    },
                                    landscape: {
                                        changePoint:640,
                                        visibleItems: 2
                                    },
                                    tablet: {
                                        changePoint:768,
                                        visibleItems: 3
                                    }
                                }
                            });
                        });
                    </script>
                    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
                </div>
            </div>
            <!---->
        </div>
        <div class="rsidebar span_1_of_left">
            <section  class="sky-form">
                <div class="product_right">
                    <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categories</h4>
                    <div class="tab1">
                        <ul class="place">
                            <li class="sort">Fashion</li>
                            <li class="by"><img src="images/do.png" alt=""></li>
                            <div class="clearfix"> </div>
                        </ul>
                        <div class="single-bottom">
                            <a href="#"><p>Gifts</p></a>
                            <a href="#"><p>Flowers</p></a>
                            <a href="#"><p>Shoes</p></a>
                            <a href="#"><p>Suits</p></a>
                            <a href="#"><p>Dresses</p></a>
                        </div>
                    </div>
                    <div class="tab2">
                        <ul class="place">
                            <li class="sort">Women Ethnic Wear</li>
                            <li class="by"><img src="images/do.png" alt=""></li>
                            <div class="clearfix"> </div>
                        </ul>
                        <div class="single-bottom">
                            <a href="#"><p>Sarees & More</p></a>
                            <a href="#"><p>Salwar Suits</p></a>
                        </div>
                    </div>
                    <div class="tab3">
                        <ul class="place">
                            <li class="sort">Personal Care</li>
                            <li class="by"><img src="images/do.png" alt=""></li>
                            <div class="clearfix"> </div>
                        </ul>
                        <div class="single-bottom">
                            <a href="#"><p>Make Up</p></a>
                        </div>
                    </div>
                    <div class="tab4">
                        <ul class="place">
                            <li class="sort">Jewellery</li>
                            <li class="by"><img src="images/do.png" alt=""></li>
                            <div class="clearfix"> </div>
                        </ul>
                        <div class="single-bottom">
                            <a href="#"><p>Fashion</p></a>
                            <a href="#"><p>Precious</p></a>
                            <a href="#"><p>1 Gram Gold</p></a>
                        </div>
                    </div>
                    <div class="tab5">
                        <ul class="place">
                            <li class="sort">Specials</li>
                            <li class="by"><img src="images/do.png" alt=""></li>
                            <div class="clearfix"> </div>
                        </ul>
                        <div class="single-bottom">
                            <a href="#"><p>Cakes</p></a>
                            <a href="#"><p>Party Items</p></a>
                            <a href="#"><p></p></a>
                            <a href="#"><p>Relax Chairs</p></a>
                        </div>
                    </div>

                    <!--script-->
                   <?php
$script=<<< JS
                        $(document).ready(function(){
                            $(".tab1 .single-bottom").hide();
                            $(".tab2 .single-bottom").hide();
                            $(".tab3 .single-bottom").hide();
                            $(".tab4 .single-bottom").hide();
                            $(".tab5 .single-bottom").hide();

                            $(".tab1 ul").click(function(){
                                $(".tab1 .single-bottom").slideToggle(300);
                                $(".tab2 .single-bottom").hide();
                                $(".tab3 .single-bottom").hide();
                                $(".tab4 .single-bottom").hide();
                                $(".tab5 .single-bottom").hide();
                            })
                            $(".tab2 ul").click(function(){
                                $(".tab2 .single-bottom").slideToggle(300);
                                $(".tab1 .single-bottom").hide();
                                $(".tab3 .single-bottom").hide();
                                $(".tab4 .single-bottom").hide();
                                $(".tab5 .single-bottom").hide();
                            })
                            $(".tab3 ul").click(function(){
                                $(".tab3 .single-bottom").slideToggle(300);
                                $(".tab4 .single-bottom").hide();
                                $(".tab5 .single-bottom").hide();
                                $(".tab2 .single-bottom").hide();
                                $(".tab1 .single-bottom").hide();
                            })
                            $(".tab4 ul").click(function(){
                                $(".tab4 .single-bottom").slideToggle(300);
                                $(".tab5 .single-bottom").hide();
                                $(".tab3 .single-bottom").hide();
                                $(".tab2 .single-bottom").hide();
                                $(".tab1 .single-bottom").hide();
                            })
                            $(".tab5 ul").click(function(){
                                $(".tab5 .single-bottom").slideToggle(300);
                                $(".tab4 .single-bottom").hide();
                                $(".tab3 .single-bottom").hide();
                                $(".tab2 .single-bottom").hide();
                                $(".tab1 .single-bottom").hide();
                            })
                        });
JS;
$this->registerJs($script,yii\web\View::POS_READY);
                    ?>
                    <!-- script -->
            </section>
            <section  class="sky-form">
                <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>DISCOUNTS</h4>
                <div class="row row1 scroll-pane">
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Upto - 10% (20)</label>
                    </div>
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>40% - 50% (5)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
                    </div>
                </div>
            </section>
            <section  class="sky-form">
                <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Price</h4>
                <ul class="dropdown-menu1">
                    <li><a href="">
                            <div id="slider-range"></div>
                            <input type="text" id="amount" style="border: 0; font-weight: NORMAL;   font-family: 'Arimo', sans-serif;" />
                        </a></li>
                </ul>
            </section>
            <!---->
            <script type="text/javascript" src="js/jquery-ui.min.js"></script>
            <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
            <script type='text/javascript'>//<![CDATA[
                $(window).load(function(){
                    $( "#slider-range" ).slider({
                        range: true,
                        min: 0,
                        max: 400000,
                        values: [ 8500, 350000 ],
                        slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                        }
                    });
                    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

                });//]]>
            </script>
            <!---->
            <section  class="sky-form">
                <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Type</h4>
                <div class="row row1 scroll-pane">
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>1 Gram Gold (30)</label>
                    </div>
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Gold Plated   (30)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Platinum      (30)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Silver        (30)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Jewellery Sets  (30)</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Stone Items   (30)</label>
                    </div>
                </div>
            </section>
            <section  class="sky-form">
                <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Brand</h4>
                <div class="row row1 scroll-pane">
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Akasana Collectio</label>
                    </div>
                    <div class="col col-4">
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Colori</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Crafts Hub</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Jisha</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Karatcart</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Titan</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Amuktaa</label>
                    </div>
                </div>
            </section>
        </div>
        <div class="clearfix"></div>
    </div>
</div>