<?php
    use yii\widgets\ActiveForm;
?>

<div class="container">
    <?php $form=ActiveForm::begin()?>
    <?= $form->field($product,'name')->textInput()?>
    <?= $form->field($product,'name')->textInput()?>
    <?= $form->field($product,'name')->textarea()?>
        <button type="submit">Отправить</button>

    <?php ActiveForm::end()?>

</div>