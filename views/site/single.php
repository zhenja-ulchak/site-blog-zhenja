<?php
use yii\helpers\Url;
?>
<!--main content start-->
<div class="main-content">
<div class="block-darck">
    <div class="container">
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-8 margin-top-block">
                <article class="post post-box-shadow">
                    <div class="post-thumb">
                        <img src="<?= $article->getImage();?>" alt="">
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6> <?= $article->category->title?></h6>

                            <h1 class="entry-title"><b><?= $article->title?></b></h1>


                        </header>
                        <div class="entry-content">
                            <?= $article->content?>
                        </div>
                        <div class="decoration" style="magin-top:20px;">
                    
                        </div>

                        <div class="social-share">
							<span
                                class="social-share-title pull-left text-capitalize">By <?= $article->author->name?> On <?= $article->getDate();?></span>
                            <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="#"><img src="/web/public/images/facebook.png" style="margin-right: 10px;" alt=""></a></li>
                                <li><a class="s-twitter" href="#"><img src="/web/public/images/twitter.png" style="margin-right: 10px;" alt=""></a></li>
                                <li><a class="s-instagram" href="#"><img src="/web/public/images/instagram.png" style="margin-right: 10px;" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </article>

             <?= $this->render('/partials/comment', [
                 'article'=>$article,
                 'comments'=>$comments,
                 'commentForm'=>$commentForm
             ])?>
            </div>
            <?= $this->render('/partials/sidebar', [
                'popular'=>$popular,
                'recent'=>$recent,
                'categories'=>$categories
            ]);?>
        </div>
    </div>
    </div>
</div>
<!-- end main content-->