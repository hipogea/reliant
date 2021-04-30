<?php
use frontend\modules\maestros\MaestrosModule as m;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Sociedades */

$this->title = m::t('labels', 'Create Sociedades');
$this->params['breadcrumbs'][] = ['label' => m::t('base_labels', 'Sociedades'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sociedades-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
