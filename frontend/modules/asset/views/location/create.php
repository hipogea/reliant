<?php
use frontend\modules\asset\Module as m;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\asset\models\AssetLocations */

$this->title = m::t('labels', 'Create Asset Locations');
$this->params['breadcrumbs'][] = ['label' => m::t('labels', 'Asset Locations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asset-locations-create">

    <h4><?= Html::encode($this->title) ?></h4>
<div class="box box-success">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>