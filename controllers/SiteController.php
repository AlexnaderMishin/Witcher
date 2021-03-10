<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SignUp;
use app\models\Posts;
use app\models\Films;
use app\models\FilmComments;

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
        $film = films::find()->all();
        return $this->render('index', [
        'seria' => $film,
    ]);
        
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
    
###Registration###
public function actionReg(){
    $model = new SignUp();
    
        if(isset($_POST['SignUp'])){
            $model->attributes =  Yii::$app->request->post('SignUp');
            if($model->validate() && $model->signup()){
               
                // $model->signup();
                return $this->redirect(['/site/login']);
            }
        }
    
    
    return $this->render('reg', ['model' => $model]);
}

// новости и посты
public function actionNews(){
    $requests = posts::find()->all();
    return $this->render('news', [
        'request' => $requests,
    ]);
}
// стрница просмота
public function actionWatch($id){
    // $id = $_GET['id'];
    $film = films::findOne($id);
    $newComment = new FilmComments();
    
    // поиск комментарий по серии
    $comments = FilmComments::find()->where(['id_seria' => $id])->all();
    
    // передаём параметры
    return $this->render('watch', [
        'seria' => $film,
        'comments'=>$comments,
        'newComment'=>$newComment,
        
    ]);   
}


public function actionSaveComment()
{
    // проверка пользователя
    if(Yii::$app->user->isGuest){
        return $this->redirect(['/site/login']); // Вроде так. хз точно не помню сам

    }
    // если в форме что то есть
    if(Yii::$app->request->isPost){
        // создаём модель
        $model = new FilmComments();
        // загружаем  переданную постом модель
        $model->load(Yii::$app->request->post());
        // определяем пользователя
        $model->id_user = Yii::$app->user->identity->id;
        // сохраняем 
        $model->save();
        // остаёмся на странице 
        return $this->redirect(Yii::$app->request->referrer);
    }
}

}
