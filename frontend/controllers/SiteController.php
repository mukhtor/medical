<?php

namespace frontend\controllers;

use common\models\Employees;
use common\models\Events;
use common\models\Gallery;
use common\models\Menu;
use common\models\News;
use common\models\Position;
use common\models\Register;
use common\models\Sections;
use common\models\Services;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\data\Pagination;
use yii\helpers\VarDumper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $layout = 'admin';

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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
     * @return mixed
     */
    public function actionIndex()
    {
        $lg = Yii::$app->language;
        $sections = Sections::find()->where(['status' => 10])->all();
        $latest_news = News::find()->andWhere(['not',['title_'.$lg=>null]])->where(['status' => 10])->orderBy(['id' => SORT_DESC])->limit('6')->all();
//        var_dump($latest_news->all());
//        exit();
        return $this->render('index', [
            'sections' => $sections,
            'latest_news' => $latest_news
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
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
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }
        $register = new Register();
        if ($this->request->isPost && $register->load($this->request->post())) {
            $register->date = strtotime($_POST['Register']['date']);
            $register->save();
            Yii::$app->session->setFlash('success', 'Malumotlaringiz muvaffaqiyatli yuklandi!!!');
        }

        return $this->render('contact', [
            'register' => $register
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
//    public function actionSignup()
//    {
//        $model = new SignupForm();
//        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
//            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
//            return $this->goHome();
//        }
//
//        return $this->render('signup', [
//            'model' => $model,
//        ]);
//    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @return yii\web\Response
     * @throws BadRequestHttpException
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }

    public function actionSection()
    {
        $section = Sections::find()->where(['status' => 10])->all();
        return $this->render('sections', [
            'sections' => $section
        ]);
    }

    public function actionSectionMore($id)
    {
        $more_section = Sections::findOne(['id' => $id]);
        return $this->render('section_more', [
            'more' => $more_section
        ]);
    }

    public function actionEmployee()
    {
        $employees = Employees::find()->where(['status' => 10])->all();
        return $this->render('employees', [
            'employees' => $employees
        ]);
    }

    public function actionManagers()
    {
        $employees = Employees::find()->where(['status' => 10])->andWhere(['position_id' => 1])->all();
        return $this->render('managers', [
            'employees' => $employees
        ]);
    }

    public function actionEmployeeMore($id)
    {
        $more_employee = Employees::findOne(['id' => $id]);
        return $this->render('employee_more', [
            'more' => $more_employee
        ]);
    }

    public function actionNews()
    {
        $lg=Yii::$app->language;
        $query = News::find()->andWhere(['not',['title_'.$lg=>null]])->andFilterWhere(['status'=>10]);
        $menu = Menu::find()->where(['status' => 9])->all();

        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 3, 'pageSizeParam' => false]);
        $news = $query->offset($pages->offset)
            ->orderBy(['created_at'=>SORT_DESC])
            ->limit($pages->limit)
            ->all();
        return $this->render('news', [
            'news' => $news,
            'menu' => $menu,
            'pages' => $pages
        ]);
    }

    public function actionNewsMore($id)
    {
        $menu = Menu::find()->where(['status' => 9])->all();
        $more_news = News::findOne(['id' => $id]);
        $more_news->show_count += 1;
        $more_news->save();
        return $this->render('news_more', [
            'more' => $more_news,
            'menu' => $menu
        ]);
    }
//
//    public function actionRegister()
//    {
//        $register = new Register();
//        if ($this->request->isPost && $register->load($this->request->post())) {
//            $register->status = 9;
//            $register->date = strtotime($_POST['Register']['date']);
//            $register->save();
//            Yii::$app->session->setFlash('success', 'Malumotlaringiz muvaffaqiyatli yuklandi!!!');
//        }
//        return $this->render('register', [
//            'register' => $register
//        ]);
//    }

    public function actionGallery()
    {
        $galleries = Gallery::find()->where(['type' => 1])->all();
        return $this->render('gallery', [
            'galleries' => $galleries
        ]);
    }

    public function actionVideo()
    {
        $video = Gallery::find()->where(['type' => 2])->all();
        return $this->render('video', [
            'video' => $video
        ]);
    }

    public function actionSearch()
    {
        $query = Yii::$app->request->get('query');
        $query = News::find()->andFilterWhere(['like', 'title_uz', $query])
            ->orFilterWhere(['like', 'title_en', $query])
            ->orFilterWhere(['like', 'title_ru', $query])
            ->orFilterWhere(['like', 'text_en', $query])
            ->orFilterWhere(['like', 'text_ru', $query])
            ->orFilterWhere(['like', 'text_uz', $query]);

        $menu = Menu::find()->where(['status' => 9])->all();

        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 2, 'pageSizeParam' => false]);
        $news = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('news', [
            'news' => $news,
            'menu' => $menu,
            'pages' => $pages
        ]);
    }

    public function actionSubcat()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];
            if ($parents != null) {
                $cat_id = $parents[0];
                $out = Employees::find()->select(['id', 'name' => 'fullname_uz'])->where(['section_id' => $cat_id])->asArray()->all();
                // the getSubCatList function will query the database based on the
                // cat_id and return an array like below:
                // [
                //    ['id'=>'<sub-cat-id-1>', 'name'=>'<sub-cat-name1>'],
                //    ['id'=>'<sub-cat_id_2>', 'name'=>'<sub-cat-name2>']
                // ]
                return ['output' => $out, 'selected' => ''];
            }
        }
        return ['output' => '', 'selected' => ''];
    }

    public function actionSectionAjax(int $id)
    {
        $data = Employees::find()->where(['section_id' => $id])->all();
        return $this->render('employees', [
            'employees' => $data
        ]);
    }


    public function actionEvents()
    {
        $events = Events::find()->orderBy(['created_at'=>SORT_DESC])->all();
        return $this->render('events',[
            'events'=>$events
        ]);
    }
    public function actionEventsMore($id)
    {
        $menu = Menu::find()->where(['status' => 9])->all();

        $data = Events::findOne(['id'=>$id]);
        $data->count += 1;
        $data->save();
        return $this->render('events_more',[
            'more'=>$data,
            'menu'=>$menu
        ]);
    }
    public function actionManagement()
    {
        $data = Employees::find()->innerJoinWith('position','position.id=position_id')
            ->andWhere(['position.type'=>'1'])->all();
//        $data = Employees::find()->innerJoin('position',['position.id'=>'position_id'])
//            ->andWhere(['position.type'=>'1'])->all();
        return $this->render('management', [
            'management' => $data
        ]);
    }

    public function actionServices(int $id=null){
        if ($id){
            $services =Services::find()->where(['section_id'=>$id]);
            $countQuery = clone $services;
            $pages = new Pagination(['pageSize' => 10,'totalCount' => $countQuery->count()]);
            $models = $services->offset($pages->offset)
                ->limit($pages->limit)
                ->all();
            return $this->render('services',[
                'services'=>$models,
                'pages'=>$pages
            ]);
        }
        $services = Services::find();
        $countQuery = clone $services;
        $pages = new Pagination(['pageSize' => 10,'totalCount' => $countQuery->count()]);
        $models = $services->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('services',[
            'services'=>$models,
            'pages'=>$pages
        ]);
    }

}
