<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\helpers\ComboHelper;
use frontend\modules\maestros\MaestrosModule as m;
use yii\helpers\Url;

use common\widgets\cbodepwidget\cboDepWidget as ComboDep;
/* @var $this yii\web\View */
/* @var $model common\models\masters\Direcciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="direcciones-form">
<div class="box-body">
    <?php $form = ActiveForm::begin(); ?>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">  
   <?php 
  // $necesi=new Parametros;
    echo \common\widgets\selectwidget\selectWidget::widget([
           // 'id'=>'mipapa',
            'model'=>$model,
            'form'=>$form,
            'campo'=>'codpro',
            //'foreignskeys'=>[1,2,3],
        ]);  ?>
    </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <?= $form->field($model, 'direc')->textInput(['maxlength' => true]) ?>

 </div>  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">    
  <?= $form->field($model, 'nomlug')->textInput(['maxlength' => true]) ?>

 
 </div>  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">  
   <?= $form->field($model, 'latitud')->textInput(['maxlength' => true]) ?>

 </div>  
 
 

      <div class="form-group">
        <?= Html::submitButton(Yii::t('base.names', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>
