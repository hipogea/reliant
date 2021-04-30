<?php
use frontend\modules\maestros\MaestrosModule as m;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\masters\Centros */

$this->title = m::t('labels', 'Update Centros: {name}', [
    'name' => $model->codcen,
]);
$this->params['breadcrumbs'][] = ['label' => m::t('labels', 'Centros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codcen, 'url' => ['view', 'id' => $model->codcen]];
$this->params['breadcrumbs'][] = m::t('labels', 'Update');
?>
<div class="centros-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'searchModel' => $searchModel,
         'dataProvider' => $dataProvider,
    ]) ?>

</div>
