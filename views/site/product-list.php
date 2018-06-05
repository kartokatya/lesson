<?php
/**
 * Created by PhpStorm.
 * User: Belka
 * Date: 01.06.2018
 * Time: 22:47
 */
?>
 <h2>Our Products</h2>
        <div class="col-md-3">
            <ul>
            <?php foreach ($categories as $category) { ?>
                <li><a href="<?= Url::to(['/site/product-list', 'id' => $category->id]) ?>"><?= $category->name ?></a></li>
            <?php } ?>
            </ul>
        </div>
        <div class="col-md-9 product-model-sec">
            <?php foreach ($products as $product) { ?>
                <div class="product-grid love-grid">
                    <a href="<?= Url::to(['/site/product', 'id' => $product->id]); ?>">
                        <div class="more-product"><span> </span></div>
                        <div class="product-img b-link-stripe b-animate-go  thickbox">
                            <img src="<?= $product->image ?>" class="img-responsive" alt=""/>
                            <div class="b-wrapper">
                                <h4 class="b-animate b-from-left  b-delay03">
                                    <button class="btns"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>Quick View</button>
                                </h4>
                            </div>
                        </div>
                    </a>
                    <div class="product-info simpleCart_shelfItem">
                        <div class="product-info-cust prt_name">
                            <h4><?= $product->name ?></h4>
                            <p>ID: <?= $product->id ?></p>
                            <span class="item_price">$<?= $product->price ?></span>
                            <input type="text" class="item_quantity" value="1" />
                            <input type="button" class="item_add items" value="ADD" data-prod-id="<?= $product->id ?>"
                                   data-url="<?= Url::to(['cart/add'])?>">
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            <?php } ?>
        </div>