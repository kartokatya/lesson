<?php
?>

<div class="container">
    <div class="row">
        <div class="col-md-3">

                <?php foreach($categories as $category):?>
                    <a href=""><?=$category->name?></a>
                <?php endforeach;?>
            </ol>
        </div>
        <div class="col-md-9">
<?foreach ($products as $product):?>
            <div class="col-md-4">
                <img src="/images/p6.jpg" alt="">
                <h3><?=$product->name?></h3>
                <button class="btn  btn-sm btn-info btn-ord" data-id="<?=$product->id?>">Заказать</button>
                <a href="">Просмотр</a>

            </div>
<?php endforeach;?>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>

