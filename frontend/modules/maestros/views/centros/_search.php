<?php
use frontend\modules\maestros\MaestrosModule as m;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\masters\CentrosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="centros-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'codcen') ?>

    <?= $form->field($model, 'nomcen') ?>

    <?= $form->field($model, 'codsoc') ?>

    <?= $form->field($model, 'descricen') ?>

    <div class="form-group">
        <?= Html::submitButton(m::t('labels', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(m::t('labels', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
