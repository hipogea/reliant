<?php
use frontend\modules\maestros\MaestrosModule as m;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\masters\Centros */

$this->title = $model->codcen;
$this->params['breadcrumbs'][] = ['label' => m::t('labels', 'Centros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="centros-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(m::t('labels', 'Update'), ['update', 'id' => $model->codcen], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(m::t('labels', 'Delete'), ['delete', 'id' => $model->codcen], [
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
            'codcen',
            'nomcen',
            'codsoc',
            'descricen:ntext',
        ],
    ]) ?>

</div>
