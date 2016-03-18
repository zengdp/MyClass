<?php

namespace app\controllers;

use Yii;
use yii\data\Sort;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\News;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;
use yii\db\ActiveQuery;

class SiteController extends Controller
{
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

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

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

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionForum()
    {
        return $this->render('forum');
    }

    public function actionNews()
    {
        $sort = new Sort([
           'attributes' => [
               'title',
               'date',
               'id' =>SORT_DESC,
           ],
        ]);
        $pagination=new Pagination([
            'totalCount'=>News::find()->count(),
        ]);
        $posts=News::find()->orderBy($sort->orders)->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('news',['posts'=>$posts,'pagination'=>$pagination,'sort'=>$sort,]);
    }

    public function actionPost($id){
        $post=News::find()->andWhere(['id'=>$id])->one();
        if(!$post){
            throw new NotFoundHttpException('页面不存在');
        }
        return $this->render('post',['post'=>$post]);
    }

}
