<?php
use yii\helpers\Url;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\modules\maestros\MaestrosModule as m;
use yii\widgets\Pjax;
use kartik\tabs\TabsX;
use kartik\grid\GridView as grid;
  use common\models\masters\Clipro;
use common\models\masters\Direcciones;

/* @var $this yii\web\View */
/* @var $model common\models\masters\Clipro */
/* @var $form yii\widgets\ActiveForm */
?>


     <?php Pjax::begin(['id'=>'grilla-direcciones']); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

     <?php
   $gridColumns=[
       [
            'class' => 'kartik\grid\EditableColumn',
            'attribute' => 'direc',
            'pageSummary' => 'Total',
            'vAlign' => 'middle',
            'width' => '210px',
            'readonly' => false,
           //'data'=>['modelo'=>'mimodelo']
            
         ],
       [
            'class' => 'kartik\grid\EditableColumn',
            'attribute' => 'nomlug',
            'pageSummary' => 'Total',
            'vAlign' => 'middle',
            'width' => '210px',
            
         ],
       'provincia',
       'departamento',
       'distrito'
   ];
   echo grid::widget([
    'dataProvider'=> $dpDirecciones,
   // 'filterModel' => $searchModel,
    'columns' => $gridColumns,
       'summary'=>'',
    'responsive'=>true,
    'hover'=>true
       ]);
   ?>
   
   
   
   

   
    <?php Pjax::end(); ?>

  <?php $url=Url::toRoute(['/maestros/clipro/createaddresses','id'=>$model->codpro]);   ?>
   <?php  echo  Html::button(yii::t('base.verbs','Create'), ['href' => $url, 'title' => 'Nueva direccion de '.$model->despro,'id'=>'btn_addresses', 'class' => 'botonAbre btn btn-success']); ?>
      <?php /*$this->registerJs("var vjs_url=".json_encode($ruta).";"
            . "var vjs_random=".json_encode(rand()).";",View::POS_HEAD); */ ?>
     
   