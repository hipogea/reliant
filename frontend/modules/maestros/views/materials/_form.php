<?php
use frontend\modules\maestros\MaestrosModule as m;
use yii\helpers\Html;
use common\helpers\ComboHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\masters\Maestrocompo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="box-body">

    <?php $form = ActiveForm::begin(); ?>
    <div class="box-header">
        <div class="col-md-12">
            <div class="form-group no-margin">
                
        <?= Html::submitButton('<span class="fa fa-save"></span>   '.m::t('verbs', 'Save'), ['class' => 'btn btn-success']) ?>
        <?php  //$url=Url::to(['/inter/convocados/index','id'=>$model->id]);  ?>
         <?php //echo  Html::a('<span class="btn btn-danger btn-sm" ><span class="fa fa-users"></span>  '.m::t('labels','Convened').'</span></span>', $url); ?>  

            </div>
        </div>
    </div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'codart')->textInput(['disabled'=>'disabled','maxlength' => true]) ?>
</div>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'cod1')->textInput(['maxlength' => true]) ?>
</div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>
</div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'marca')->textInput(['maxlength' => true]) ?>
</div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= \common\widgets\imagewidget\ImageWidget::widget(['name'=>'imagenrep','model'=>$model]); ?>
   </div>
    
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'modelo')->textInput(['maxlength' => true]) ?>
</div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'numeroparte')->textInput(['maxlength' => true]) ?>
</div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'oldnumberpart')->textInput(['maxlength' => true]) ?>
</div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    
    <?= $form->field($model, 'codum')->
            dropDownList(ComboHelper::getCboUms() ,
                    ['prompt'=>'--'.yii::t('base.verbs','Choose a Value')."--",
                    // 'class'=>'probandoSelect2',
                      'disabled'=>($model->isBlockedField('codtipo'))?'disabled':null,
                        ]
                    ) ?>
       
</div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'peso')->textInput(['maxlength' => true]) ?>
</div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'esrotativo')->checkbox() ?>
    </div>
    
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'codtipo')->
            dropDownList(ComboHelper::getTablesValues('maestrocompo.tipo') ,
                    ['prompt'=>'--'.m::t('verbs','Choose a Value')."--",
                    // 'class'=>'probandoSelect2',
                        ]
                    ) ?>
     </div>
   
   
    <?php ActiveForm::end(); ?>
</div>

