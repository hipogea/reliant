<?php
use frontend\modules\maestros\MaestrosModule as m;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\masters\Maestrocompo */

$this->title = m::t('labels', 'Update Maestrocompo: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => m::t('labels', 'Maestrocompos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = m::t('labels', 'Update');
?>
<div class="maestrocompo-update">
  <h4><?= Html::encode($this->title) ?></h4>   
<div class="box box-success">
   

    <?= $this->render('_formfirme', [
        'model'=>$model,
        //'probConversiones'=>$probConversiones
            ]) ?>

</div>
    </div>
