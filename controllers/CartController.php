<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 02.06.2018
 * Time: 12:38
 */
namespace app\controllers;


use Yii;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\web\Controller;


class CartController extends Controller {



    public function actionAdd(){
        if(\Yii::$app->request->isAjax){
            return \Yii::$app->response->format=Response::FORMAT_JSON;
            $cart=\Yii::$app->session->get('cart')?:[];

             $product_ids = array_keys($cart);

             $id = Yii::$app->request->post('id');

             if (in_array($id,$products_ids)){
                 $cart[$id]++;
             }else{
                 $cart[$id] = 1;
             }

             Yii::$app->session->set('cart',$cart);

            return $cart;
        }

        throw new NotFoundHttpException('Доступ запрещен',404);
    }
}