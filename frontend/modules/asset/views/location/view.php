<?php
use frontend\modules\asset\Module as m;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\asset\models\AssetLocations */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => m::t('labels', 'Asset Locations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="asset-locations-view">

    <h4><?= Html::encode($this->title) ?></h4>

    <p>
        <?= Html::a(m::t('labels', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(m::t('labels', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => m::t('labels', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'ismovil',
            'cc',
            'codcen',
            'istop',
            'parent_id',
            'nombre',
            'path',
            'activo',
            'detalle:ntext',
        ],
    ]) ?>

</div>
