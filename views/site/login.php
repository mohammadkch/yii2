<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'صفحه ورود';
$url = Yii::$app->urlManager;
?>

<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

    <div class="container">
        <div class="content-center">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-8">
                    <!--                --><?php //echo (validation_errors()) ? '<div class="alert alert-danger">' . validation_errors('<div>', '</div>') . '</div>' : ''; ?>
                    <!--                --><?php //echo show_message() ?>
                    <div class="intro py-md-4 px-md-4">
                        <h2 class="intro-icon-titl"><img class="img-fluid" src="<?php echo Yii::getAlias('@web').'/'.'favicon.ico' ?>"></h2>
                        <!--                    <h1 class="my-4 text-center text-sm-right">مراحل سئو و بهینه سازی وبسایت را خودتان انجام دهید در این-->
                        <!--                        حین با جدیدترین الگوریتم ها آشنا شوید</h1>-->
                        <!--                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.-->
                        <!--                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی-->
                        <!--                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>-->
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
                                    <a class="nav-link text-light active" href="<?= $url->baseUrl ?>/about-us/">درباره
                                        ما</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="<?= $url->baseUrl ?>/contact-us/">ارتباط با
                                        ما</a>
                                </li>
                                <li class="nav-item">
                                    <!--                                <a class="nav-link text-light" href="https://mimos.ir/">بازگشت به سایت</a>-->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center mb-5">ورود</h1>

                            <div class="my-4">
                                <?= $form->field($model, 'username')->textInput(['placeholder' => 'نام کاربری خود را وارد کنید'])->label(false) ?>

                                <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'گذرواژه خود را وارد کنید'])->label(false) ?>
                                <p class="help-block help-block-error"><?=Yii::$app->session->getFlash('error_access')?></p>
                            </div>
                            <div class="text-center my-2">
                                <?= Html::submitButton('ورود', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                            </div>

                            <div class="text-center my-2">
                                <a href="<?=Yii::$app->urlManager->createAbsoluteUrl('site/login')?>" class="btn btn-outline-secondary btn-block">ساخت حساب کاربری</a>
                            </div>
                            <div class="text-center mt-4">
                                <?= Html::a('گذرواژه خود را فراموش کرده اید؟', ['forget_password'], ['class' => 'text-warning']) ?>
                            </div>
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
      $('<i class="icofont">user_male</i>').insertAfter('#loginform-username');
      $('<i class="icofont">ui_lock</i>').insertAfter('#loginform-password');
      $('.form-control').addClass('fanum ltr');
      $('.form-group').addClass('form-group-icon');
    })
JS;

$this->registerJs($ui_js, \yii\web\View::POS_END);
