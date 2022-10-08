<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Категорії';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-12 margin-top-block" data-sticky_column>
    <div class="primary-sidebar">

    <aside class="widget border pos-padding">
            <h3 class="widget-title text-uppercase text-center">Категорії</h3>
            <ul>
                
                <?php foreach($categories as $category):?>
                    <li>
                        <a href="<?= Url::toRoute(['site/category','id'=>$category->id]);?>"><?= $category->title?></a>
                        <span class="post-count pull-right"> (<?= $category->getArticlesCount();?>)</span>
                    </li>
                <?php endforeach;?>

            </ul>
        </aside>
        
        </div>
</div>