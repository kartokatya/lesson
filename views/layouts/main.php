<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html >

<html lang="<?= Yii::$app->language ?>">

<head>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- start menu -->

    <script>$(document).ready(function(){$(".memenu").memenu();});</script>
    <!-- /start menu -->
</head>
<body>
<?php $this->beginBody() ?>
<!--header-->
<div class="top_bg">
    <div class="container">
        <div class="header_top-sec">
            <div class="top_right">
                <ul>
                    <li><a href="#">help</a></li>|
                    <li><a href="contact.html">Contact</a></li>|
                    <li><a href="login.html">Track Order</a></li>
                </ul>
            </div>
            <div class="top_left">
                <ul>
                    <li class="top_link">Email:<a href="mailto:info@example.com">mail@example.com</a></li>|
                    <li class="top_link"><a href="login.html">My Account</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="header-top">
    <div class="header-bottom">
        <div class="container">
            <div class="logo">
                <a href="index.html"><h1>Wedding Store</h1></a>
            </div>
            <!---->

            <div class="top-nav">
                <ul class="memenu skyblue"><li class="active"><a href="index.html">Home</a></li>
                    <li class="grid"><a href="#">Wedding</a>
                        <div class="mepanel">
                            <div class="row">
                                <div class="col1 me-one">
                                    <h4>Shop</h4>
                                    <ul>
                                        <li><a href="product.html">New Arrivals</a></li>
                                        <li><a href="product.html">Men</a></li>
                                        <li><a href="product.html">Women</a></li>
                                        <li><a href="product.html">Accessories</a></li>
                                        <li><a href="product.html">Kids</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="product.html">Brands</a></li>
                                        <li><a href="product.html">My Shopping Bag</a></li>
                                    </ul>
                                </div>
                                <div class="col1 me-one">
                                    <h4>Style Zone</h4>
                                    <ul>
                                        <li><a href="product.html">Men</a></li>
                                        <li><a href="product.html">Women</a></li>
                                        <li><a href="product.html">Brands</a></li>
                                        <li><a href="product.html">Kids</a></li>
                                        <li><a href="product.html">Accessories</a></li>
                                        <li><a href="product.html">Style Videos</a></li>
                                    </ul>
                                </div>
                                <div class="col1 me-one">
                                    <h4>Popular Brands</h4>
                                    <ul>
                                        <li><a href="product.html">Levis</a></li>
                                        <li><a href="product.html">Persol</a></li>
                                        <li><a href="product.html">Nike</a></li>
                                        <li><a href="product.html">Edwin</a></li>
                                        <li><a href="product.html">New Balance</a></li>
                                        <li><a href="product.html">Jack & Jones</a></li>
                                        <li><a href="product.html">Paul Smith</a></li>
                                        <li><a href="product.html">Ray-Ban</a></li>
                                        <li><a href="product.html">Wood Wood</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="grid"><a href="#">Bride Style</a>
                        <div class="mepanel">
                            <div class="row">
                                <div class="col1 me-one">
                                    <h4>Shop</h4>
                                    <ul>
                                        <li><a href="product.html">New Arrivals</a></li>
                                        <li><a href="product.html">Men</a></li>
                                        <li><a href="product.html">Women</a></li>
                                        <li><a href="product.html">Accessories</a></li>
                                        <li><a href="product.html">Kids</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="product.html">Brands</a></li>
                                        <li><a href="product.html">My Shopping Bag</a></li>
                                    </ul>
                                </div>
                                <div class="col1 me-one">
                                    <h4>Style Zone</h4>
                                    <ul>
                                        <li><a href="product.html">Men</a></li>
                                        <li><a href="product.html">Women</a></li>
                                        <li><a href="product.html">Brands</a></li>
                                        <li><a href="product.html">Kids</a></li>
                                        <li><a href="product.html">Accessories</a></li>
                                        <li><a href="product.html">Style Videos</a></li>
                                    </ul>
                                </div>
                                <div class="col1 me-one">
                                    <h4>Popular Brands</h4>
                                    <ul>
                                        <li><a href="product.html">Levis</a></li>
                                        <li><a href="product.html">Persol</a></li>
                                        <li><a href="product.html">Nike</a></li>
                                        <li><a href="product.html">Edwin</a></li>
                                        <li><a href="product.html">New Balance</a></li>
                                        <li><a href="product.html">Jack & Jones</a></li>
                                        <li><a href="product.html">Paul Smith</a></li>
                                        <li><a href="product.html">Ray-Ban</a></li>
                                        <li><a href="product.html">Wood Wood</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="grid"><a href="typo.html">Typo</a></li>
                    <li class="grid"><a href="contact.html">Contact</a></li>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <!---->
            <div class="cart box_1">
                <a href="checkout.html">
                    <h3> <div class="total">
                            <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div>
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></h3>
                </a>
                <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
            <!---->
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<?= Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
<?= Alert::widget() ?>
<?= $content ?>


<!---->
<div class="footer">
    <div class="container">
        <div class="ftr-grids">
            <div class="col-md-3 ftr-grid">
                <h4>About Us</h4>
                <ul>
                    <li><a href="#">Who We Are</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#">Our Sites</a></li>
                    <li><a href="#">In The News</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
            <div class="col-md-3 ftr-grid">
                <h4>Customer service</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Cancellation</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Bulk Orders</a></li>
                    <li><a href="#">Buying Guides</a></li>
                </ul>
            </div>
            <div class="col-md-3 ftr-grid">
                <h4>Your account</h4>
                <ul>
                    <li><a href="account.html">Your Account</a></li>
                    <li><a href="#">Personal Information</a></li>
                    <li><a href="#">Addresses</a></li>
                    <li><a href="#">Discount</a></li>
                    <li><a href="#">Track your order</a></li>
                </ul>
            </div>
            <div class="col-md-3 ftr-grid">
                <h4>Categories</h4>
                <ul>
                    <li><a href="#">> Wedding</a></li>
                    <li><a href="#">> Jewellerys</a></li>
                    <li><a href="#">> Shoes</a></li>
                    <li><a href="#">> Flowers</a></li>
                    <li><a href="#">> Cakes</a></li>
                    <li><a href="#">...More</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---->
<div class="copywrite">
    <div class="container">
        <p>Copyright © 2015 Wedding Store. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>