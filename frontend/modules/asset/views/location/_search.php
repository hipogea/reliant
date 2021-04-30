<?php
use frontend\modules\asset\Module as m;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\asset\models\AssetLocationsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asset-locations-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ismovil') ?>

    <?= $form->field($model, 'cc') ?>

    <?= $form->field($model, 'codcen') ?>

    <?= $form->field($model, 'istop') ?>

    <?php // echo $form->field($model, 'parent_id') ?>

    <?php // echo $form->field($model, 'nombre') ?>

    <?php // echo $form->field($model, 'path') ?>

    <?php // echo $form->field($model, 'activo') ?>

    <?php // echo $form->field($model, 'detalle') ?>

    <div class="form-group">
        <?= Html::submitButton(m::t('labels', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(m::t('labels', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
