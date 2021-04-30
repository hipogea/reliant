<?php
use frontend\modules\maestros\MaestrosModule as m;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Sociedades */

$this->title = m::t('labels', 'Update Sociedades: {name}', [
    'name' => $model->socio,
]);
$this->params['breadcrumbs'][] = ['label' => m::t('labels', 'Sociedades'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->socio, 'url' => ['view', 'id' => $model->socio]];
$this->params['breadcrumbs'][] = m::t('verbs', 'Update');
?>
<div class="sociedades-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
