<?php
use yii\helpers\Url;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use kartik\tabs\TabsX;
use yii\web\View;
  use common\models\masters\Clipro;
use common\models\masters\Direcciones;
use frontend\modules\maestros\MaestrosModule as m;
/* @var $this yii\web\View */
/* @var $model common\models\masters\Clipro */
/* @var $form yii\widgets\ActiveForm */
?>

   <h6><?= Html::encode($this->title) ?></h6>
    <?php Pjax::begin(); ?>
   
    <?php /*echo GridView::widget([
        'dataProvider' => $dpMaestroclipro,
        'columns' => [
            'codart',
            'maestrocompo.descripcion',
            'vencimiento',
            'precio',
            'codmon',
           ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); */?>
    <?php Pjax::end(); ?> 
 <?php $ruta=Url::toRoute(['masters/clipro/createcontact','id'=>$model->codpro]);   ?>
    <?php ?>
     
   
