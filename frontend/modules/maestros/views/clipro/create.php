<?php

use yii\helpers\Html;
use frontend\modules\maestros\MaestrosModule as m;
/* @var $this yii\web\View */
/* @var $model common\models\masters\Clipro */

$this->title = m::t('labels', 'Create Clipro');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Clipros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clipro-create">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
           // 'modelDetails' => $modelDetails
    ]) ?>



</div>