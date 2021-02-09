<?php

namespace app\controllers;

use Yii;
use app\models\Films;
use app\models\FilmsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\UploadForm;


/**
 * FilmsController implements the CRUD actions for Films model.
 */
class FilmsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Films models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FilmsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Films model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Films model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
   public function actionCreate()
    {
        $model = new Films();
        if(Yii::$app->request->isPost){
            $model->preview = UploadedFile::getInstance($model, 'preview');
            $fileName = $model->preview->baseName . '.' . $model->preview->extension;
            $allowType = ['png', 'jpg'];
            $ext = strtolower($model->preview->extension);
            if(!in_array($ext, $allowType)){

                Yii::$app->session->setFlash('danger', "Не верный формат изображения");
                return $this->render('create', [
                'model' => $model,
                ]);
            }else{
                $model->preview->saveAs('@app/web/uploads/preview/' . $fileName);
                $model->attributes = \Yii::$app->request->post('Films');
                $model->preview = $fileName;
                $model->save();

                return $this->redirect(['view', 'id' => $model->id]);
            }
            

        }
        return $this->render('create', [
            'model' => $model,
        ]);

        

        
    }

    /**
     * Updates an existing Films model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Films model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Films model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Films the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Films::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
