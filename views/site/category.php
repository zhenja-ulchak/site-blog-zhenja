<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>
<!--main content start-->
<div class="main-content" style="padding-top:100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="    margin-top: 47px;">
                <?php

                foreach($articles as $article):?>
                    <article class="post post-list">
                    <div class="row">
                        <div class="">
                            <div class="post-thumb">
                                <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>"><img style="width: 100%;" src="<?= $article->getImage();?>" alt="" class="pull-left"></a>

                                <a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>" class="post-thumb-overlay text-center">
                                    <div class="text-uppercase text-center">Оглянути</div>
                                </a>
                            </div>
                        </div>
                        <div class=" ">
                            <div class="post-content-mode">
                                <header class="entry-header text-uppercase">
                                    <h6><a href="<?= Url::toRoute(['site/category','id'=>$article->category->id]);?>"> <?= $article->category->title?></a></h6>

                                    <h1 class="entry-title"><a href="<?= Url::toRoute(['site/view','id'=>$article->id]);?>"><?= $article->title?></a></h1>
                                </header>
                                <div class="entry-content">
                                    <p><?= $article->description?>
                                    </p>
                                </div>
                                <div class="social-share">
                                    <span class="social-share-title pull-left text-capitalize">By <?= $article->author->name;?> On <?= $article->getDate();?></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <?php endforeach;?>

                <?php
                echo LinkPager::widget([
                    'pagination' => $pagination,
                ]);
                ?>
            </div>
            <?= $this->render('/partials/sidebar', [
                'popular'=>$popular,
                'recent'=>$recent,
                'categories'=>$categories
            ]);?>
        </div>
    </div>
</div>
<!-- end main content-->