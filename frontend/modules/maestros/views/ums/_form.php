<?php
use frontend\modules\maestros\MaestrosModule as m;
use yii\helpers\Html;
use common\helpers\h;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\masters\Ums */
/* @var $form yii\widgets\ActiveForm */
?>
 
    


    <?php $form = ActiveForm::begin(); ?>
 <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'codum')->textInput([ 'disabled'=>($model->isNewRecord)?null:'disabled',   'maxlength' => true]) ?>
 </div>
     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'desum')->textInput(['maxlength' => true]) ?>
 </div>
     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model,'dimension')->
            dropDownList(
                     h::getDimensions() ,
                    ['prompt'=>'--'.m::t('verbs','Choose a Value')."--",
                     //'class'=>'probandoSelect2',
                        ]
                    ) ?> </div>
     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'escala')->textInput() ?>
 </div>
    
    <div class="form-group">
        <?= Html::submitButton(m::t('verbs', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>


     
    <?php ActiveForm::end(); ?>


