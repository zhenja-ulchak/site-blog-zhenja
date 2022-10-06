<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Авторизація';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="block-registration">
    <div class="leave-comment mr0"><!--leave comment-->
        <div class="row" style="    padding-top: 13%;">
            <div class="col-md-8 col-md-offset-4">
                <div class="site-login">
                    <h1><?= Html::encode($this->title) ?></h1>
                
                    <p>Введіть:</p>
                
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'layout' => 'horizontal',
                        'fieldConfig' => [
                            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                            'labelOptions' => ['class' => 'col-lg-1 control-label'],
                        ],
                    ]); ?>
                
                        <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>
                
                        <?= $form->field($model, 'password')->passwordInput() ?>
                
                        <?= $form->field($model, 'rememberMe')->checkbox([
                            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        ]) ?>
                
                        <div class="form-group">
                            <div class="col-lg-offset-1 col-lg-11">
                                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                            </div>
                        </div>
                
                    <?php ActiveForm::end(); ?>

                </div>
        </div>

        <div class="col-md-2">
           
        </div>
    </div>
    </div>
</div>

