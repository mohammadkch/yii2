<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Profile;
use app\models\RegisterForm;
use yii\debug\models\search\Db;
use app\models\User;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
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
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['get'],
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
        $this->layout = 'main';

//        $user = User::find()->leftJoin('profile', ['`user`.id' => 'profile.user_id'])->select(['user.*', 'profile.*'])->asArray()->one();
        $profile = Profile::find()->one();
        
        return $this->render('index', ['profileModel' => $profile]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = 'auth';
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

    public function actionRegister()
    {
        $this->layout = 'auth';

        $model = new RegisterForm();

        if ($model->load(Yii::$app->request->post()) ){

            if($model->validate() && $model->register() === true) {
                Yii::$app->session->addFlash('SIGNUP', 'You have successfully registered');
                return $this->redirect(['site/login']);
            } else {
                // var_dump($model->errors);
                // exit();
                Yii::$app->session->addFlash('SIGNUP', 'You have ridi' . var_dump($model->register()));
                return $this->redirect(['site/register']);
            }

        }

        return $this->render('register', [
            'model' => $model
        ]);

        // $user = new User();
        // if ($user->load(Yii::$app->request->post())) {
        //     $request = Yii::$app->request->post();

        //     $user->attributes = $request;
        //     $user->password = Yii::$app->getSecurity()->generatePasswordHash($user->password);//Hash password before storing to DB
        //     $session = Yii::$app->session;

        //     if($user->validate() && $user->save())
        //     {
        //         $session->setFlash('successMessage', 'Registration successful');
        //         return $this->redirect(['site/login']);
        //     }

        //     $session->setFlash('errorMessages', $user->getErrors());
        //     return $this->redirect(['site/register']);
        // }

        // $this->render('register');
    }

}
