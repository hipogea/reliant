<?php
use yii\helpers\Url;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use kartik\tabs\TabsX;
use frontend\modules\maestros\MaestrosModule as m;
  use common\models\masters\Clipro;
use common\models\masters\Direcciones;

/* @var $this yii\web\View */
/* @var $model common\models\masters\Clipro */
/* @var $form yii\widgets\ActiveForm */
?>

    

<div class="clipro-form">


<?php

echo TabsX::widget([
    'position' => TabsX::POS_ABOVE,
    'align' => TabsX::ALIGN_LEFT,
    'items' => [
        [
            'label' => m::t('labels','General'),
            'content' => $this->render('_form',['model'=>$model]),
            'active' => true
        ],
        [
            'label' => m::t('labels','Contacts'),
         'content' => $this->render('_tab_contactos',['dpContactos'=>$dpContactos,'model'=>$model]),
            'headerOptions' => ['style'=>'font-weight:bold'],
            'options' => ['id' => 'myveryownID1'],
            'active' => false
        ],
        [
            'label' => m::t('labels','Addresses'),
            'content' => $this->render('_tab_direcciones',['dpDirecciones'=>$dpDirecciones,'model'=>$model]),
            'headerOptions' => ['style'=>'font-weight:bold'],
            'options' => ['id' => 'myveryownID2'],
            'active' => false
        ],
        [
            'label' => m::t('labels','Materials'),
            'content' => $this->render('_tab_materiales',['model'=>$model]),
            'headerOptions' => ['style'=>'font-weight:bold'],
            'options' => ['id' => 'myveryownID3'],
            'active' => false
        ],
        
        [
            'label' => m::t('labels','Objects'),
            'content' => $this->render('_tab_objetos',['dpObjetosCliente' =>$dpObjetosCliente ,'model'=>$model]),
            'headerOptions' => ['style'=>'font-weight:bold'],
            'options' => ['id' => 'myveryowdfgnID3'],
            'active' => false
        ],
        
         
    ],
]);    
    
    ?>
    


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</div>
