<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<!--main content start-->
<div class="first-block-main">
<div class="block-main">
    <div class="main-container">
        <span  style="marg">
            <a class="s-facebook" href=""><img src="/web/public/images/facebook.png" style="margin-right: 10px;" alt=""></a>
            <a class="s-twitter" href=""><img src="/web/public/images/twitter.png" style="margin-right: 10px;" alt=""></a>
            <a class="s-instagram" href=""><img src="/web/public/images/instagram.png" style="margin-right: 10px;" alt=""></a>
        </span>
        <h1 class="first-block-h1">Кулінарний блог для всіх </h1>
        <p class="first-block-p"> Страви які підійдуть як і для кафе так , для дому також , тим хто любить мясо та солодке для діабетиків та людей яким потрібно тримати дієту</p>
        <div class="marg-img ">
            <img src="/web/public/images/free-icon-down-arrow.png" style="width:100px;" alt="">
        </div>
    </div>

</div>
<div class="main-content">
<div class="back-main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 margin-top-block">
            
                <?php foreach($articles as $article):?>
                    <article class="post post-mode" >
                        <div class="post-thumb ">
                            <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>"><img style="width: 100%;" class="post-image" src="<?= $article->getImage();?>" alt=""></a>

                            <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="post-thumb-overlay text-center">
                                <div class="text-uppercase text-center">Оглянути</div>
                            </a>
                        </div>
                        <div class="post-content">
                            <header class="entry-header text-center text-uppercase">
                                <h6><a href="<?= Url::toRoute(['site/category','id'=>$article->category->id])?>"> <?= $article->category->title; ?></a></h6>

                                <h1 class="entry-title"><a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>"><?= $article->title?></a></h1>


                            </header>
                            <div class="entry-content">
                                <p><?= $article->description?>
                                </p>

                                <div class="btn-continue-reading text-center text-uppercase">
                                    <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id]);?>" class="more-link">Читати</a>
                                </div>
                            </div>
                            <div class="social-share">
                                <span class="social-share-title pull-left text-capitalize">By <?= $article->author->name; ?> On <?= $article->getDate();?></span>
                                <ul class="text-center pull-right">
                                    <li><a class="s-facebook" href="#"><img src="/web/public/images/eyes-cartoon.png" style="margin-right: 10px;" alt=""></a></li><?= (int) $article->viewed?>
                                </ul>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>

                <?php
                    echo LinkPager::widget([
                        'pagination' => $pagination,
                    ]);
                ?>
              
            </div>
            <?= $this->render('/partials/sidebar', [
               'categories'=>$categories,
               'popular'=>$popular,
                'recent'=>$recent
                
            ]);?>
        </div>
    </div>
    </div>
</div>
<!-- end main content-->
<!--footer start-->