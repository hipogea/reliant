<?php
//use kartik\typeahead\Typeahead;
use yii\helpers\Url;
use common\helpers\h;
use common\helpers\ComboHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use common\widgets\cbodepwidget\cboDepWidget as ComboDep;
use common\widgets\inputajaxwidget\inputAjaxWidget;
use frontend\modules\maestros\MaestrosModule as m;
/* @var $this yii\web\View */
/* @var $model common\models\masters\Trabajadores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="box box-success">
    <div id="advertencia_doc"></div>
    <?php $form = ActiveForm::begin([
    'id' => 'trabajadores-form',
    'enableAjaxValidation' => true,
    //'fieldClass' => 'common\components\MyActiveField',
    //'options'=>['enctype' => 'multipart/form-data'],'fieldClass' => '\common\components\MyActiveField'
    ]); ?>
    
    
    <div class="box-header">
        <div class="col-md-12">
            <div class="form-group no-margin">
                <?= Html::submitButton(m::t('verbs', 'Save'), ['class' => 'btn btn-success']) ?>
             <?=($model->isNewRecord)?'':common\widgets\auditwidget\auditWidget::widget(['model'=>$model])?>
       
            </div>
        </div>
    </div>
    
    
    
    <div class="box-body">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'codigoper')->textInput(['disabled'=>'disabled','maxlength' => true]) ?>
  </div>
     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
   <?=$form->field($model, 'codgrupo')->
            dropDownList(frontend\modules\inter\helpers\ComboHelper::getCboGrupoPersonas() ,
                    ['prompt'=>'--'.m::t('verbs','Choose a Value')."--",
                    // 'class'=>'probandoSelect2',
                      //'disabled'=>($model->isBlockedField('codpuesto'))?'disabled':null,
                        ]
                    )  ?>
</div>   
        
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    
    <?= $form->field($model, 'ap')->textInput() ?>
</div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'am')->textInput(['maxlength' => true]) ?>
</div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'nombres')->textInput(['maxlength' => true]) ?>
</div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
   <?=$form->field($model, 'tipodoc')->
            dropDownList($model->comboDataField('tipodoc') ,
                    ['prompt'=>'--'.m::t('verbs','Choose a Value')."--",
                    // 'class'=>'probandoSelect2',
                      //'disabled'=>($model->isBlockedField('codpuesto'))?'disabled':null,
                        ]
                    )  ?>
</div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'numerodoc')->textInput(['maxlength' => true]) ?>
</div>
   
    
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?php  //h::settings()->invalidateCache();  ?>
                       <?= $form->field($model, 'cumple')->widget(DatePicker::class, [
                             'language' => h::app()->language,
                           // 'readonly'=>true,
                          // 'inline'=>true,
                           'pluginOptions'=>[
                                     'format' => h::gsetting('timeUser', 'date')  , 
                                  'changeMonth'=>true,
                                  'changeYear'=>true,
                                 'yearRange'=>"-99:+0",
                               ],
                           
                            //'dateFormat' => h::getFormatShowDate(),
                            'options'=>['class'=>'form-control']
                            ]) ?>
</div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <?php  //h::settings()->invalidateCache();  ?>
                       <?= $form->field($model, 'fecingreso')->widget(DatePicker::class, [
                            'language' => h::app()->language,
                           'pluginOptions'=>[
                                     'format' => h::gsetting('timeUser', 'date')  , 
                                   'changeMonth'=>true,
                                  'changeYear'=>true,
                                 'yearRange'=>'1980:'.date('Y'),
                               ],
                          
                            //'dateFormat' => h::getFormatShowDate(),
                            'options'=>['class'=>'form-control']
                            ]) ?>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'domicilio')->textInput(['maxlength' => true]) ?>
</div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'telfijo')->textInput(['maxlength' => true]) ?>
</div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'telmoviles')->textInput(['maxlength' => true]) ?>
</div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <?= $form->field($model, 'referencia')->textInput(['maxlength' => true]) ?>
</div>
        
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
     <?= $form->field($model, 'domicilio')->textInput(['maxlength' => true]) ?>
 </div>  
  
  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">    
 <?= $form->field($model, 'sexo')->
            dropDownList(ComboHelper::getCboSex(),
                  ['prompt'=>'--'.m::t('verbs','Choose a Value')."--",
                    // 'class'=>'probandoSelect2',
                      //'disabled'=>($model->isBlockedField('codpuesto'))?'disabled':null,
                        ]
                    ) ?>
 </div>   
        
   <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">    
 <?= $form->field($model, 'estcivil')->
            dropDownList(ComboHelper::getCboEstCivil(),
                  ['prompt'=>'--'.m::t('verbs','Choose a Value')."--",
                    // 'class'=>'probandoSelect2',
                      //'disabled'=>($model->isBlockedField('codpuesto'))?'disabled':null,
                        ]
                    ) ?>
 </div> 
   
    <?php ActiveForm::end(); ?>
</div>
  </div> 
<?php 
  echo inputAjaxWidget::widget([
      'id_input'=>'personas-numerodoc',
            'tipo'=>'get',
            'evento'=>'change',
      'isHtml'=>true,
            'idGrilla'=>'advertencia_doc',
            'ruta'=>Url::to(['/maestros/default/verify-duplicate-person']),          
           //'posicion'=> \yii\web\View::POS_END           
        
  ]);
?>
