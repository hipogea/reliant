<?php
use frontend\modules\maestros\MaestrosModule as m;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\masters\Centros */

$this->title = m::t('labels', 'Create Centros');
$this->params['breadcrumbs'][] = ['label' => m::t('labels', 'Centros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="centros-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
       
    ]) ?>

</div>
