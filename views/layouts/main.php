<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar main-menu navbar-default fixed-nav-bar-main">
    <div class="container">
        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand-main logo-main" href="/"><img src="/web/public/images/logo.png" style="    width: 65px;" alt=""></a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <div class="i_con ">
                <ul class="nav navbar-nav text-uppercase">
                    <li><a data-toggle="dropdown" class="dropdown-toggle text-color-heder"  href="/">Головна</a></li>
                    </ul>
                <ul class="nav navbar-nav text-uppercase">
                <li><a class="text-color-heder" href="<?= Url::toRoute(['site/contact'])?>">Про нас</a></li>
                </ul>
                    <ul class="nav navbar-nav text-uppercase text-color-heder">
        
                        <?php if(Yii::$app->user->isGuest):?>
                            <li><a class="text-color-heder" href="<?= Url::toRoute(['auth/login'])?>">Увійти</a></li>
                            <li><a class="text-color-heder" href="<?= Url::toRoute(['auth/signup'])?>">Зареєструватись</a></li>
                        <?php else: ?>
                            <?= Html::beginForm(['/auth/logout'], 'post')
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->name . ')',
                                ['class' => 'btn btn-link logout', 'style'=>"padding-top:21px; color: #ffffff "]
                            )
                            . Html::endForm() ?>
                        <?php endif;?>

                   
                        
                    </ul>
                    <ul class="nav navbar-nav text-uppercase">
                    <li>     <?php if (Yii::$app->user->identity->isAdmin==1) {echo '<a class="text-color-heder margin-admin" href="/admin">admin</a>';}?></li>
                </ul>
                </div>

            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>
</div>
<?= $content ?>


<footer class="footer-widget-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <aside class="footer-widget">
                    <div class="about-img"><img src="/public/images/logo2.png" alt=""></div>
                    <div class="about-content">інфа
                    </div>
                    <div class="address">

                  <span>
                                <a class="s-facebook" href="#"><img src="/web/public/images/facebook.png" style="margin-right: 10px;" alt=""></a>
                                <a class="s-twitter" href="#"><img src="/web/public/images/twitter.png" style="margin-right: 10px;" alt=""></a>
                                <a class="s-instagram" href="#"><img src="/web/public/images/instagram.png" style="margin-right: 10px;" alt=""></a>
                                </span>
                        <h4 class="text-uppercase">Контактна інформація</h4>

                        <p> Україна м. Ужгород вул. Проспект свободи 42</p>

                        <p>Email: super-zhenja@ukr.com</p>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">&copy;  By Zloi-Goblin 
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
