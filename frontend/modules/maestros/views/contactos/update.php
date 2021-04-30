<?php
use frontend\modules\maestros\MaestrosModule as m;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\masters\Contactos */

$this->title = m::t('verbs', 'Edit Contact: {name}', [
    'name' => $model->despro,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contactos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="contactos-update">

   
    <h4><?= Html::encode($this->title) ?></h4>
<div class="box-success">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>