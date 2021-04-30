<?php
use frontend\modules\maestros\MaestrosModule as m;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\masters\Clipro */

$this->title = Yii::t('base_verbs', 'Update Clipro: {name}', [
    'name' => $model->despro,
]);
$this->params['breadcrumbs'][] = ['label' => m::t('labels', 'Clipros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codpro, 'url' => ['view', 'id' => $model->codpro]];
$this->params['breadcrumbs'][] = m::t('base_verbs', 'Update');
?>
<div class="clipro-update">

    <h4><?= Html::encode($this->title) ?></h4>
    
<div class="box box-success">
    <?= $this->render('_formfirme', [
        'model' => $model,
            'dpContactos' => $dpContactos,
            'dpDirecciones' => $dpDirecciones,
         //'dpMaestroclipro' =>$dpMaestroclipro,
       'dpObjetosCliente' =>$dpObjetosCliente 
    ]) ?>

</div>
</div>