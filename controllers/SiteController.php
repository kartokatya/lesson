<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }





    public function actionPage(){
        $text="Курс по Yii2 Framework";
        return $this->render('page',[
            'text_name'=>$text
        ]);

    }
      public function actionProduct($id){
            $product=Product::findOne(['id'=>$id]);


            if (!$product){
                throw new NotFoundHttpException('404');
            }

            return $this->render('product',[
                'product'=>$product
            ]);

      }


   /* public function actionCategory($category){
        $category = Category::find()->where([
            'active'=>1,
            'name'=>$category
        ])->one();
        $product = Product::find()->where(['category_id'=>$category->id])->all();
        return $this->render('category', [
            'category'=>$category,
            'products'=>$product
        ]);
        print_r($category);
    }*/

    public function actionProductList($cat=null)
    {
        $products=Product::find();
        if($cat){
            $products=Product::find()->where(['category_id'=>$cat])->all();
        }
        $products=$products->all();
       // $products = Product::find()->select(['id'])->column();

        $categories=Category::find()->all();
        return $this->render('product_list',[
            'products'=>$products,
            'categories'=>$categories
        ]);
    }

    public function actionSignUp(){
        $user=new User();

        if ($user->load(Yii::$app->request->post())){
            $user->setPassword($user->password);
            $user->save();
            return $this->redirect(['site/login']);
        }
        $this->render('sign-up',[
            'user'=>$user
        ]);
    }
}


