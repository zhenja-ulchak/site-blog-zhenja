<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Категорії';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-md-12   margin-top-block" data-sticky_column>
    <div class="primary-sidebar w-main">

    <aside class="widget border pos-padding" style="margin-top: 100px;">
            <h1 class="widget-title text-uppercase text-center">Категорії</h1>
            <br>
    
            <ul class="">
                
                <?php foreach($categories as $category):?>
                    <li style=" text-align: center;">
                        <a style="    margin-right: 26px;font-weight:bold;" href="<?= Url::toRoute(['site/category','id'=>$category->id]);?>"><?= $category->title?></a>
                        <span class="post-count pull-right-main"> (<?= $category->getArticlesCount();?>)</span>
                    </li>
                    <hr style="    border-top: 1px solid #282626;">
                <?php endforeach;?>

            </ul>
        </aside>
        
        </div>
</div>
              