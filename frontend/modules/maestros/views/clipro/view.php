<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\modules\maestros\MaestrosModule as m;
/* @var $this yii\web\View */
/* @var $model common\models\masters\Clipro */

$this->title = m::t('labels', 'View').'   -   '.$model->despro;
$this->params['breadcrumbs'][] = ['label' => Yii::t('base.names', 'Clipros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="clipro-view">

    <h4><?= Html::encode($this->title) ?></h4>
<div class="box box-success">
    <p>
        <?= Html::a(m::t('labels', 'Update'), ['update', 'id' => $model->codpro], ['class' => 'btn btn-primary']) ?>
       
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'codpro',
            'despro',
            'rucpro',
            'telpro',
            'web',
            'deslarga:ntext',
        ],
    ]) ?>

</div></DIV>
