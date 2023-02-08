<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

$url = Yii::$app->urlManager;
?>

<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
    <div class="container">
        <div class="content-center">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-8">
                    <div class="intro py-md-4 px-md-4">

                                            <h1 class="my-4 text-center text-sm-right">مراحل سئو و بهینه سازی وبسایت را خودتان انجام دهید در این
                                                حین با جدیدترین الگوریتم ها آشنا شوید</h1>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                                                مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                        <div class="intro-footer mt-2 mt-md-4">
                            <ul class="social-list text-center mb-3 mb-md-0 text-md-right">
                                <li><a href="https://www.facebook.com/kachap" target="_blank"><i
                                                class="icofont icofont-lg">facebook</i></a>
                                </li>
                                <li><a href="https://twitter.com/kachab" target="_blank"><i class="icofont icofont-lg">twitter</i></a>
                                </li>
                                <li><a href="https://plus.google.com/" target="_blank"><i class="icofont icofont-lg">google_plus</i></a>
                                </li>
                                <li><a href="https://t.me/kachab" target="_blank"><i
                                                class="icofont icofont-lg">telegram</i></a>
                                </li>
                                <li><a href="https://www.instagram.com/kachab" target="_blank"><i
                                                class="icofont icofont-lg">instagram</i></a></li>
                            </ul>
                            <hr>
                            <ul class="nav mx-0 px-0">
                                <li class="nav-item">
                                    <a class="nav-link text-light" title="<?= Yii::t('app', 'about-us') ?>"
                                       href="<?= Yii::$app->urlManager->createUrl(['frontend/about-us']) ?>"><?= Yii::t('app', 'about-us') ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" title="<?= Yii::t('app', 'contact-us') ?>"
                                       href="<?= Yii::$app->urlManager->createUrl(['frontend/contact-us']) ?>"><?= Yii::t('app', 'contact-us') ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light"
                                       href="<?= Yii::$app->urlManager->createUrl(['frontend/home']) ?>">بازگشت به
                                        سایت</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center mb-5"><?=Yii::t('app','Create an account')?></h1>
                            <?php
                            if (Yii::$app->session->getFlash('message')) {
                                echo Yii::$app->session->getFlash('message');
                            }
                            ?>
                            <div class="my-4">
                                <?= $form->field($model, 'username')->textInput(['placeholder' => Yii::t('app','Enter the username')])->label(false) ?>
                                <?= $form->field($model, 'email')->textInput(['placeholder' => Yii::t('app','Enter the email')])->label(false) ?>
                                <?= $form->field($model, 'mobile')->textInput(['placeholder' => Yii::t('app','Enter the mobile')])->label(false) ?>
                                <?= $form->field($model, 'password')->passwordInput(['placeholder' => Yii::t('app','Enter the password')])->label(false) ?>
                                <?= $form->field($model, 'password_repeat')->passwordInput(['placeholder' => Yii::t('app','Enter the password confirm')])->label(false) ?>
                            </div>

                            <div class="text-center my-2">
                                <?= Html::submitButton(Yii::t('app', 'signup'), ['class' => 'btn btn-primary btn-block']) ?>
                            </div>
                            <div class="text-center mt-4"><?= Html::a(Yii::t('app', 'Entering the system'), ['login'], ['class' => 'text-primary']) ?></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php ActiveForm::end(); ?>
<?php
$ui_js = <<<JS
    $(document).ready(function() {
      $('<i class="icofont">user_male</i>').insertAfter('#profiles-name');
      $('<i class="icofont">user_male</i>').insertAfter('#profiles-lastname');
      $('<i class="icofont">ui_touch_phone</i>').insertAfter('#profiles-landlinephone');
      $('<i class="icofont">ui_email</i>').insertAfter('#profiles-email');
      $('.form-control').addClass('fanum ltr');
      $('.form-group').addClass('form-group-icon');
      $('.help-block-error').addClass('small');
    })
JS;

$this->registerJs($ui_js, \yii\web\View::POS_END);
