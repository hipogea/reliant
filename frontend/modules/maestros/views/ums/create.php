<?php
use frontend\modules\maestros\MaestrosModule as m;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\masters\Ums */

$this->title =m::t('verbs', 'Create').' '.m::t('labels', 'Units of measure');
$this->params['breadcrumbs'][] = ['label' => m::t('labels', 'Ums'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-success">
<div class="ums-create">
   <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>