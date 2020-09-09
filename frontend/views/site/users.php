<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use mdm\admin\components\Helper;

/* @var $this yii\web\View */
/* @var $searchModel mdm\admin\models\searchs\User */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('rbac-admin', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
 <h4><?= Html::encode($this->title) ?></h4>
<div class="user-index">
<div class="box box-success">
        <div class="box-body">
   
    <p>
        <?= Html::a(Yii::t('base.verbs', 'Crear Usuario'), ['create-user'], ['class' => 'btn btn-success']) ?>
    </p>
    
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary'=>'',
        'columns' => [
           
            'username',
            'email:email',
            [
                'attribute' => 'status',
                'value' => function($model) {
                    return $model->status == 0 ? 'Inactivo' : 'Activo';
                },
                'filter' => [
                    0 => 'Inactivo',
                    10 => 'Activo'
                ]
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                //'template' => Helper::filterActionColumn(['view', 'activate', 'delete']),
            'template' => '{view}{activate}',
                'buttons' => [
                    'view' => function ($url,$model) {
			    $url = Url::to(['admin/assignment/view', 'id' => $model->id]);
                            // return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, ['title' => 'Update']);
                            $options=[];
                           return Html::a('<span class="btn btn-warning btn-sm glyphicon glyphicon-search"></span>', $url, $options/*$options*/);
                        
                             },
                                     
                    
                    
                   /* 'activate' => function($url, $model) {
                        if ($model->status == 10) {
                            return '';
                        }
                        $options = [
                            'title' => Yii::t('rbac-admin', 'Activate'),
                            'aria-label' => Yii::t('rbac-admin', 'Activate'),
                            'data-confirm' => Yii::t('rbac-admin', 'Are you sure you want to activate this user?'),
                            'data-method' => 'post',
                            'data-pjax' => '0',
                        ];
                        return Html::a('<span class="glyphicon glyphicon-ok"></span>', $url, []);
                    }*/
                    ]
                ],
            ],
        ]);
        ?>
</div>
    </div>
    </div>
