<?php
use frontend\modules\maestros\MaestrosModule as m;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\masters\Maestrocompo */

$this->title = m::t('verbs', 'Create').' '.m::t('labels', 'Material');
$this->params['breadcrumbs'][] = ['label' => m::t('labels', 'Materials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maestrocompo-create">
     <h4><?= Html::encode($this->title) ?></h4>
<div class="box box-success">
   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
