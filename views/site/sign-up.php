<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 02.06.2018
 * Time: 14:47
 * @var $user app/models/User
 */
use yii\widgets\ActiveForm;

?>

<div class="container">
    <h1>Регистрация пользователя</h1>
    <form action="">
        <?php  $form = ActiveForm::begin()?>

        <?= $form->field($user,'first_name')->input()?>
        <?= $form->field($user,'last_name')->input('text')?>
        <?= $form->field($user,'email')->input('email')?>
        <?= $form->field($user,'password')->passwordInput()?>
        <button type="submit" >Регистрация</button>

        <?php ?>
        <?php ActiveForm::end()?>
    </form>
</div>
