<?php

use yii\helpers\Html;
use frontend\modules\import\ModuleImport as m;
/* @var $this yii\web\View */
/* @var $model frontend\modules\import\models\ImportCargamasiva */

$this->title = m::t('labels', 'Crear Importación');
$this->params['breadcrumbs'][] = ['label' => m::t('labels', 'Importaciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="import-cargamasiva-create">

    <h4><?= Html::encode($this->title) ?></h4>

    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


    
</div>